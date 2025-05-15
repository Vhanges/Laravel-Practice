<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormParameterAggregator extends Controller
{
    public function getFormData(Request $request)
    {
        $name = $request->input('name');
        $email = $request->input('email');
        $message = $request->input('message');
        return view('form.result', compact('name', 'email', 'message'));
    }
}
