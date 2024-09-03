@extends('layouts.app')

@section('title', 'User List')

@section('content')

<h1>User List {{ $user->name }}</h1>

<ul>
    <li>{{ $user->name }}</li>
    <li>{{ $user->email }}</li>
</ul>
@endsection