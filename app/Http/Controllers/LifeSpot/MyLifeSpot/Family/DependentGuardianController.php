<?php

namespace App\Http\Controllers\LifeSpot\MyLifeSpot\Family;

use App\Http\Controllers\Controller;
use App\Models\Dependent;
use App\Models\DependentGuardian;
use Illuminate\Http\Request;

class DependentGuardianController extends Controller
{
    public function show(DependentGuardian $dependentGuardian, Dependent $asset,$id)
    {
        $guardian = DependentGuardian::first()->get();
        // dd($guardian);
        return view('lifespot.mylifespot.family.dependents.show',compact('dependentGuardian','asset','guardian'));
    }
}

// DON"T Think THIS CONTROLLER IS NEEDED????
