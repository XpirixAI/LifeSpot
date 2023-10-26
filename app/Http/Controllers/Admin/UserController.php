<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

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
        $validated = $request->validate([
            'role' => 'required',
        ]);

        $updatedRole = $validated['role'];
        if ($updatedRole == 'Owner' && Auth::user()->role == 'Owner'){
            $user->has_access = 1;
            $user->can_edit = 1;
            $user->ads_access = 1;
        } elseif ($updatedRole == 'Editor') {
            $user->has_access = 0;
            $user->can_edit = 1;
            $user->ads_access = 0;
        } elseif ($updatedRole == 'Sponsor') {
            $user->has_access = 0;
            $user->can_edit = 0;
            $user->ads_access = 1;
        } else {
            $user->has_access = 0;
            $user->can_edit = 0;
            $user->ads_access = 0;
        }

        // return to_route('users.index');
        // return to_route('users.index')->with('message', 'User access has been updated');
        return redirect()->route('users.index');
    }

}
