@extends('layouts.app')
@section('content')
<!-- create a form for updating the products -->
    <form method="post" action="{{route('update', $event->id)}}">
        @method('patch')
        @csrf
        <div class="flex space-x-2 pl-16 pb-5 pt-5">
        <h1>Añadir un evento</h1>
        </div>
        {{-- <form class=" col-sm-4 p-4"> --}}
            {{-- <h3 class="flex space-x-2 justify-center">Imagen</h3>
            <section class="flex space-x-2 justify-center pb-2">
                        <div class="marco1">
                            <label for="image_uploads">
                                <img src="{{ $event->image }}" style="cursor:pointer">
                            </label>
                            <input type="file" id="image_uploads" name="image" accept=".jpg, .jpeg, .png" multiple style="display:none">
                        </div>
            </section> --}}
                <h3 class="flex space-x-2 justify-center">Titulo</h3>
            <section class="flex space-x-2 justify-center pb-2">
                        <div class="marco2">
                            <input type="text" id="name" aria-describedby="titulo" required value="{{$event->name}}">
                        </div>
            </section>
                <h3 class="flex space-x-2 justify-center">Descripción</h3>
            <section class="flex space-x-2 justify-center pb-6">
                        <div class="marco2">
                            <input type="text" name="description" class="descripcion" id="titulo" aria-describedby="titulo" required value="{{$event->description}}">
                        </div>
            </section>
                <h3 class="flex space-x-2 justify-center">Fecha y hora</h3>
            <section class="flex space-x-2 justify-center">
                    <div>
                        <label for="start"></label>
                        <input type="date" id="start" name="date"  min="2022-04-06" max="2022-12-31" value={{ $event->date }}>
                    </div>
                    <div>
                        <input type="time" name="time" id="time" value="{{ $event->time }}">
                    </div>
            </section>
            <section id="container" class="flex space-x-2 justify-center py-6">
                <div class="contenido pt-2">
                    <label><input type="checkbox" id="destacados" name="featured" value="{{ $event->featured }}">Destacado</label>
                </div>
                <div class="contenido marco2">
                    <input type="number" placeholder="Maximo participantes" name="capacity" max="99" value="{{ $event->capacity }}"/>
                </div>
            </section>
            <div class="flex space-x-2 justify-center space-evenly">
                <button type="submit" class="inline-block px-6 py-2.5 bg-green-500 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-green-600 hover:shadow-lg focus:bg-green-600 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-green-700 active:shadow-lg transition duration-150 ease-in-out" onclick="return confirm ('Seguro que desea modificar este evento {{$event->name }}?')">Confirmar</button>
                <a class="btn inline-block px-6 py-2.5 bg-red-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-red-700 hover:shadow-lg focus:bg-red-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-red-800 active:shadow-lg transition duration-150 ease-in-out" href="{{route('home')}}">cancelar</a>
            </div>
    </form>


@endsection