<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormAggregator;
use App\Http\Controllers\FormParameterAggregator;
use Illuminate\Support\Arr;

Route::get('/', function(){
    return view('home');
})->name('home');

Route::get('/jobs', function(){
    return view('jobs', [
        'jobs' => [
            [
                'id' => 1,
                'title' => 'Director',
                'salary' => 'PHP 100,000', 
            ],
            [
                'id' => 2,
                'title' => 'Programmer',
                'salary' => 'PHP 80,000', 
            ],
            [
                'id' => 3,
                'title' => 'Teacher',
                'salary' => 'PHP 50,000', 
            ],
        ],
    ]);
})->name('jobs');

Route::get('/about', function(){
    return view('about');
})->name('about');

Route::get('/jobs/{id}', function($id){

    $jobs = [
        [
            'id' => 1,
            'title' => 'Director',
            'salary' => 'PHP 100,000', 
        ],
        [
            'id' => 2,
            'title' => 'Programmer',
            'salary' => 'PHP 80,000', 
        ],
        [
            'id' => 3,
            'title' => 'Teacher',
            'salary' => 'PHP 50,000', 
        ],
    ];

    $job = Arr::first($jobs, fn($job) => $job['id'] == $id);

    return view('job', ['job' => $job] );
});

Route::get('/contact', function(){
    return view('contact');
})->name('contact');