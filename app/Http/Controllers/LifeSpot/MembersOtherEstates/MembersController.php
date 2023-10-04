<?php

namespace App\Http\Controllers\LifeSpot\MembersOtherEstates;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

use App\Models\User;

use DataTables;

class MembersController extends Controller
{
    public function index(Request $request)
    {   
        $user_id = Auth::user()->id;
        $owner_id = $user_id;
        if(!empty($request->estate_id)) {
            $owner_id = $request->estate_id;
        }

        $current_owner = User::find($owner_id);

        $is_owned_by_current_user = false;
        if($owner_id == $user_id) {
            $is_owned_by_current_user = true;
        }
        $rel_types = DB::table('relationship_types')->get();

        // Find users that should be included in the selected estate
        $estate_relationships = DB::table('estate_relationships')->where('owner_id', $owner_id)->get();
        $relations = array();
        foreach($estate_relationships as $estate_rel) {
            $rel_user = User::find($estate_rel->rel_user_id);
            $rel_info = DB::table('relationship_types')->where('id', $estate_rel->relationship_type)->first();

            $rel = ['user' => $rel_user, 'info' => $rel_info];
            array_push($relations, $rel);
        }

        // Find list of other estates
        $estates = DB::table('estate_relationships')->where('rel_user_id', $user_id)->get();
        $owners = array();
        foreach($estates as $est) {
            $owner = User::find($est->owner_id);
            if(!empty($owner)) {
                array_push($owners, $owner);
            }
        }

        // IF selected estate is not owned by the current user, get list of current documents
        $files = [];
        $default_file_categories = DB::table('file_categories')->get();
        $custom_file_categories = [];
        if($is_owned_by_current_user) {
            $files = DB::table('files')->where('user_id', $user_id)->get();
            $custom_file_categories = DB::table('user_custom_file_categories')->where('user_id', $user_id)->get();
        // ELSE, find all shared documents for display in modal
        } else {
            $files = DB::table('files')
                ->where('user_id', $owner_id)
                ->get();

            $doc_permissions = DB::table('estate_user_file_permissions')
                ->where('doc_owner_id', $owner_id)
                ->where('doc_viewer_id', $user_id)
                ->get();

            $allowed_file_ids = $doc_permissions->map(function($permission){ 
                return $permission->doc_id;
            })->toArray();

            $files = $files->filter(function($file) use ($allowed_file_ids){
                return in_array($file->id, $allowed_file_ids);
            });
        }

        // Find all on-platform invitations to current user
        $invitations = DB::table('invitations')
            ->where('invitee_id', $user_id)
            ->where('is_on_platform', 1)
            ->where('responded', 0)
            ->get();

        return view('lifespot.members_other_estates.members.index')
            ->with([
                'current_owner' => $current_owner,
                'rel_types' => $rel_types,
                'relations' => $relations,
                'owners' => $owners,
                'selected_estate' => $request->estate_id,
                'is_owned_by_current_user' => $is_owned_by_current_user,
                'files' => $files,
                'default_file_categories' => $default_file_categories,
                'custom_file_categories' => $custom_file_categories,
                'invitations' => $invitations,
            ]);
    }

    // START document permissions methods
    // TODO: move these to their own controller
    public function update_user_document_permissions(Request $request) {
        $user_id = Auth::user()->id;

        $permissions = [];
        foreach($request->file_permissions as $file_name => $file_perm) {
            if($file_perm == 'true') {
                // $file_type = strtok($file_name, "_");
                $file_id = (int)substr($file_name, strrpos($file_name, '_') + 1);
                array_push($permissions, [
                    'doc_owner_id' => $user_id,
                    'doc_viewer_id' => $request->doc_viewer_id,
                    'doc_id' => $file_id,
                ]);
            }
        }

        if(count($permissions) > 0) {
            DB::table('estate_user_file_permissions')
                ->where('doc_viewer_id', $request->doc_viewer_id)
                ->delete();
        }
        DB::table('estate_user_file_permissions')->insert($permissions);
        return redirect()->back();
    }

    public function get_user_document_permissions(Request $request) {
        $doc_permissions = DB::table('estate_user_file_permissions')
            ->where('doc_owner_id', Auth::user()->id)
            ->where('doc_viewer_id', $request->doc_viewer_id)
            ->get();
        return response()
            ->json([
                'doc_permissions' => $doc_permissions
            ]);
    }
    // END document permissions methods

    public function download_file(Request $request)
    {
        $file = DB::table('files')->where('id', $request->fileID)->first();

        // $file= public_path()."/storage".$request->fileName;
        $file_path = storage_path('app/upload/'.$file->name);

        $headers = [
            'Content-Type' => 'application/pdf',
        ];

        return response()->download($file_path, $file->title, $headers);

        // return response()->json(['success'=>'success']);
    }

    public function load_user_suggestions(Request $request)
    {
        $search_text =  $request->search_text;
        $users = [];

        if(!empty($request->search_text)) {
            $users = User::where(function ($query) use ($search_text){
                $query->where('name', 'LIKE', '%'.$search_text.'%')
                    ->orWhere('fname', 'LIKE', '%'.$search_text.'%')
                    ->orWhere('lname', 'LIKE', '%'.$search_text.'%')
                    ->orWhere('email', 'LIKE', '%'.$search_text.'%');
            })
            ->where('id', '!=', Auth::user()->id)
            ->get();
        }

        return DataTables::of($users)
            ->editColumn('avatar',  function ($res) {
                $url = url('upload/no_image.png');
                if (
                    !empty($res->profile_photo_path) 
                    && file_exists(public_path('upload/admin_images/'.$res->profile_photo_path))
                ) {
                   $url = url('upload/admin_images/'.$res->profile_photo_path);
                }
                return '<img class="h-12 w-12 rounded-full" src="'.$url.'" alt="Profile Image">';
            })
            ->editColumn('name',  function ($res) {
                return $res->name;
            })
            ->editColumn('action',  function ($res) {
                $btn = 
                    '<button
                        id="select_button_'.$res->id.'"
                        type="button"
                        class="flex space-x-2 font-bold items-center text-blue-700 pr-8 lg:my-0 my-4"
                        onclick="selectUserSuggestion('.$res->id.')"
                    >
                        Select
                    </button>';
                return $btn;
            })
            ->rawColumns(['avatar', 'action'])
            ->make(true);

        // return response()->json(['users' => $users]);
    }

    public function select_user_suggestion(Request $request) 
    {
        $user = User::where('id', $request->id)->first();
        return response()->json([
            'id' => $user->id,
            'name' => $user->name,
            'profile_photo_path' => url('upload/admin_images/'.$user->profile_photo_path)
        ]);
    }

    public function delete_relationship(Request $request)
    {
        DB::table('estate_relationships')
            ->where('rel_user_id', $request->user_id)
            ->where('owner_id', Auth::user()->id)
            ->delete();
        return response()->json([]);
    }

    public function edit_relationship(Request $request)
    {
        DB::table('estate_relationships')
            ->where('rel_user_id', $request->user_id)
            ->where('owner_id', Auth::user()->id)
            ->update([
                'relationship_type' => $request->relationship_id,
            ]);
        return response()->json([]);
    }
}
