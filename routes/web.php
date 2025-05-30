<?php

use App\Http\Controllers\JobsController;
use App\Http\Controllers\RegisteredUserController;
use App\Http\Controllers\SessionController;
use Illuminate\Support\Facades\Route;

// Home Page
Route::view('/', 'home')->name('home');

// About Page
Route::view('/about', 'about')->name('about');

// Contact Page
Route::view('/contact', 'contact')->name('contact');


Route::resource('jobs', JobsController::class);

// Auth 

Route::get('/register', [RegisteredUserController::class, 'create']);
Route::post('/register', [RegisteredUserController::class, 'store']);

Route::get('/login', [SessionController::class, 'create']);
Route::post('/login', [SessionController::class, 'store']);



// Route::controller(JobsController::class)->group(function () {

//     Route::get('/jobs',  'index')->name('jobs');
//     Route::post('/jobs',  'store');
//     Route::get('/jobs/{job}',  'show');
//     Route::patch('/jobs/{id}',  'update');
//     Route::delete('/jobs/{job}',  'destroy');
//     Route::get('/jobs/{job}/edit',  'edit');
//     Route::get('/jobs/create',  'create');

// });
