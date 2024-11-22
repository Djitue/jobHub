<?php

namespace App\Http\Controllers\Employer\dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PostJobController extends Controller
{
    public function create()
    {
        return view('employer.post-job'); // Points to the Blade view for the job posting form
    }

    public function store(Request $request)
    {
        // Validate the input fields
        $validated = $request->validate([
            'job_title' => 'required|string|max:255',
            'company_name' => 'required|string|max:255',
            'location' => 'required|string|max:255',
            'job_requirements' => 'required|string',
            'salary_range' => 'required|string',
            'job_type' => 'required|in:Full-time,Part-time,Contract',
            'application_deadline' => 'required|date|after:today',
        ]);

        // Create a new job
        Job::create($validated);

        // Redirect to a page (e.g., job listing or dashboard) with a success message
        return redirect()->route('employer.dashboard')->with('success', 'Job posted successfully!');
    }

    /**
     * Display a list of all jobs posted by the employer.
     */
    public function index()
    {
        $jobs = Job::where('employer_id', auth()->id())->get(); // Assuming jobs are tied to an employer
        return view('employer.jobs.index', compact('jobs')); // View to show all jobs
    }

    /**
     * Show the form for editing a specific job posting.
     */
    public function edit($id)
    {
        $job = Job::where('employer_id', auth()->id())->findOrFail($id); // Ensure the employer owns the job
        return view('employer.jobs.edit', compact('job')); // View to edit the job
    }

    /**
     * Update the specified job in the database.
     */
    public function update(Request $request, $id)
    {
        // Validate the input fields
        $validated = $request->validate([
            'job_title' => 'required|string|max:255',
            'company_name' => 'required|string|max:255',
            'location' => 'required|string|max:255',
            'job_requirements' => 'required|string',
            'salary_range' => 'required|string',
            'job_type' => 'required|in:Full-time,Part-time,Contract',
            'application_deadline' => 'required|date|after:today',
        ]);

        // Find and update the job
        $job = Job::where('employer_id', auth()->id())->findOrFail($id);
        $job->update($validated);

        // Redirect with a success message
        return redirect()->route('employer.jobs.index')->with('success', 'Job updated successfully!');
    }

    /**
     * Delete a specific job posting.
     */
    public function destroy($id)
    {
        $job = Job::where('employer_id', auth()->id())->findOrFail($id); // Ensure the employer owns the job
        $job->delete();

        // Redirect with a success message
        return redirect()->route('employer.jobs.index')->with('success', 'Job deleted successfully!');
    }

    /**
     * View applications for a specific job.
     */
    public function viewApplications($id)
    {
        $job = Job::where('employer_id', auth()->id())->findOrFail($id); // Ensure the employer owns the job
        $applications = $job->applications; // Assuming a relationship between Job and Application models

        return view('employer.jobs.applications', compact('job', 'applications'));
    }
}
