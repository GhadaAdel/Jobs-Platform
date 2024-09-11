<x-layout>
    <x-slot:heading>
        Jobs Page
    </x-slot:heading>

    @foreach($jobs as $job)
    <a href="/jobs/{{ $job['id']}}">
        <li>{{ $job['title'] }}</li>
    </a>
    @endforeach
</x-layout>
