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


Route::get('/jobs', [JobsController::class, 'index']);
Route::get('/jobs/create', action: [JobsController::class, 'create']);
Route::post('/jobs', [JobsController::class, 'store'])->middleware('auth');   
Route::get('/jobs/{job}', [JobsController::class, 'show']);

Route::get('/jobs/{job}/edit', [JobsController::class, 'edit'])
    ->middleware('auth')
    ->can('edit','jobs');

Route::patch('/jobs/{id}', [JobsController::class, 'update']);
Route::delete('/jobs/{job}', [JobsController::class, 'destroy']);




// Auth 

Route::get('/register', [RegisteredUserController::class, 'create']);
Route::post('/register', [RegisteredUserController::class, 'store']);

Route::get('/login', [SessionController::class, 'create'])->name('login');
Route::post('/logout', [SessionController::class, 'destroy']);
Route::post('/login', [SessionController::class, 'store']);



// Route::resource('jobs', JobsController::class);
// Route::controller(JobsController::class)->group(function () {

//     Route::get('/jobs',  'index')->name('jobs');
//     Route::post('/jobs',  'store');
//     Route::get('/jobs/{job}',  'show');
//     Route::patch('/jobs/{id}',  'update');
//     Route::delete('/jobs/{job}',  'destroy');
//     Route::get('/jobs/{job}/edit',  'edit');
//     Route::get('/jobs/create',  'create');

// });
