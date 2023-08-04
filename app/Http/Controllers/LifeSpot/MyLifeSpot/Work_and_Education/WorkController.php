<?php

namespace App\Http\Controllers\LifeSpot\MyLifeSpot\Work_and_Education;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WorkController extends Controller
{
    public function index()
    {
        return view('lifespot.mylifespot.work_education.work.index');
    }

    public function edit()
    {
        return view('lifespot.mylifespot.work_education.work.edit');
    }
}
