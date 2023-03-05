<x-layout>
    <h1>Login</h1>
    <a href="{{ route('plant.index') }}">back</a>
    <form action="{{ route('login.post') }}" method="POST">
        @csrf
        <input type="text" name="email" placeholder="email"  value="{{ old('email') }}">
        <input type="password" name="password" id="" placeholder="password">

        <button type="submit">Login</button>
        @error('error')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </form>
    <p>Dont have an account? <a href="{{ route('register.index') }}">Register</a></p> 
</x-layout>