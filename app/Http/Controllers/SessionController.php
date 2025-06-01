<?php

namespace App\Http\Controllers;

use Illuminate\Auth\Events\Login;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class SessionController extends Controller
{
    public function create()
    {
        return view('auth/login');
    }

    public function store()
    {
        // validate 
        $attirbutes = request()->validate([
            'email' => ['email', 'required'],
            'password' => ['required']
        ]);

        // attempt to Login
        if ( ! Auth::attempt($attirbutes)){
            throw ValidationException::withMessages([
                'email' => 'Your email do not match your credential'
            ]);
        }
        

        // regenerate session token
        request()->session()->regenerate();
        // redirect
        return redirect('/jobs');
    }

    public function destroy()
    {
        Auth::logout();

        return redirect('/');
    }
}
