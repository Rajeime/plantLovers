<x-layout>
    <h1>Register</h1>
    <a href="{{ route('plant.index') }}">back</a>
    <form action="{{ route('register.post') }}" method="POST">
        @csrf 
        @method('POST')
        <input type="text" name="name" id="" placeholder="name" value="{{ old('name') }}">
        @error('name')
            {{ $message }}
        @enderror

        <input type="text" name="email" id="" placeholder="email" value="{{ old('email') }}">
        @error('email')
        {{ $message }}
        @enderror

        <input type="text" name="phone" id="" placeholder="phone" value="{{ old('phone') }}">
        @error('phone')
        {{ $message }}
        @enderror

        <input type="password" name="password" id="" placeholder="password" value="{{ old('password') }}">
        @error('password')
        {{ $message }}
        @enderror

        <input type="password" name="password_confirmation" id="" placeholder="confirm password" value="{{ old('password_confirmation') }}">
        @error('password_confirmation')
        {{ $message }}
        @enderror

        <button type="submit">Register</button>
    </form>
    <p>Already have an account <a href="{{ route('login.index') }}">Login</a></p>
</x-layout>