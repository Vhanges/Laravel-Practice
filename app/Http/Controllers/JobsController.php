<?php

namespace App\Http\Controllers;

use App\Models\Jobs;
use Illuminate\Http\Request;

class JobsController extends Controller
{
    public function index() 
    {

        $jobs = Jobs::with('employer')->latest()->simplePaginate(3);

        return view('jobs/index', [
                'jobs' => $jobs
        ]);

    }

    public function create()
    {
        return view('jobs/create');
    }

    public function show(Jobs $job) 
    {   
        return view("jobs.show", ['job' => $job]);
    }
    public function store() 
    {
        
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

    }
    public function edit(Jobs $job) 
    {

        return view('jobs/edit', ['job' => $job] );

    }
    public function update(Jobs $job) 
    {

        // Validate 

        request()->validate([
            'title' => ['min:3', 'required'],
            'salary' => ['required']
        ]);

        // Authorize (On hold pa sir)

        $job->update([
            'title' => request('title'),
            'salary' => request('salary'),
        ]);

        // Redirect

        return redirect('/jobs/'. $job->id);

    }
    public function destroy(Jobs $job) 
    {
            
        $job->delete();

        return redirect('/jobs');

    }
}
