<?php

namespace App\Http\Controllers\LifeSpot\Documents;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;

use Carbon\Carbon;

class DocumentsController extends Controller
{
    
    private function get_custom_categories($user_id)
    {
        return DB::table('user_custom_file_categories')->where('user_id', $user_id)->get();
    }

    public function index(Request $request, string $cat_id)
    {   
        $user_id = Auth::user()->id;
        $documents = DB::table('files')->where([
            'user_id' => $user_id,
            'category' => $cat_id,
            'is_custom_category' => 0
        ])->get();
        $custom_categories = $this->get_custom_categories($user_id);
        $default_categories = DB::table('file_categories')->get();

        $selected_cat = DB::table('file_categories')->where('id', $cat_id)->get();
        $page_title = $selected_cat[0]->title;

        return view('lifespot.documents.index')->with([
            'documents' => $documents,
            'cat_id' => intval($cat_id),
            'default_categories' => $default_categories,
            'custom_categories' => $custom_categories,
            'page_title' => $page_title,
        ]);
    }

    public function custom(Request $request, string $cat_id) 
    {
        $user_id = Auth::user()->id;
        $documents = DB::table('files')->where([
            'user_id' => $user_id,
            'category' => $cat_id,
            'is_custom_category' => 1
        ])->get();
        $custom_categories = $this->get_custom_categories($user_id);
        $default_categories = DB::table('file_categories')->get();

        $selected_cat = DB::table('user_custom_file_categories')->where('id', $cat_id)->get();
        $page_title = $selected_cat[0]->title;

        return view('lifespot.documents.index')->with([
            'documents' => $documents,
            'cat_id' => null,
            'custom_cat_id' => $cat_id,
            'default_categories' => $default_categories,
            'custom_categories' => $custom_categories,
            'page_title' => $page_title,
        ]);
    }

    public function custom_create(Request $request) {
        $user_id = Auth::user()->id;
        $title = $request->title;

        DB::table('user_custom_file_categories')->insert(['title' => $title, 'user_id' => $user_id]);
        return redirect()->back();
    }

    public function favorites(Request $request)
    {
        $user_id = Auth::user()->id;
        $documents = DB::table('files')->where(['user_id' => $user_id, 'is_favorite' => 1])->get();
        $custom_categories = $this->get_custom_categories($user_id);
        $default_categories = DB::table('file_categories')->get();
        return view('lifespot.documents.index')->with([
            'documents' => $documents,
            'cat_id' => null,
            'default_categories' => $default_categories,
            'custom_categories' => $custom_categories,
            'page_title' => 'Favorites'
        ]);
    }

    public function recents(Request $request)
    {
        $user_id = Auth::user()->id;
        $documents = DB::table('files')->where('user_id', $user_id)->get()->toArray();

        $now = Carbon::now();
        $documents = array_filter($documents, function($doc) use ($now) {
            return $now->diffInDays($doc->updated_at) < 1 && $now->greaterThan($doc->updated_at);
        });
        
        $default_categories = DB::table('file_categories')->get();
        $custom_categories = $this->get_custom_categories($user_id);

        return view('lifespot.documents.index')->with([
            'documents' => $documents,
            'cat_id' => null,
            'default_categories' => $default_categories,
            'custom_categories' => $custom_categories,
            'page_title' => 'Recents'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'folder' => 'required',
            'formFile' => 'required',
        ]);

        $fileFolder = '';
        $fileName = '';
        $fileTitle = '';
        $user_id = Auth::user()->id;

        if($request->folder) {
            $fileFolder = $request->folder;
        }

        if($request->formFile) {
            $formFile = $request-> formFile;
            $fileName = time().'.'.$formFile->extension();
            $fileTitle = $formFile->getClientOriginalName();
        }

        $is_custom_category = $request->is_custom_category ? 1 : 0;
       
        DB::table('files')->insert(
            array(
                'user_id' => $user_id,
                'title' => $fileTitle,
                'category' => intval($fileFolder),
                'name' => $fileName,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'is_custom_category' => $is_custom_category
            )
        );
        $request->formFile->storeAs('upload', $fileName);  
        return redirect('/documents/1');
    }

    public function get_doc_details(Request $request) 
    {
        $file = DB::table('files')->where('id', $request->id)->first();
        return response()->json(['title' => $file->title, 'category' => $file->category]);
    }

    public function update_doc(Request $request) 
    {
        $is_custom_category = $request->is_custom_category ? 1 : 0;

        $affected = DB::table('files')
            ->where('id', $request->id)
            ->update([
                'title' => $request->title,
                'category' => $request->category ? $request->category : '0',
                'updated_at' => Carbon::now(),
                'is_custom_category' => $is_custom_category
            ]);
        return redirect()->back()->with('success', 'Document successfully updated!');
    }

    public function delete_doc(Request $request) 
    {
        $file = DB::table('files')->where('id', $request->id)->delete();
        return response()->json(["success"=>"Document successfully deleted!"]);
    }

    public function favorite_doc(Request $request) 
    {
        DB::table('files')->where('id', $request->id)->update(['is_favorite' => $request->is_favorite]);
        return response()->json(["success"=>"Document successfully favorited!"]);
    }
}
