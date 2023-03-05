<x-layout>

    <a href="{{ route('plant.index') }}">Back</a>

    <h3>{{ $plant['genus'] }}</h3>
    <h4>{{ $plant['species'] }}</h4>

    <h4>owner {{ $owner }}</h4>

</x-layout>