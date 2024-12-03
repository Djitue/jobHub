@foreach ($jobs as $job)
    <div>
        <h3>{{ $job->job_title }}</h3>
        <p>{{ $job->location }}</p>
        <p>{{ $job->salary }}</p>
        <p>{{ $job->job_requirement }}</p>
        <p>Deadline: {{ $job->deadline->format('d M, Y') }}</p>
        <a href="{{ route('employer.jobs.edit', $job->id) }}">Edit</a>
        <form action="{{ route('employer.jobs.destroy', $job->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit">Delete</button>
        </form>
        <a href="{{ route('employer.jobs.applications', $job->id) }}">View Applications</a>
    </div>
@endforeach
{{ $jobs->links() }}
