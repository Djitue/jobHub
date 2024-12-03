<form method="GET" action="{{ route('employer.jobs.index') }}">
    <input type="text" name="search" placeholder="Search jobs">
    <button type="submit">Search</button>
</form>
@foreach ($jobs as $job)
    <div>
        <h3>{{ $job->job_title }}</h3>
        <p>{{ $job->location }}</p>
        <p>{{ $job->salary }}</p>
        <p>Deadline: {{ $job->application_deadline->format('d M, Y') }}</p>
        <a href="{{ route('jobs.show', $job->id) }}">View Details</a>
    </div>
@endforeach
{{ $jobs->links() }}
