<x-layout>
    <x-slot:heading>
        JOBS
    </x-slot:heading>
    <h1>JOB PAGE ですよう.</h1>

    @foreach ($jobs as $job)
        <li>
            <a href="/jobs/{{ $job['id'] }}">
                <strong>{{ $job['title'] }}:</strong> Pays {{ $job['salary']}} per year.
            </a>
        </li>
    @endforeach
</x-layout>
