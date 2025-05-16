<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormParameterAggregator extends Controller
{
    public function getFormData(Request $request)
    {

        $validatedData = $request->validate([
            'name' => 'numeric',
        ], [
            'name.numeric' => 'The name must be a number!',
        ]);


        $name = $validatedData['name'] ?? null;
        $email = $request->input('email');
        $message = $request->input('message');

        return view('form.result', compact('name', 'email', 'message'));
    }

}
