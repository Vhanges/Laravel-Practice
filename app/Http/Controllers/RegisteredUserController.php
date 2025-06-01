<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Password;

class RegisteredUserController extends Controller
{
    public function create()
    {
        return view('auth/register');
    }
    public function store()
    {
        // validate

        $attributes = request()->validate([
            'first_name' => ['required'],
            'last_name' => ['required'],
            'email' => ['required', 'email'],
            'password' => ['required', Password::min(6), 'confirmed'], // confirmed password_confirmation - used to check if the 2 field matched
        ]);

        // create
        
        $user = User::create($attributes);

        // log in
        Auth::login($user);

        // redirect
        return redirect('/jobs');
    }
}
