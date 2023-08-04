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
    public function index(Request $request, string $cat_id)
    {   
        $user_id = Auth::user()->id;
        $documents = DB::table('files')->where(['user_id' => $user_id, 'category' => $cat_id])->get();

        return view('lifespot.documents.index')->with(['documents' => $documents, 'cat_id' => intval($cat_id)]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Log::info('DEV: store() fired');

        $validated = $request->validate([
            'folder' => 'required',
            'formFile' => 'required',
        ]);

        Log::info(['DEV: $validated:', $validated]);

        if(!$validated) {
            Log::info('DEV: invalid response');
        }

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
       
        DB::table('files')->insert(
            array(
                'user_id' => $user_id,
                'title' => $fileTitle,
                'category' => intval($fileFolder),
                'name' => $fileName,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            )
        );
        $request->formFile->storeAs('upload', $fileName);  

        Log::info('DEV: store documents executed successfully');
        return redirect('/documents/1');
    }

    public function get_doc_details(Request $request) {
        Log::info(['DEV: $request->id', $request->id]);
        $file = DB::table('files')->where('id', $request->id)->first();
        return response()->json(['title' => $file->title, 'category' => $file->category]);
    }

    public function update_doc(Request $request) {
        $affected = DB::table('files')
            ->where('id', $request->id)
            ->update([
                'title' => $request->title,
                'category' => $request->category ? $request->category : '0'
            ]);
        return redirect()->back()->with('success', 'Document successfully updated!');
    }

    public function delete_doc(Request $request) {
        Log::info('DEV: delete_doc fired');
        $file = DB::table('files')->where('id', $request->id)->delete();
        // return redirect()->back()->with('success', 'Documents successfully deleted!');
        return response()->json(["success"=>"Document successfully deleted!"]);
    }

    public function favorite_doc(Request $request) {
        Log::info('DEV: favorite doc');
        DB::table('files')->where('id', $request->id)->update(['is_favorite' => $request->is_favorite]);
        return response()->json(["success"=>"Document successfully favorited!"]);
    }
}
