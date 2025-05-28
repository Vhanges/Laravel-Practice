<?php

use Illuminate\Support\Facades\Route;
use App\Models\Jobs;

Route::get('/', function(){

    return view('home');
    
})->name('home');


Route::get('/jobs', function(){

    $jobs = Jobs::with('employer')->latest()->simplePaginate(3);

    return view('jobs/index', [
            'jobs' => $jobs
    ]);

})->name('jobs');

Route::post('/jobs', function(){


    Jobs::create([
        'title' => request('title'),
        'salary' => request('salary'),
        'employer_id' => '1',
    ]);

    return redirect('/jobs');

})->name('jobs');


Route::get('/about', function(){

    return view('about');

})->name('about');


Route::get('/jobs/create', function () {
    return view('jobs/create');
});

Route::get('/jobs/{id}', function($id){

    $job = Jobs::find($id);

    return view('jobs/show', ['job' => $job] );
});


Route::get('/contact', function(){
    return view('contact');
})->name('contact');