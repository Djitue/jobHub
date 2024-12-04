<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jobposting;

class HomeController extends Controller
{
    public function index() {
        $jobs = JobPosting::latest()->take(6)->get(); // Fetch the latest 6 jobs
        return view('welcome', compact('jobs'));
    }

}
