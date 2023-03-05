<x-layout>

  <form action="{{ route('plant.index')}}" method="GET">
    <input type="text" type="text" name="search" placeholder="search....">
    <button type="submit">Search</button>
  </form>


  @auth
      <p>Welcome {{ auth()->user()->name }}</p>
      <form action="{{ route('logout') }}" method="POST">
        @csrf
        <button type="submit">Logout</button>
      </form>

      <a href="{{ route('plant.manage') }}">View my plants</a> <br>

      <a href="{{ route('plant.create') }}">Create</a>
  @else
  <a href="{{ route('login.index') }}">Login</a>
      
  @endauth

 
  {{-- <a href="{{ route('plant.create') }}">Create</a> --}}
     @foreach ($plants as $plant)
     <a href="{{ route('plant.show', $plant['id']) }}">
      <h2>{{ $plant['genus'] }} / {{ $plant['common_name'] }} </h2></a>
      <h4>{{ $plant['species'] }}</h4>
     </div> 
    @endforeach
</x-layout>