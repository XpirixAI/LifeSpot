<?php

namespace App\Http\Controllers\LifeSpot\MembersOtherEstates;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;

class MembersController extends Controller
{
    public function index()
    {
        $rel_types = DB::table('relationship_types')->get();
        return view('lifespot.members_other_estates.members.index')->with(['rel_types' => $rel_types]);
    }
}
