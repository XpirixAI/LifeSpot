<?php

namespace App\Http\Controllers;

use App\Models\Admim;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Intervention\Image\Facades\Image;

class AdmimController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->authorize('owner_access');
            // $users = User::all();
            $users = User::select("*")
            ->whereNotNull('last_seen')
            ->orderBy('last_seen', 'DESC')
            ->paginate(10);

            return view('company_admin.users.index', compact('users'))
                ->with('i');
            // return view('company_admin.admin_master', compact('users'));
            // $this->authorize('xpirix_edit');
            // return view('company_admin.dashboard.index');

    }

    public function viewProfile()
    {
        $id = Auth::user()->id;
        $user = User::find($id);
        return view('admin.admin_profile_view', compact('user'));
    }

    public function editProfile()
    {
        $id = Auth::user()->id;
        $user = User::find($id);
        // return view ('admin.admin_profile_edit', compact('user'));
        return view('admin.admin_profile_edit', compact('user'));
    }


    public function storeProfile(Request $request)
    {
        $data = request()->validate([
            'profile_photo_path' => 'file|max:5000|mimes:jpeg,png,jpg,webp',
            'fname' => ['required', 'string', 'max:255'],
            'lname' => ['required', 'string', 'max:255'],
            'uname' => 'required|unique:users,uname,' .auth()->id(),
            'email' => 'required|email|unique:users,email,' .auth()->id(),
            // 'uname' => 'required|unique:users,uname,' .auth()->id(),
            // 'email' => 'required|email|unique:users,email,'.$this->user->id,
            // 'email' => 'required|email|unique:users,email,'.$this->id.',id'
            // 'uname' => 'required|unique:users,',
            // 'uname' => ['required', 'string', 'max:255', 'unique:users,'.ignore($this->user)],
            // 'email' => ['required', 'string', 'email', 'max:255', 'unique:users'.$this->user->id],
        ]);
        $id = Auth::user()->id;
        $data = User::find($id);
        // $data = $user;
        $data->fname = $request->fname;
        $data->lname = $request->lname;
        $data->name = $request->fname.' '.$request->lname;
        $data->uname = $request->uname;
        $data->email = $request->email;

        if ($request->file('profile_photo_path')) {
            $file = $request->file('profile_photo_path');

            $filename = date('YmdHi').$file->getClientOriginalName();
            Image::make($file)->resize(200,200, function($const) {
                $const->aspectRatio();
            });
            $file->move(public_path('upload/admin_images'),$filename);
            $data['profile_photo_path'] = $filename;
        }
        // $oldProfileimage = $request->oldProfileimage;
        $data->save();
        // if ($oldProfileimage !="no_image.png") {
        // unlink($oldProfileimage);
        // }

        // $notification = array(
        //     'message' => 'Admin Profile Updated Successfully',
        //     'alert-type' => 'info'
        // );

        // return redirect()->route('viewProfile')->with($notification);
        return redirect()->route('viewProfile');


        // return view ('admin.admin_profile_edit', compact('user'));
    }

    public function changeMyPassword()
    {
        return view('admin.admin_change_my_password');
    }

    // public function updateMyPassword(Request $request)
    // {
    //     $this->validate($request, [
    //         'oldpassword' => 'required',
    //         'newpassword' => 'required',
    //     ]);

    //     $hashedPassword = Auth::user()->password;
    //     if (Hash::check($request->oldpassword , $hashedPassword)) {
    //         if (Hash::check($request->newpassword , $hashedPassword)) {

    //             $user = User::find(Auth::user()->id);
    //             $user->password = bcrypt($request->newpassword);
    //             $user->save();
    //             session()->flash('message','password updated successfully');
    //             return redirect()->back();
    //         }
    //         else{
    //             session()->flash('error','new password can not be the old password!');
    //             return redirect()->back();
    //         }
    //     }
    //     else{
    //         session()->flash('error','old password doesnt matched');
    //         return redirect()->back();
    //     }
    // }

    public function userAdmin()
    {
        // $this->authorize('owner_access');
        //     // $users = User::all();
        //     $users = User::select("*")
        //     ->whereNotNull('last_seen')
        //     ->orderBy('last_seen', 'DESC')
        //     ->paginate(10);

            // return view('company_admin.users.index', compact('users'));
            // return view('company_admin.admin_master', compact('users'));
            // $this->authorize('xpirix_edit');
            return view('company_admin.dashboard.index');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Admim  $admim
     * @return \Illuminate\Http\Response
     */
    public function show(Admim $admim)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Admim  $admim
     * @return \Illuminate\Http\Response
     */
    public function edit(Admim $admim, User $user)
    {
        // $user = User::where('id', $admin)->first();
        // $user =

        // return view('company_admin.admin_master', compact('user'));
        return view('company_admin.users.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Admim  $admim
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Admim $admim)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Admim  $admim
     * @return \Illuminate\Http\Response
     */
    public function destroy(Admim $admim)
    {
        //
    }
}
