<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;

class JobController extends Controller
{
    // Method to show the form for adding a job
    public function create()
    {
        return view('add_job'); 
    }

    // Method to store a new job
    public function store(Request $request)
    {
    // Handle the image upload
    $imagePath = null;
    if ($request->hasFile('image')) {
        $imagePath = $request->image('image')->store('images', 'public'); // Store in 'storage/app/public/images'
    }

        $data = [
            'title' => request('title'),
            'company' => request('company'),
            'location' => request('location'),
            'salary' => request('salary'),
            'category' => request('category'),
            'job_type' => request('job_type'),
            'description' => request('description'),
            'image' => $imagePath, 
        ];
        
        // Insert data into the jobs table
        Job::create($data);

        return redirect()->route(route: 'jobs.index')->with('success', 'Job added successfully.');
    }


    // Method to display all jobs
    public function index()
    {
        $jobs = Job::all()->map(function ($job) {
            // Limit the description to 20 words
            $job->short_description = implode(' ', array_slice(explode(' ', $job->description), 0, 20)) . '...';
            return $job;
        });
        return view('jobs', compact('jobs')); 
    }

    // Method to show the form for editing a job
    public function edit(Job $job)
    {
        return view('edit_job', compact('job')); // Ensure this view exists
    }

    // Method to update a job
    public function update(Request $request, Job $job)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'company' => 'required|string|max:255',
            'salary' => 'required|numeric',
            'category' => 'required|string|max:255',
            'job_type' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'nullable|image|max:2048', // Adjust validation as needed
        ]);

        $job->update($request->all());

        return redirect()->route('jobs.index')->with('success', 'Job updated successfully.');
    }

    // Method to delete a job
    public function destroy(Job $job)
    {
        $job->delete();
        return redirect()->route('jobs.index')->with('success', 'Job deleted successfully.');
    }
}
