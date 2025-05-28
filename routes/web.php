<?php

use Illuminate\Support\Facades\Route;
use App\Models\Jobs;

Route::get('/', function(){

    return view('home');
    
})->name('home');

//Index
Route::get('/jobs', function(){

    $jobs = Jobs::with('employer')->latest()->simplePaginate(3);

    return view('jobs/index', [
            'jobs' => $jobs
    ]);

})->name('jobs');

// Store
Route::post('/jobs', function(){

    request()->validate([
        'title' => ['required', 'min:3'],
        'salary' => ['required']
    ]);

    Jobs::create([
        'title' => request('title'),
        'salary' => request('salary'),
        'employer_id' => '1',
    ]);

    return redirect('/jobs');

})->name('jobs');

// Show
Route::get('/jobs/{id}', function($id){

    $job = Jobs::find($id);

    return view('jobs/show', ['job' => $job] );
});

// Update
Route::patch('/jobs/{id}', function($id){

    // Validate 

    request()->validate([
        'title' => ['min:3', 'required'],
        'salary' => ['required']
    ]);

    // Authorize (On hold pa sir)

    $job = Jobs::findOrFail($id);

    $job->update([
        'title' => request('title'),
        'salary' => request('salary'),
    ]);

    // Redirect

    return redirect('/jobs/'. $job->id);
});

// Destroy
Route::delete('/jobs/{id}', function($id){

    $job = Jobs::findOrFail($id);
    $job->delete();

    return redirect('/jobs');
});

// Show
Route::get('/jobs/{id}/edit', function($id){

    $job = Jobs::find($id);

    return view('jobs/edit', ['job' => $job] );
});



// Create
Route::get('/jobs/create', function () {
    return view('jobs/create');
});



Route::get('/about', function(){

    return view('about');

})->name('about');


Route::get('/contact', function(){
    return view('contact');
})->name('contact');