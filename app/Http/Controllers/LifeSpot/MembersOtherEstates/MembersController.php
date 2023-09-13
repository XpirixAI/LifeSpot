<?php

namespace App\Http\Controllers\LifeSpot\MembersOtherEstates;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

use App\Models\User;

class MembersController extends Controller
{
    public function index()
    {
        $user_id = Auth::user()->id;
        $rel_types = DB::table('relationship_types')->get();

        $estate_relationships = DB::table('estate_relationships')->where('owner_id', $user_id)->get();

        $relations = array();

        foreach($estate_relationships as $estate_rel) {
            $rel_user = User::find($estate_rel->rel_user_id);
            $rel_info = DB::table('relationship_types')->where('id', $estate_rel->relationship_type)->first();

            $rel = ['user' => $rel_user, 'info' => $rel_info];
            array_push($relations, $rel);
        }

        return view('lifespot.members_other_estates.members.index')->with(['rel_types' => $rel_types, 'relations' => $relations]);
    }
}
