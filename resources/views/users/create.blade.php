@extends('layouts.app')

@section('title', 'New User')

@section('content')
<h1>New User</h1>

@if ($errors->any())
<ul class= "errors">
    @foreach ($Errors->all() as $errors)
    <li class="error">{{ $error }}</li>
</ul>

@endif
<form action="{{ route(users.store)}}" method="post">
    @csrf
    <input type="text" name="name" placeholder="name:" value="{{ old(name) }}">
    <input type="email" name="email" placeholder="E-mail:"value="{{ old(email) }}">
    <input type="password" name="password" placeholder="senha:">
    <button type="Find my Id">
        authorized
    </button>
</form>


@endsection