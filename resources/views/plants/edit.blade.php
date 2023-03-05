<x-layout>
    <a href="{{ route('plant.index') }}">back</a>
    <form action="{{ route('plant.update', $plant['id']) }}]" method="POST">
        @csrf
        @method('PUT')
        <input type="text" name="common_name" id="" placeholder="common_name" value="{{ $plant['common_name'] }}">
        <input type="text" name="genus" id="" placeholder="genus" value="{{ $plant['genus'] }}">
        <input type="text" name="species" id="" placeholder="species" value="{{ $plant['species'] }}">
        <input type="text" name="img" placeholder="img" value="{{ $plant['img'] }}">
        <button type="submit">Update</button>
       </form>
</x-layout>