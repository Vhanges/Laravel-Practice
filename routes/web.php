<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormAggregator;
use App\Http\Controllers\FormParameterAggregator;



Route::get('/', function() {
    return view('form/form');
});


Route::get('/get-form', [FormParameterAggregator::class, 'getFormData'])
    ->name('form-get');


Route::post('/', action: [FormAggregator::class, 'handleForm'])
    ->name('form.handle');

Route::post('/', [FormAggregator::class, 'handleForm'])
    ->name('form.handle');
