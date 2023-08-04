<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DropzoneController extends Controller
{

    /**
     * Generate Image upload View
     *
     * @return void
     */
    public function dropzone()
    {
        return view('dropzone');
    }

    /**
     * Image Upload Code
     *
     * @return void
     */
    public function dropzoneStore(Request $request)
    {
        $image = $request->file('file');

        $imageName = time().'.'.$image->extension();
        $image->move(public_path('upload/docs_personal'),$imageName);

        return response()->json(['success'=>$imageName]);
    }
}
