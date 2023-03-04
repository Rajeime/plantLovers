<x-layout>
    <a href="{{ route('plant.index') }}">back</a>
    <form action="{{ route('plant.store') }}" method="POST">
        @csrf
        <input type="text" name="common_name" id="" placeholder="common_name">
        <input type="text" name="genus" id="" placeholder="genus">
        <input type="text" name="species" id="" placeholder="species">
        <input type="text" name="user_id" placeholder="user_id">
        <input type="text" name="img" placeholder="img">
        <button type="submit">Post</button>
       </form>
</x-layout>