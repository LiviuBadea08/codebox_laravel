@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/styles/tailwind.css">

    <main class="profile-page">

        <section class="relative block h-500-px">
            <div class="absolute top-0 w-full h-full bg-center bg-cover md:h-full" style="background-image: url('https://images.unsplash.com/photo-1499336315816-097655dcfbda?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=2710&amp;q=80');">
                <span id="blackOverlay" class="w-full h-full absolute opacity-50 bg-black"></span>
            </div>
            <div class="top-auto bottom-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden h-70-px" style="transform: translateZ(0px)">
                <svg class="absolute bottom-0 overflow-hidden" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none" version="1.1" viewBox="0 0 2560 100" x="0" y="0">
                    <polygon class="text-blueGray-200 fill-current" points="2560 0 2560 100 0 100"></polygon>
                </svg>
            </div>
        </section>

        <section class="relative py-16 bg-blueGray-200">
            <div class="container mx-auto px-4">
                <div class="relative  min-w-0 break-words bg-white w-full mb-6 shadow-xl rounded-lg -mt-96">
                    <h3 class="text-4xl font-semibold leading-normal mb-2 text-blueGray-700 mb-2 text-center">
                        Actualizar Información
                    </h3>
                    <form method="post" action="{{route('update', $event->id)}}">
                    @method('patch')
                    @csrf
                        <section class="w-full flex flex-column justify-items-center">
                            <div class=" md:flex mt-5 items-center  justify-between w-11/12 ">
                                <label class="w-40 block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-full-name">
                                    Imagen
                                </label>
                                <input class="w-1/2 bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="inline-full-name" type="text" value="{{ $event->image }}" name="image">
                            </div>
                            <div class="md:flex mt-3 items-center justify-between w-11/12">
                                <label class="w-40 block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-full-name">
                                    Nombre
                                </label>
                                <input class="w-1/2 bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="address" type="text" value="{{ $event->name }}" name="name">
                            </div>
                            <div class="md:flex mt-3 items-center justify-between w-11/12">
                                <label class="w-40 block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-full-name">
                                    Descripción
                                </label>
                                <input class="w-1/2 bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500 h-36" id="description" value="{{ $event->description }}" name="description">
                            </div>
                            <div class="flex justify-center mt-3 space-x-48">
                                <input class="ml-5 w-96 bg-gray-200 appearance-none border-2 border-gray-200 rounded py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" type="date" id="date" name="date" value="{{ $event->date }}" name="date">
                                <input class="w-96 bg-gray-200 appearance-none border-2 border-gray-200 rounded py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" type="time" id="time" name="time" value="{{ $event->time }}" name="time">
                            </div>
                            <div class="md:flex mt-3 items-center justify-between w-11/12">
                                <label class="w-40 block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-full-name">
                                    Dirección 
                                </label>
                                <input class="w-1/2 bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="address" type="text" value="{{ $event->name }}" name="address">
                            </div>
                        </section>
                        <section class="flex justify-evenly w-96 ">
                        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline mb-5" onclick="return confirm('Está seguro que desea realizar estos cambios ?')">
                            Actualizar
                        </button> 
                        <a href="{{route('home')}}" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline mb-5">Cancelar</a>
                        </section>
                    </form>
                </div>
            </div>
        </section>
        
    </main>
<!-- <main>
    <form method="post" action="{{route('update', $event->id)}}">
        @method('patch')
        @csrf
        <div class="flex space-x-2 justify-center mr-12 pl-16 font-bold">
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
                <input type="date" id="date" name="date" value="{{$event->date}}" min="2022-01-01" max="2030-12-31" />
            </div>
            <div>
                <input value="{{$event->time}}" type="time" name="time" id="time" />
            </div>
        </section>
        <section id="container" class="flex space-x-2 justify-center py-6">
            <div class="contenido pt-2 font-bold">
                <label for="featured">
                    <input {{$checked}}  name="featured" type="checkbox" id="featured" >
                    Destacado
                </label>
            </div>
        </section>
        <h3 class="flex space-x-2 justify-center font-bold pb-2">
            Capacidad
        </h3>
        <section class="flex space-x-2 justify-center mb-5">
            <div class="contenido marco2">
                <input name="capacity" value="{{$event->capacity}}" type="number" placeholder="Maximo participantes"/>
            </div>
        </section>
        <div class="flex space-x-2 justify-center space-evenly mb-5">
            <button type="submit" class="inline-block px-6 py-2.5 bg-green-500 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-green-600 hover:shadow-lg focus:bg-green-600 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-green-700 active:shadow-lg transition duration-150 ease-in-out">
                Confirmar
            </button>
            <a class="btn inline-block px-6 py-2.5 bg-red-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-red-700 hover:shadow-lg focus:bg-red-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-red-800 active:shadow-lg transition duration-150 ease-in-out" href="{{route('home')}}">
                Cancelar
            </a>
        </div>
    </form>
</main> -->
@endsection
