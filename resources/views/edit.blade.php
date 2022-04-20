@extends('layouts.app')
@section('content')
    <main>
        <form method="post" action="{{route('update', $event->id)}}">
            @method('patch')
            @csrf
            <div class="flex space-x-2 pl-16 font-bold">
                <h1>Editar un evento</h1>
            </div>
            <h3 class="flex space-x-2 justify-center pt-4 pb-2 font-bold">
                Imagen
            </h3>
            <section class="flex space-x-2 justify-center pb-4">
                <div class="marco2">
                    <input type="text" name="image" value="{{$event->image}}">
                </div>
            </section>
            <h3 class="flex space-x-2 justify-center font-bold pb-2">
                Titulo
            </h3>
            <section class="flex space-x-2 justify-center pb-4">
                <div class="marco2">
                    <input type="text" class="form-control" id="name" name="name" value="{{$event->name}}">
                </div>
            </section>
            <h3 class="flex space-x-2 justify-center font-bold pb-2">
                Descripción
            </h3>
            <section class="flex space-x-2 justify-center pb-6">
                <div class="marco2">
                    <textarea type="text" class="form-control" name="description" id="description">
                        {{$event->description}}
                    </textarea>
                </div>
            </section>
            <h3 class="flex space-x-2 justify-center font-bold pb-2">
                Fecha y hora
            </h3>
            <section class="flex space-x-2 justify-center">
                <div>
                    <label for="date"></label>
                    <input type="date" id="date" name="date" value="{{$event->date}}" min="2022-01-01" max="2022-12-31">
                </div>
                <div>
                    <input value="{{$event->time}}" type="time" name="time" id="time">
                </div>
            </section>
            <section id="container" class="flex space-x-2 justify-center py-6">
                <div class="contenido pt-2 font-bold">
                    <label><input {{($event->fetaured) ? "checked" : ""}} type="checkbox" id="featured">Destacado</label>
                </div>
                <div class="contenido marco2">
                    <input value="{{$event->capacity}}" type="number" placeholder="Maximo participantes" max="99" />
                </div>
            </section>
            <div class="flex space-x-2 justify-center space-evenly">
                <button type="submit" class="inline-block px-6 py-2.5 bg-green-500 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-green-600 hover:shadow-lg focus:bg-green-600 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-green-700 active:shadow-lg transition duration-150 ease-in-out" onclick="return confirm ('!!ATENCIÓN¡¡ Debe cambiar o volver a subir la misma imagen por razones de seguridad')">
                    Confirmar
                </button>
                <a class="btn inline-block px-6 py-2.5 bg-red-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-red-700 hover:shadow-lg focus:bg-red-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-red-800 active:shadow-lg transition duration-150 ease-in-out" href="{{route('home')}}">
                    Cancelar
                </a>
            </div>
    </form>
    </main>
@endsection