<x-layout>

  @auth
      <form action="{{ route('logout') }}" method="POST">
        @csrf
        <button type="submit">Logout</button>
      </form>

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