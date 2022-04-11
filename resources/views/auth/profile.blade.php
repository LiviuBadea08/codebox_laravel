@extends('layouts.app')

@section ('content')

<div class="container mt-5">
    <div class="flex flex-column items-center">
        <h3>{{ $user->id }}</h3>
        <h3>{{ $user->name }}</h3>
        <h3>{{ $user->email }}</h3>
    </div>
</div>


@endsection
