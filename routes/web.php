<?php

use Illuminate\Support\Facades\Route;
use App\Models\Jobs;

Route::get('/', function(){

    return view('Layout/master');
    
})->name('master');

