<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Laravel\Fortify\Contracts\CreatesNewUsers;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
    * Validate and create a newly registered user.
    *
    * @param  array<string, string>  $input
    */
    public function create(array $input): User
    {
        Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],
            'surname' => ['required', 'string', 'max:255'],
            'birth' => ['required', 'string'],
            'gender' => ['required'],
            'email' => [
                'required',
                'string',
                'email',
                'max:255',
                Rule::unique(User::class),
            ],
            'password' => $this->passwordRules(),
            'privacy' => ['required' ,'in:true,1'],
            // 'marketing' => ['boolean'],

        ])->validate();

            $marketing= isset($input['marketing'])?$input['marketing']:false;


            return User::create([
                'name' => $input['name'],
                'surname' => $input['surname'],
                'birth' => $input['birth'],
                'gender' => $input['gender'],
                'telephone' => $input['telephone'],
                'email' => $input['email'],
                'password' => Hash::make($input['password']),
                'privacy' => true,
                'marketing' => $marketing,
            ]);
        }
    }
