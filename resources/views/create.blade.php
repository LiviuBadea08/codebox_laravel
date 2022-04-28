@extends('layouts.app')

@section('content')

    <link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/styles/tailwind.css">

    <section class="relative block h-500-px">
        <div class="absolute top-0 w-full h-full bg-center bg-cover md:h-full" style="background-image: url('https://i.pinimg.com/564x/d1/4a/60/d14a6093b8f1ff9c5b4e945695045254.jpg');">
            <span id="blackOverlay" class="w-full h-full absolute opacity-50 bg-black"></span>
        </div>
        <div class="top-auto bottom-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden h-100-px" style="transform: translateZ(0px)">
            <svg class="absolute bottom-0 overflow-hidden" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none" version="1.1" viewBox="0 0 2560 100" x="0" y="0">
                <polygon class="text-blueGray-200 fill-current" points="2560 0 2560 100 0 100"></polygon>
            </svg>
        </div>
    </section>

    <section class="relative py-16 bg-blueGray-200">

        <div class="container mx-auto px-4">
            <div class="relative  min-w-0 break-words bg-white w-full mb-6 shadow-xl rounded-lg -mt-96">
                <h3 class="text-4xl font-semibold leading-normal text-blueGray-700 mb-2 text-center">
                    Crear Evento
                </h3>

                <form class="px-7 flex flex-col items-center" method="post" action="{{route('store')}}">
                    @csrf
                    <div class="w-full flex flex-column justify-items-center">
                        <div class=" md:flex mt-5 items-center  justify-between w-11/12 ">
                            <label class="w-40 block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-full-name">
                                Imágen (URL)
                            </label>
                            <input class="w-1/2 bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" 
                            id="inline-full-name" 
                            type="url"  
                            name="image">
                        </div>

                        <div class="  mt-3 md:flex items-center  justify-between w-11/12 ">
                            <label class="w-40 block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-full-name">
                                Título
                            </label>
                            <input class="w-1/2 bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" 
                            id="inline-full-name" 
                            type="text"  
                            name="name">
                        </div>
                
                        <div class="md:flex mt-3 mb-3 items-center justify-between w-11/12">
                            <label class="w-40 block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-full-name">
                                Descripción
                            </label>
                            <textarea class="w-1/2 bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500 h-36" 
                            id="about" 
                            name="description"
                            ></textarea>
                        </div>

                        {{-- fecha y hora  --}}
                        <div class="md:flex mt-1 mb-5 flex-row items-center justify-between w-11/12">
                            <label class="w-40 block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-full-name">
                                Fecha y hora
                            </label>
                            <input class="w-1/2 bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" 
                            id="inline-full-name" 
                            type="datetime-local"  
                            name="dateTime">
                        </div>

                        <div class="md:flex mt-1 mb-5 flex-row items-center justify-between w-11/12">
                            <label class="w-40 block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-full-name">
                                Capacidad
                            </label>

                            <div class="d-flex w-full justify-around flex-col md:flex-row">
                                <input class="bg-gray-200 appearance-none mb-2 border-2 border-gray-200 rounded py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" 
                                id="inline-full-name" 
                                type="number"  
                                name="capacity"
                                id="capacity"
                                placeholder="Maximo participantes" 
                                min="1" 
                                max="3">

                                <div class="flex items-center">
                                    <input 
                                    type="checkbox" 
                                    class="bg-gray-200 form-check-input appearance-none h-5 w-5 border border-gray-300 rounded-sm checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 my-1 align-top bg-no-repeat bg-center bg-contain float-left cursor-pointer" 
                                    name="featured" 
                                    id="featured">
                                    <span class="font-bold text-gray-500 py-2 px-2 lg:mr-8">Destacado</span>
                                </div>

                            </div>
                        </div>

                    </div>

                    <div class="flex justify-evenly w-96 ">
                        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline mb-5" onclick="return confirm('Está seguro que desea realizar estos cambios ?')">
                            Actualizar
                        </button> 
                        <a href="{{route('home')}}" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline mb-5">
                            Cancelar
                        </a>
                    </div>
                </form>
                
            </div>
        </div>
        
    </section>

@endsection
