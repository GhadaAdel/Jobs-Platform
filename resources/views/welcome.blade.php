<x-layout>
    <x-slot:heading>
        Home Page
    </x-slot:heading>
    <h1>Welcome!</h1>

    @foreach($jobs as $job)
    <li>{{ $job['salary']}}</li>
    @endforeach

</x-layout>