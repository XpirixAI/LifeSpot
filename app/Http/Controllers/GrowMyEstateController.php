<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GrowMyEstateController extends Controller
{
    public function index()
    {
        return view('lifespot.growmyestate.index');
    }
}
