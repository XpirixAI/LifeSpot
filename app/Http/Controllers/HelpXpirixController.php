<?php

namespace App\Http\Controllers;

use App\Models\XpirixContent;
use Illuminate\Http\Request;

class HelpXpirixController extends Controller
{
    public function index()
    {
        $contents = XpirixContent::find(1); //For Footer Content
        return view('xpirix.body.help_center.xpirix_help.index',compact('contents'));
    }
}
