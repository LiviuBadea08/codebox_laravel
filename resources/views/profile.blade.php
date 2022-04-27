@extends('layouts.app')

@section ('content')

<link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/styles/tailwind.css">

<main class="profile-page">
    <section class="relative block h-500-px">
        <div class="absolute top-0 w-full h-full bg-center bg-cover" style="background-image: url('https://images.unsplash.com/photo-1499336315816-097655dcfbda?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=2710&amp;q=80');">
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
            <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-6 shadow-xl rounded-lg -mt-64">
                <div class="px-6">
                    <div class="flex flex-wrap justify-center">
                        <div class="w-full lg:w-3/12 px-4 lg:order-2 flex justify-center md: flex justify-center">
                            <div class="relative">
                                <img alt="..." src="{{ $user->picture }}" class="shadow-xl rounded-full h-auto align-middle border-none absolute -m-16 -ml-20 lg: ml-20 max-w-150-px">
                            </div>
                        </div>
                        <div class="w-full lg:w-4/12 px-4 lg:order-3 lg:text-right lg:self-center">
                            <div class=" mt-32 md:mt-0 flex justify-center">
                                <a href="{{ route('profile.edit') }}" class="bg-pink-500 active:bg-pink-600 uppercase text-white font-bold hover:shadow-md shadow text-xs px-4 py-2 rounded outline-none focus:outline-none sm:ease-linear transition-all duration-150">
                                    Actualizar Perfil
                                </a>
                            </div>
                        </div>
                        <div class="w-full lg:w-4/12 px-4 lg:order-1">
                            <div class="flex justify-center py-4 lg:pt-4 pt-8">
                                <div class="lg:mr-4 p-3 text-center">
                                    <span class="text-xl font-bold block uppercase tracking-wide text-blueGray-600">{{sizeof($myEventUser)}}</span>
                                    <span class="text-sm text-blueGray-400">Eventos inscritos</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="text-center">
                        <h3 class="text-4xl font-semibold leading-normal mb-2 text-blueGray-700 mb-2">
                            {{ $user->name }}
                        </h3>
                        @if ($user->address)
                            <div class="text-sm leading-normal mt-0 mb-2 text-blueGray-400 font-bold uppercase">
                                <i class="fas fa-map-marker-alt mr-2 text-lg text-blueGray-400"></i>
                                {{ $user->address }}
                            </div>
                        @endif
                        <div class="mb-2 text-blueGray-600">
                            <i class="fa-solid fa-envelope mr-2 text-lg text-blueGray-400"></i>
                            {{ $user->email }}
                        </div>
                    </div>
                    <div class="mt-10 py-10 border-t border-blueGray-200 text-center">
                        <div class="flex flex-wrap justify-center">
                            <div class="w-full lg:w-9/12 px-4">
                                @if ($user->about)
                                    <p class="mb-4 text-lg leading-relaxed text-blueGray-700">{{ $user->about }}</p>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <section class="mt-5 container">
                <div class="flex items-center flex-wrap justify-around mt-3">
                    @foreach ($myEventUser as $event)
                        <div class="delay-50 duration-100 bg-gray-900 p-4 rounded-lg max-w-sm group mb-8">
                            <a href="{{ route('show', ['id' => $event->id]) }}">
                                <img src="{{ $event -> image }}" style="width:100%; height:181px" class="w-full rounded shadow"/>
                            </a>
                            <h3 class="text-gray-200 font-bold mt-3 text-center truncate_title">
                                {{ $event -> name }}
                            </h3>
                            <div class="mt-2 mb-1 width_description">
                                <p class="text-gray-400 font-light text-xs truncate_text">
                                    {{ $event -> description }}
                                </p>
                            </div>
                            <div class="flex items-end justify-between">
                                <a rel="noreferrer noopener" href="{{ route('show', ['id' => $event->id]) }}" class="border-3 border-emerald-400 hover:bg-emerald-400 text-white rounded-full px-3 py-1">
                                    Ver más
                                </a>
                                <div class="flex items-center flex-col">
                                    <p class="text-gray-400 font-light">
                                        {{ date('m/d/Y' ,strtotime($event->date)) }}
                                    </p>
                                    <p class="text-gray-400 font-light">
                                        Plazas: {{ $event -> stock }}
                                    </p>
                                </div>
                                @if ($today < $event->dateTime)
                                    <a  href="{{ route('cancelSuscription', ['id' => $event->id]) }}" class="border-3 border-pink-500 hover:bg-pink-500 text-white rounded-full px-3 py-1" onclick="return confirm('Está seguro que desea desapuntarse del evento ?')">Desapuntarse
                                    </a>
                                @endif
                                @if ($today > $event->dateTime)
                                    <div class="border-3 border-red-500 bg-red-500 text-white rounded-full px-3 py-1">
                                        Finalizado
                                    </div>
                                @endif
                            </div>
                        </div>
                    @endforeach
                </div>
            </section>
        </div>
    </section>

    </main>

@endsection
