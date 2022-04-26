@extends('layouts.app')
@section('content')

<link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/styles/tailwind.css">

<section class="relative block h-500-px">
    <div class="absolute top-0 w-full h-full bg-center bg-cover md:h-full" style="background-image: url('https://images.unsplash.com/photo-1499336315816-097655dcfbda?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=2710&amp;q=80');">
        <span id="blackOverlay" class="w-full h-full absolute opacity-50 bg-black"></span>
    </div>
    <div class="top-auto bottom-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden h-100-px" style="transform: translateZ(0px)">
        <svg class="absolute bottom-0 overflow-hidden" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none" version="1.1" viewBox="0 0 2560 100" x="0" y="0">
            <polygon class="text-blueGray-200 fill-current" points="2560 0 2560 100 0 100"></polygon>
        </svg>
    </div>
</section>

{{-- <form action="{{route('store')}}" method="post">
    @csrf
    <div class="flex space-x-2 justify-center mr-12 pl-16 font-bold">
        <h1>Añadir un evento</h1>
    </div>
    <form class=" col-sm-4 p-4">
        <h3 class="flex space-x-2 justify-center font-bold pb-2">Imagen</h3>
        <section class="flex space-x-2 justify-center pb-2">
            <div class="marco2">
                <input type="text" name="image" id="image">
            </div>
        </section>
        <h3 class="flex space-x-2 justify-center font-bold pb-2">Titulo</h3>
        <section class="flex space-x-2 justify-center pb-2">
            <div class="marco2">
                <input type="text" name="name" aria-describedby="titulo" id="name" required>
            </div>
        </section>
        <h3 class="flex space-x-2 justify-center font-bold pb-2">Descripción</h3>
        <section class="flex space-x-2 justify-center pb-6">
            <div class="marco2">
                <textarea rows="4" cols="20" name="description" id="description" required></textarea>
            </div>
        </section>
        <h3 class="flex space-x-2 justify-center font-bold pb-2">Fecha y hora</h3>
        <section class="flex space-x-2 justify-center">
            <div>
                <label for="start"></label>
                <input type="date" name="date" id="date" min="0000-00-00" max="2022-12-31">
            </div>
            <div>
                <input type="time" name="time" id="time">
            </div>
        </section>
        <section id="container" class="flex space-x-2 justify-center py-6">
            <div class="contenido pt-2 font-bold">
                <input type="checkbox" name="featured" id="featured">
                <label for="featured">Destacado</label>
            </div>
            <div class="contenido marco2">
                <input type="number" name="capacity" id="capacity" placeholder="Maximo participantes" min="1" max="10" />
            </div>
        </section>
        <div class="mb-5 flex space-x-2 justify-center space-evenly">
            <button type="submit" class="inline-block px-6 py-2.5 bg-green-500 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-green-600 hover:shadow-lg focus:bg-green-600 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-green-700 active:shadow-lg transition duration-150 ease-in-out" onclick="return confirm ('Seguro que desea crear este evento?')">Confirmar</button>
            <!--  create button that redirects to home -->
            <a href="{{route('home')}}" class="btn inline-block px-6 py-2.5 bg-red-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-red-700 hover:shadow-lg focus:bg-red-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-red-800 active:shadow-lg transition duration-150 ease-in-out">Cancelar</a>
        </div>
    </form>
     --}}


     <section class="relative py-16 bg-blueGray-200">
            <div class="container mx-auto px-4">
                <div class="relative  min-w-0 break-words bg-white w-full mb-6 shadow-xl rounded-lg -mt-96">
                    <h3 class="text-4xl font-semibold leading-normal text-blueGray-700 mb-2 text-center">
                        Crear Evento
                    </h3>

                    <form class="px-7 flex flex-col items-center" method="post" action="{{route('store')}}">
                    @csrf
                    <section class="w-full flex flex-column justify-items-center">
                    <div class=" md:flex mt-5 items-center  justify-between w-11/12 ">
                            <label class="w-40 block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-full-name">
                                Imágen (URL)
                            </label>
                            <input class="w-1/2 bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="inline-full-name" 
                            type="url"  name="image">
                        </div>
                        <div class="  mt-3 md:flex items-center  justify-between w-11/12 ">
                            <label class="w-40 block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-full-name">
                                Título
                            </label>
                            <input class="w-1/2 bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="inline-full-name" type="text"  name="name">
                        </div>
                    
                        <div class="md:flex mt-3 mb-3 items-center justify-between w-11/12">
                            <label class="w-40 block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-full-name">
                                Descripción
                            </label>
                            <textarea class="w-1/2 bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500 h-36" id="about" name="description"></textarea>
                        </div>

                        {{-- fecha y hora  --}}
                        <div class="md:flex mt-1 mb-5 flex-row items-center justify-between w-11/12">
                            <label class="w-40 block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-full-name">
                                Fecha y hora
                            </label>
                            <div class="d-flex w-full justify-around flex-col md:flex-row">
                                <input class=" bg-gray-200 appearance-none mb-2 border-2 border-gray-200 rounded  py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" 
                                id="inline-full-name" 
                                type="date"  
                                name="date"
                                min="0000-00-00" 
                                max="2022-12-31">

                                <input class="bg-gray-200 appearance-none mb-2 border-2 border-gray-200 rounded  py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" 
                                id="inline-full-name" 
                                type="time"  
                                name="time"
                                id="time">
                            </div>
                        </div>

                        <div class="md:flex mt-1 mb-5 flex-row items-center justify-between w-11/12">
                            <label class="w-40 block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-full-name">
                                Capacidad
                            </label>
                            <div class="d-flex w-full justify-around flex-col md:flex-row">
                                <input class="bg-gray-200 appearance-none mb-2 border-2 border-gray-200 rounded  py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" 
                                id="inline-full-name" 
                                type="number"  
                                name="capacity"
                                id="capacity"
                                placeholder="Maximo participantes" 
                                min="1" 
                                max="3">

                                <span class="text-gray-700 py-2 px-4 lg:mr-8">
                                <input 
                                type="checkbox" 
                                class="form-checkbox h-5 w-5 text-blue-600" 
                                name="featured" 
                                id="featured">
                                Destacado</span>
                                </div>
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
    @endsection
