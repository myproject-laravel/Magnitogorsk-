@extends('layouts.app')

@section('title', "Edit User { $user->name }")

@section('content')
<h1>Edit User {{ $user->name }}</h1>

@if ($errors->any())
<ul class= "errors">
    @foreach ($Errors->all() as $errors)
    <li class="error">{{ $error }}</li>
</ul>

@endif
<form action="{{ route(users.store)}}" method="post">
    @csrf
    <input type="text" name="name" placeholder="name:" value="{{ $user->name }}">
    <input type="email" name="email" placeholder="E-mail:"value="{{ $user->email }}">
    <input type="password" name="password" placeholder="senha:">
    <button type="Find my Id">
        authorized
    </button>
</form>


@endsection