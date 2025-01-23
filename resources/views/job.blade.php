<x-layout>
    <x-slot:heading>
        JOB
    </x-slot:heading>
    <h1>JOB PAGE ですよう.</h1>

    <h2 class="font-bold text-lg">{{ $job['title'] }}</h2>
    <p>
        This job pays {{ $job['salary']}} per year.
    </p>
</x-layout>
