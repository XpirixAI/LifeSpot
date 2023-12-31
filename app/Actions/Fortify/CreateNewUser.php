<?php

namespace App\Actions\Fortify;

use App\Models\PersonalInformation;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Laravel\Jetstream\Jetstream;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array  $input
     * @return \App\Models\User
     */
    public function create(array $input)
    {
        Validator::make($input, [
            'fname' => ['required', 'string', 'max:255'],
            'lname' => ['required', 'string', 'max:255'],
            'uname' => ['required', 'string', 'max:255', 'unique:users'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => $this->passwordRules(),
            'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['accepted', 'required'] : '',
            'dev_pass' => ['required', 'string', Rule::in(['jquery_is_the_worst'])],
        ])->validate();

        return User::create([
            'name' => $input['fname'] .' '. $input['lname'],
            'fname' => $input['fname'],
            'lname' => $input['lname'],
            'uname' => $input['uname'],
            'email' => $input['email'],
            'password' => Hash::make($input['password']),
        ]);
    }
}
