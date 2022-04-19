@extends('layouts.app')

@section('content')

<!-- create a form to create an event with name, description, price, image, date, time, capacity, featured -->
<form action="{{route('store')}}" method="post">
    @csrf
    <div class="italic bold font-bold form-group">
        <label for="name">Name</label>
        <input type="bg-neutral-300 text" class="bg-neutral-300 form-control" id="name" name="name">
    </div>
    <div class="italic bold font-bold form-group">
        <label for="description">Description</label>
        <input type="text" class="form-control" id="description" name="description">
    </div>
    <div class="italic bold font-bold form-group">
        <label for="image">Image</label>
        <input type="text" class="form-control" id="image" name="image">
    </div>
    <div class="form-group italic bold font-bold">
        <label for="price">Price</label>
        <input type="text" class="form-control" id="price" name="price">
    </div>
    <div class="form-group italic bold font-bold">
        <label for="date">Date</label>
        <input type="date" class="form-control" id="date" name="date">
    </div>
    <div class="form-group italic bold font-bold">
        <label for="time">Time</label>
        <input type="time" class="form-control" id="time" name="time">
    </div>
    <div class="form-group italic bold font-bold">
        <label for="capacity">Capacity</label>
        <input type="text" class="form-control" id="capacity" name="capacity">
    </div>
    <div class="form-group italic bold font-bold">
        <label for="featured">Featured</label>
        <input type="bg-neutral-300 text" class="form-control" id="featured" name="featured">
    </div>
    <button type="submit" class="bg-emerald-400 btn" onclick="return confirm ('Seguro que desea crear este evento?')">Confirmar</button>
    <!--  create button that redirects to home -->
    <a href="{{route('home')}}" class="bg-rose-600 btn ">Cancelar</a>
</form>


@endsection
