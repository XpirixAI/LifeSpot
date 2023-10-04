<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

use App\Mail\MyTestEmail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Jetstream\Jetstream;

use App\Actions\Fortify\CreateNewUser;
use App\Actions\Fortify\PasswordValidationRules;

class InvitationController extends Controller
{

    use PasswordValidationRules;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $invite = DB::table('invitations')
            ->where('id', $request->invite_id)
            ->where('responded', 0)
            ->first();

        if($invite) {
            if(Auth::check()) {
                Auth::logout();
    
                $request->session()->invalidate();
     
                $request->session()->regenerateToken();
            }
            
            return view('auth.invite-register', [
                'invite_id' => $request->invite_id,
                'owner_id' => $request->owner_id,
                'relationship_type' => $request->relationship_type
            ]);
        } else {
            return view('auth.invite_invalid', [
                'invite_id' => $request->invite_id,
                'owner_id' => $request->owner_id,
                'relationship_type' => $request->relationship_type
            ]);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $relationship = DB::table('relationship_types')->where('id', $request->relationship_type)->first();
        
        // on platform invite
        if($request->selected_user_id) {
            $selected_user = User::where('id', $request->selected_user_id)->first();

            DB::table('invitations')->insertGetId([
                'relationship_id' => $request->relationship_type,
                'email' => $selected_user->email,
                'is_on_platform' => 1,
                'responded' => 0,
                'inviter_id' => Auth::user()->id,
                'invitee_id' => $selected_user->id,
            ]);
        // off platform invite
        } else {
            $user = Auth::user();

            $invite_id = DB::table('invitations')->insertGetId([
                'relationship_id' => $request->relationship_type,
                'email' => $request->email,
                'is_on_platform' => 0,
                'responded' => 0,
                'inviter_id' => Auth::user()->id,
            ]);
            Mail::to($request->email)->send(new MyTestEmail(
                $relationship,
                $user,
                $invite_id,
            ));
        }

        return redirect()->back();
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
     * @param  \App\Models\Price  $price
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Price  $price
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Price  $price
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Price  $price
     * @return \Illuminate\Http\Response
     */
    public function destroy()
    {
        //
    }

    public function accept_on_platform_invite(Request $request) 
    {   $invite = DB::table('invitations')->where('id', $request->id)->first();

        DB::table('invitations')->where('id', $request->id)->update(['responded' => 1]);
        DB::table('estate_relationships')->insert([
            'owner_id' => $invite->inviter_id,
            'rel_user_id' => Auth::user()->id,
            'relationship_type' => $invite->relationship_id,
        ]);
        return redirect()->back();
    }

    public function accept_invite(Request $request) // off platform invite
    {
        Validator::make($request->all(), [
            'fname' => ['required', 'string', 'max:255'],
            'lname' => ['required', 'string', 'max:255'],
            'uname' => ['required', 'string', 'max:255', 'unique:users'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => $this->passwordRules(),
            'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['accepted', 'required'] : '',
        ])->validate();

        $new_user = User::create([
            'name' => $request->fname .' '. $request->lname,
            'fname' => $request->fname,
            'lname' => $request->lname,
            'uname' => $request->uname,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        DB::table('estate_relationships')->insert([
            'owner_id' => $request->owner_id,
            'relationship_type' => $request->relationship_type,
            'rel_user_id' => $new_user->id,
        ]);
        DB::table('invitations')->where('id', $request->invite_id)->where('responded', 0)->update(['responded' => 1]);

        Auth::attempt(['email' => $request->email, 'password' => $request->password]);

        return redirect()->route('getting_started');
    }

    public function decline_invite(Request $request)
    {

        if(Auth::check()) {
            Auth::logout();

            $request->session()->invalidate();
 
            $request->session()->regenerateToken();
        }

        DB::table('invitations')->where('id', $request->invite_id)->update([
            'responded' => 1,
        ]);
        
        return response()->view('auth.decline_invite_success');
    }
}