@extends('layouts.auth')

@section('title', 'Login')

@section('content')
    <div class="container vh-100 d-flex justify-content-center align-items-center">
        <div class="card w-50 h-50">
            <div class="card-body p-4">
                {{-- <form action="{{ route('login') }}" method="POST">
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
                </form> --}}

                <form action="{{ route('login') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label" for="email">{{ __('Email address') }}</label>
                        <input class="form-control" type="email" name="email" id="email" aria-describedby="email_help">
                        @error('email')
                        <div id="email_help" class="form-text">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="password">{{ __('Password') }}</label>
                        <input class="form-control" type="password" id="password">
                        @error('email')
                        <div id="email_help" class="form-text">{{ $message }}</div>
                        @enderror
                    </div>
                    <button class="btn btn-primary text-center" type="submit">{{ __('Login') }}</button>
                </form>
            </div>
        </div>
    </div>
@endsection