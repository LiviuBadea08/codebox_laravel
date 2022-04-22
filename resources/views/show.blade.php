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
    <section class= "d-flex justify-center m-2">
        <div class="mx-auto container flex justify-center">

            <div tabindex="0"  aria-label="Group of cards" class=" focus:outline-none sm:w-1/2 xl:mt-6 mb-6 ">
                <div>
                    <div tabindex="0" class="focus:outline-none" aria-label="card 1">
                        <img role="img" aria-label="code editor" tabindex="0" class="focus:outline-none w-full" src="https://cdn.tuk.dev/assets/components/111220/Blg-6/blog(1).png" alt="code editor" />
                        <div class="py-4 px-8 w-full flex justify-between bg-indigo-700">
                            <p  tabindex="0" class="focus:outline-none text-sm text-white font-semibold tracking-wide">{{ $event->time }}</p>
                            <p tabindex="0" class="focus:outline-none text-sm text-white font-semibold tracking-wide">{{  $event->date }}</p>
                        </div>
                        <div class="bg-white px-10 py-6 rounded-bl-3xl rounded-br-3xl">
                            <h1 tabindex="0" class="focus:outline-none text-4xl text-gray-900 font-semibold tracking-wider">{{ $event->name }}</h1>
                            <p tabindex="0" class="focus:outline-none text-gray-700 text-base lg:text-lg lg:leading-8 tracking-wide mt-6 w-11/12">{{ $event->description }}</p>
                            <div class="w-full flex justify-end" >
                                <button class="focus:outline-none focus:ring-2 ring-offset-2 focus:ring-gray-600 hover:opacity-75 mt-4 justify-end flex items-center cursor-pointer">
                                    <span class=" text-base tracking-wide text-indigo-700">Read more</span>
                                    <svg class="ml-3 lg:ml-6 text-indigo-700" xmlns="http://www.w3.org/2000/svg" width="20" height="18" viewBox="0 0 20 18" fill="none">
                                        <path d="M11.7998 1L18.9998 8.53662L11.7998 16.0732" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path d="M1 8.53662H19" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                    </svg>
                                </button>
                            </div>
                            <div class="h-5 w-2"></div>
                        </div>
                    </div>

                </div>
            </div>
            
        </div>
    </section>
    
    
@endsection