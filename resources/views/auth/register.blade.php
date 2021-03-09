@extends('layouts.auth')

@section('title', 'Register')

@section('content')
    <form action="{{ route('register') }}" method="POST">
        @csrf

        <div class="form-group">
            <input type="text" name="name" id="name" placeholder="Name">
            @error('name')
            <span>{{ $message }}</span>
            @enderror
        </div>

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

        <div class="form-group">
            <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Password Confirmation">
            @error('password_confirmation')
            <span>{{ $message }}</span>
            @enderror
        </div>


        <button type="submit">{{ __('Register') }}</button>
    </form>
@endsection