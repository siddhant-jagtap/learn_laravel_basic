<x-layout>
    <x-slot:heading>
        Jobs
    </x-slot:heading>
    <h2 class="text-lg font-bold">{{ $job['title'] }}</h2>
    <p>
        this job pays {{$job['salary']}} per year
    </p>
</x-layout>


