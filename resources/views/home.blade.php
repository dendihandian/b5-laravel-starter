@extends('layouts.auth')

@section('title', 'Home')

@section('content')
    This is home

    <form action="{{ route('logout') }}" method="POST">
        @csrf
        <button type="submit">Logout</button>
    </form>
@endsection