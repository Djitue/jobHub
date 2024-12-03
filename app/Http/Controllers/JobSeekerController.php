<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JobSeekerController extends Controller
{
    public function listJobs(Request $request)
{
    $jobs = JobPosting::query()
        ->when($request->input('search'), function ($query, $search) {
            return $query->where('job_title', 'like', "%{$search}%")
                         ->orWhere('location', 'like', "%{$search}%");
        })
        ->paginate(10);

    return view('employer.jobs.index', compact('jobs'));
}

}
