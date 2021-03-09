@extends('layouts.auth')

@section('title', 'Login')

@section('content')
    <form action="{{ route('login') }}" method="POST">
        @csrf

        <div class="form-group">
            <input type="email" name="email" id="email" placeholder="Email">
            @error('email')
            <span>{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group">
            <input type="password" name="password" id="password" placeholder="Password">
            @error('password')
            <span>{{ $message }}</span>
            @enderror
        </div>

        <button type="submit">{{ __('Register') }}</button>
    </form>
@endsection