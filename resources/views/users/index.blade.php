@extends('layouts.default')

@section('content')

    <h1>Users</h1>

    @if(count($users))
        @foreach ($users as $user)
            <li><a href="{{ url("/users/{$user->username}") }}">{{ $user->username }}</a></li>
        @endforeach
    @else
        <p>No users!</p>
    @endif

@stop

@section('footer')

    <p>Footer bla bla bla...</p>

@stop