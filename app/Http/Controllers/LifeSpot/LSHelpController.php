<?php

namespace App\Http\Controllers\LifeSpot;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LSHelpController extends Controller
{
    public function index()
    {
        return view('lifespot.help_center.index');
    }

    public function xpirixIndex()
    {
        return view('lifespot.help_center.xpriixIndex');
    }
}
