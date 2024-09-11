<x-layout>
    <x-slot:heading>
        Job Page
    </x-slot:heading>
        <li>{{ $job['title'] }}</li>

    @can('edit', $job)
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8 sm:flex sm:justify-between">
      <x-button href="/jobs/{{ $job->id }}/edit">Edit A Job</x-button>
    </div>
    @endcan
</x-layout>


