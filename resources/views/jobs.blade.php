<x-layout>
    <x-slot:heading>
        Jobs Listings
    </x-slot:heading>

        @foreach($jobs as $job)
            <li>
                <a href="/jobs/{{ $job["id"] }}">
                    <strong>{{ $job["title"] }}</strong> Pays {{ $job["salary"] }} per Year.
                </a>
            </li>
        @endforeach

</x-layout>


