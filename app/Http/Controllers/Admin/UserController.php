<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        // $users = User::all();
        $users = User::all()->except([1,3]);
        return view('admin.users.index', compact('users'));
    }

    public function edit(User $user)
    {
        return view('admin.users.edit', compact('user'));
    }

    public function update(Request $request, User $user)
    {

        // NOTE:  This is temporary -- as more roles added - FIX THIS LOGIC

        $validated = $request->validate([
            'role' => 'required',
        ]);

        $updatedRole = $request->role;

        if ($updatedRole == 'Editor') {
            $user->can_edit = 1;
            $user->ads_access = 0;
        } elseif ($updatedRole == 'Sponsor') {
            $user->can_edit = 0;
            $user->ads_access = 1;
        } else {
            $user->can_edit = 0;
            $user->ads_access = 0;
        }


        $user->update($validated,[

        ] );


        // $validated=='Editor' ? $user->can_edit = 1 : $user->can_edit == 0;
        // $validated=='Sponsor' ? $user->ads_access = 1 : $user->ads_access == 0;
        // $validated=='Member' ? $user->can_edit = 0 : $user->ads_access == 0;

        return to_route('users.index');



        // return to_route('users.index')->with('message', 'User access has been updated');
    }

}
