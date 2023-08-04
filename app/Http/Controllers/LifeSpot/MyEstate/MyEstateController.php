<?php

namespace App\Http\Controllers\LifeSpot\MyEstate;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MyEstateController extends Controller
{
    public function index()
    {
        return view('lifespot.myestate.index');
    }
}
