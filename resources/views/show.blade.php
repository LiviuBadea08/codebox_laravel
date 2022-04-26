@extends('layouts.app')

@section('content')
    {{-- Alertas --}}
    @if(session('alert'))
    <div class="fixed container z-30 left-0 right-0 bottom-0 sm:w-3/5">
        <div class="alert alert-{{ session('alert')['type'] }} alert-dismissible fade show h5" role="alert">
            <i class="{{ session('alert')['icon'] }} sm:mr-4"></i><strong>{{ session('alert')['message'] }}</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                <i class="fa-solid fa-xmark h5"></i>
            </button>
        </div>
    </div>
    @endif
    
    <section class= "d-flex justify-center m-2 ">
        <div class="mx-auto container flex justify-center">

            <div tabindex="0"  aria-label="Group of cards" class=" focus:outline-none sm:w-4/5 xl:mt-6 mb-6 ">
                <div tabindex="0" class=" focus:outline-none lg:flex" aria-label="card 1">
                    <div class="lg:w-1/2 mt-4">
                        <img role="img" aria-label="code editor" tabindex="0" class="focus:outline-none w-full rounded-t-lg" src="{{ $event->image }}" alt="code editor" />
                        
                        <div class="py-2 w-full flex justify-around bg-gray-900">
                            <p  tabindex="0" class="focus:outline-none text-sm text-white font-semibold tracking-wide">{{ $event->time }}</p>
                            <p  tabindex="0" class="focus:outline-none text-sm text-white font-semibold tracking-wide">Plazas restantes: {{ $event->stock }} / {{ $event->capacity }} </p>
                            <p tabindex="0" class="focus:outline-none text-sm text-white font-semibold tracking-wide">{{  date('m/d/Y' ,strtotime($event->date)) }}</p>
                        </div>
                    </div>

                    <div class="bg-white px-10 py-6 rounded-br-3x flex-1">
                        <h1 tabindex="0" class="focus:outline-none text-4xl text-gray-900 font-semibold tracking-wider">{{ $event->name }}</h1>
                        <p tabindex="0" class="focus:outline-none text-gray-700 text-base lg:text-lg lg:leading-8 tracking-wide mt-6 w-11/12">{{ $event->description }}</p>
                        <div class="w-full flex justify-end" >
                            <a href="{{ url('subscribe', $event->id) }}" class="border-3 border-emerald-400 bg-emerald-400 text-white rounded-full px-7 py-1">
                                Apuntarse
                            </a>
                        </div>
                        <div class="h-5 w-2"></div>
                    </div>

                </div>
            </div>
            
        </div>
    </section>
    
    
@endsection