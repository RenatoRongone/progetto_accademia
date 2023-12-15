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

    protected $messages = [
        'name.required' => 'Il campo Nome è obbligatorio.',
        'name.string' => 'Il campo Cognome è obbligatorio.',
        'name.max' => 'Il campo Cognome è obbligatorio.',
        'surname.required' => 'Il campo Nome è obbligatorio.',
        'surname.string' => 'Il campo Cognome è obbligatorio.',
        'surname.max' => 'Il campo Cognome è obbligatorio.',
        'birth.required' => 'Il campo Cognome è obbligatorio.',
        'birth.string' => 'Il campo Cognome è obbligatorio.',
        'email.required' => 'Il campo Cognome è obbligatorio.',
        'email.string' => 'Il campo Cognome è obbligatorio.',
        'email.email' => 'Il campo Cognome è obbligatorio.',
        'email.max' => 'Il campo Cognome è obbligatorio.',
        // Aggiungi altri messaggi personalizzati per le regole di validazione necessarie.
    ];

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


        ])->validate();




            return User::create([
                'name' => $input['name'],
                'surname' => $input['surname'],
                'birth' => $input['birth'],
                'gender' => $input['gender'],
                'telephone' => $input['telephone'],
                'email' => $input['email'],
                'password' => Hash::make($input['password']),
            ]);
        }
    }
