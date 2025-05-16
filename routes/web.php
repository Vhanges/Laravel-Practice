<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormAggregator;
use App\Http\Controllers\FormParameterAggregator;



Route::get('/', function(){
    return view('home');
})->name('home');

Route::get('/contact', function(){
    return view('contact');
})->name('contact');

Route::get('/about', function(){
    return view('about');
})->name('about');