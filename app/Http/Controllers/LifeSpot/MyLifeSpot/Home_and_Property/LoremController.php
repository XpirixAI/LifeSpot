<?php

namespace App\Http\Controllers\LifeSpot\MyLifeSpot\Home_and_Property;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoremController extends Controller
{
    public function index()
    {
        return view('lifespot.mylifespot.home_property.lorem.index');
    }
}
