<?php

namespace App\Http\Controllers\LifeSpot\MembersOtherEstates;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

use App\Models\User;

class MembersController extends Controller
{
    public function index(Request $request)
    {   
        $user_id = Auth::user()->id;
        $owner_id = $user_id;
        if(!empty($request->estate_id)) {
            $owner_id = $request->estate_id;
        }

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

        $files = [];
        $default_file_categories = DB::table('file_categories')->get();
        $custom_file_categories = [];

        // IF selected estate is not owned by the current user, get list of current documents and permissions
        if($is_owned_by_current_user) {
            $files = DB::table('files')->where('user_id', $user_id)->get();
            $custom_file_categories = DB::table('user_custom_file_categories')->where('user_id', $user_id)->get();
        // ELSE, find all shared documents for display in modal
        } else {
            
        }

        return view('lifespot.members_other_estates.members.index')
            ->with([
                'rel_types' => $rel_types,
                'relations' => $relations,
                'owners' => $owners,
                'selected_estate' => $request->estate_id,
                'is_owned_by_current_user' => $is_owned_by_current_user,
                'files' => $files,
                'default_file_categories' => $default_file_categories,
                'custom_file_categories' => $custom_file_categories,
            ]);
    }

    // START document permissions methods
    // TODO: move these to their own controller
    public function update_user_document_permissions(Request $request) {
        $user_id = Auth::user()->id;

        $permissions = [];
        foreach($request->file_permissions as $file_name => $file_perm) {
            Log::info(['DEV: $file_perm', $file_perm]);
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
            ->where('doc_viewer_id', $request->doc_viewer_id)
            ->get();
        Log::info(['DEV: doc_permissions', $doc_permissions]);
        return response()
            ->json([
                'doc_permissions' => $doc_permissions
            ]);
    }
    // END document permissions methods
}
