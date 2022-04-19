@extends('layouts.app')
@section('content')

    <main>

        <form method="post" action="{{route('update', $event->id)}}">
            @method('patch')
            @csrf
            <h3 class="flex space-x-2 justify-center">
                Imagen
            </h3>
            <section class="flex space-x-2 justify-center pb-2">
                <div class="marco1">
                    <label for="image">
                        <img src="./media/plus.png" style="cursor:pointer">
                    </label>
                    <input type="file" id="image" name="image" value="{{$event->image}}" accept=".jpg, .jpeg, .png" multiple style="display:none">
                </div>
                <div class="marco2">
                    <img src="{{$event->image}}" alt="">
                </div>
            </section>
            <h3 class="flex space-x-2 justify-center">
                Titulo
            </h3>
            <section class="flex space-x-2 justify-center pb-2">
                <div class="marco2">
                    <input type="text" class="form-control" id="name" name="name" value="{{$event->name}}">
                </div>
            </section>
            <h3 class="flex space-x-2 justify-center">
                Descripción
            </h3>
            <section class="flex space-x-2 justify-center pb-6">
                <div class="marco2">
                    <textarea type="text" class="form-control" name="description" id="description">
                        {{$event->description}}
                    </textarea>
                </div>
            </section>
            <h3 class="flex space-x-2 justify-center">
                Fecha y hora
            </h3>
            <section class="flex space-x-2 justify-center">
                <div>
                    <label for="date"></label>
                    <input type="date" id="date" name="date" value="{{$event->date}}" min="2022-04-06" max="2022-12-31">
                </div>
                <div>
                    <input value="{{$event->time}}" type="time" name="time" id="time">
                </div>
            </section>
            <section id="container" class="flex space-x-2 justify-center py-6">
                <div class="contenido pt-2">
                    <label><input {{($event->featured) ? "checked" : ""}} type="checkbox" id="featured" >Destacado</label>
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