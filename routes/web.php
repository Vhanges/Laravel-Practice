<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormAggregator;



Route::get('/', action: function () {
    return view('form/form');
});

Route::post('/', [FormAggregator::class, 'handleForm'])
    ->name('form.handle');