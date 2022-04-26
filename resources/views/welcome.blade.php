@extends('layouts.welcome')
@section('content')

<div class="backerino" style="background-image: url('{{asset('images/back.jpg')}}');">

<div class="animation">
        <h1 class="heading-primary">
            <span class="logo"><img src="{{asset("images/logo.png")}}"></span>
            <span class="phrase">Cursos al alcance de todos</span>
        </h1>
</div>
</div>

<script>
     setTimeout(function(){
    window.location=' {{ route('home') }}';
    }, 5000);
</script>

@endsection