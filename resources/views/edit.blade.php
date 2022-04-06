@extends('layouts.app')
@section('content')
<!-- create a form for updating the products -->
    <form method="post" action="{{route('update', $event->id)}}">
        @method('patch')
        @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" name="name" value="{{$event->name}}">
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <input type="text" class="form-control" id="description" name="description" value="{{$event->description}}">
        </div>
        <div class="form-group">
            <label for="image">Image</label>
            <input type="text" class="form-control" id="image" name="image" value="{{$event->image}}">
        </div>
        <button type="submit" class="btn btn-primary" onclick="return confirm ('Seguro que desea modificar este evento {{$event->name }}?')">Confirmar</button>
        <button class="cancel">Cancelar</button>
    </form>
@endsection