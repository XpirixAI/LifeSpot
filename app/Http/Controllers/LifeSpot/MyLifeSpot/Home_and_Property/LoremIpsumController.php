<?php

namespace App\Http\Controllers\LifeSpot\MyLifeSpot\Home_and_Property;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoremIpsumController extends Controller
{
    public function index()
    {
        return view('lifespot.mylifespot.home_property.lorem_ipsum.index');
    }
}
