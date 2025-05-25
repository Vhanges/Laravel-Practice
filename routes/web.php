<?php

use Illuminate\Support\Facades\Route;
use App\Models\Jobs;

Route::get('/', function(){

    return view('home');
    
})->name('home');


Route::get('/jobs', function(){

    $jobs = Jobs::with('employer')->get();

    return view('jobs', [
            'jobs' => $jobs
    ]);

})->name('jobs');


Route::get('/about', function(){

    return view('about');

})->name('about');


Route::get('/jobs/{id}', function($id){

    $job = Jobs::find($id);

    return view('job', ['job' => $job] );
});


Route::get('/contact', function(){
    return view('contact');
})->name('contact');