<?php

namespace App\Http\Controllers\LifeSpot\GrowMyEstate;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GrowMyEstateController extends Controller
{
    public function index()
    {
        return view('lifespot.growmyestate.index');
    }
}
