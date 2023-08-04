<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ChangePasswordController extends Controller
{
    public function changePassword()
    {
       return view('admin.change-password');
    }

    public function updatePassword(Request $request)
{
        # Validation
        $request->validate([
            'old_password' => 'required',
            'new_password' => 'required|confirmed',
        ]);


        #Match The Old Password
        if(!Hash::check($request->old_password, auth()->user()->password)){
            return back()->with("error", "Old Password Doesn't match!");
        }


        #Update the new Password
        User::whereId(auth()->user()->id)->update([
            'password' => Hash::make($request->new_password)
        ]);

        return back()->with("status", "Password changed successfully!");
}


    // public function changePassword(Request $request)
    // {
    //     $request->validate([
    //       'current_password' => 'required',
    //       'password' => 'required|string|min:6|confirmed',
    //       'password_confirmation' => 'required',
    //     ]);

    //     $user = Auth::user();

    //     if (!Hash::check($request->current_password, $user->password)) {
    //         return back()->with('error', 'Current password does not match!');
    //     }

    //     $user->password = Hash::make($request->password);
    //     save();

    //     return back()->with('success', 'Password successfully changed!');
    // }

}
