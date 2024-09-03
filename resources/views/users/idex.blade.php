@extends('layouts.app')

@section('title', 'User List')

@section('content')
<h1>
    User List
    (<a href="{{ route('user.creadte') }}">+</a>)
</h1>

<ul>
@foreach ($users as $user)
    <li>
        {{ $user->name }} -
        {{ $user->email}} 
        | <a href="{{ route('user.show', [$user->id]) }}">Detals</a>
    </li>
@endforeach
</ul>    
@endsection 