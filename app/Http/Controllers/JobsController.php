<?php

namespace App\Http\Controllers;

use App\Models\Employer;
use App\Models\Jobs;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class JobsController extends Controller
{
    public function index() 
    {

        $jobs = Jobs::with('employer')->latest()->simplePaginate(3);
        

        return view('/jobs/index', data: [
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
        
        $employer = Employer::where('user_id', Auth::id())->first();


        request()->validate([
            'title' => ['required', 'min:3'],
            'salary' => ['required']
        ]);

        Jobs::create([
            'title' => request('title'),
            'salary' => request('salary'),
            'employer_id' => $employer->id,
        ]);

        return redirect('/jobs');

    }
    public function edit(Jobs $job) 
    {


        // Gate::authorize('edit-job', $job);

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
