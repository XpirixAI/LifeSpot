<?php

namespace App\Http\Controllers\LifeSpot\MembersOtherEstates;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OtherEstatesController extends Controller
{
    public function index()
    {
        return view('lifespot.members_other_estates.other_estates.index');
    }
}
