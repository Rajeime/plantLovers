<x-layout>

    <a href="{{ route('plant.index') }}">Back</a>

    <h3>{{ $plant['genus'] }}</h3>
    <h4>{{ $plant['species'] }}</h4>

    <form action="{{ route('plant.destroy', $plant['id']) }}" method="post">
        @csrf
        @method('delete')
        <button type="subimt">Delete</button>
    </form>
    <a href="{{ route('plant.edit', $plant['id']) }}">Edit</a>
</x-layout>