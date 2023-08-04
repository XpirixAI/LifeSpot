<?php

namespace App\Http\Controllers\LifeSpot\MyLifeSpot\Home_and_Property;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('lifespot.mylifespot.home_property.home.index');
    }

    public function index_beach()
    {
        return view('lifespot.mylifespot.home_property.home.real_estate.index_beach');
    }

    public function index_primary()
    {
        return view('lifespot.mylifespot.home_property.home.real_estate.index_primary');
    }

    public function edit_primary()
    {
        return view('lifespot.mylifespot.home_property.home.real_estate.edit_primary');
    }

    public function edit_beach()
    {
        return view('lifespot.mylifespot.home_property.home.real_estate.edit_beach');
    }

    public function store()
    {
        return view('lifespot.mylifespot.home_property.home.real_estate.create_home');
    }
}
