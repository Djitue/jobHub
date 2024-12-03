<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                
                    {{-- {{ __("You're logged in!") }} --}}

                    {{-- <main class="jobseeker-dashboard">
                        <div class="container">
                            <!-- Dashboard Header -->
                            <header class="dashboard-header">
                                <h1>Welcome, {{ Auth::user()->name }}</h1>
                                <p>Your personalized job-seeking platform.</p>
                            </header>

                            <!-- Dashboard Features -->
                            <section class="dashboard-features">
                                <div class="row">
                                    <!-- Search Jobs -->
                                    <div class="col-md-4">
                                        <div class="feature-card">
                                            <h2>Search Jobs</h2>
                                            <p>Explore opportunities that match your skills and preferences.</p>
                                            <a href="{{ route('jobseeker.searchJobs') }}" class="btn btn-primary">Find Jobs</a>
                                        </div>
                                    </div>

                                    <!-- Application History -->
                                    <div class="col-md-4">
                                        <div class="feature-card">
                                            <h2>Application History</h2>
                                            <p>Track the status of jobs you've applied for.</p>
                                            <a href="{{ route('jobseeker.applicationHistory') }}" class="btn btn-secondary">View History</a>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </main> --}}
                    {{-- <main>
                        <div class="dashboard-container">
                            <!-- Sidebar -->
                            <div class="sidebar">
                                <ul>
                                    <li><a href="{{ route('employer.post-job') }}">Post Job</a></li>
                                    <li><a href="{{ route('employer.jobs.index') }}">View Jobs</a></li>
                                    <li><a href="#manage-hiring">Manage Hiring</a></li>
                                </ul>
                            </div>
                            </div>
                        </div>
                    </main> --}}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
