<x-layout>
    <h1>Login</h1>
    <a href="{{ route('plant.index') }}">back</a>
    <form action="{{ route('login.post') }}" method="POST">
        @csrf
        <input type="text" name="email" placeholder="email"  value="{{ old('email') }}">

        @error('email')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror

        <input type="password" name="password" id="" placeholder="password">
        <button type="submit">Login</button>
    </form>
    <p>Dont have an account? <a href="{{ route('register.index') }}">Register</a></p> 
</x-layout>