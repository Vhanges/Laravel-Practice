<x-layout>
    <x-slot:heading>
        Job Details
    </x-slot:heading>

    <h2 class="font-bold text-lg">{{$job->title}}</h2>
    <p>This job pays{{$job->salary}} per month</p>

    @can('edit', $job)
        <div class="mt-6">
            <x-button href="/jobs/{{ $job->id }}/edit">Edit Job</x-button>
        </div>
    @endcan
</x-layout>