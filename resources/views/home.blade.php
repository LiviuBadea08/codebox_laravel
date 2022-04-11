@extends('layouts.app')

@section ('content')

<div class="max-w-screen-2xl mx-auto mb-5">

	<div id="default-carousel" class="relative" data-carousel="slide">

        <!-- Carousel wrapper -->
        <div class="overflow-hidden relative h-56 sm:h-64 xl:h-80 2xl:h-96">
            @foreach ($events as $event)
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    {{-- <div style="background-image: url('{{ $event->image }}'); width:100%;"> --}}
                        <img src="{{ $event->image }}" class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2" alt="...">
                    {{-- </div> --}}
                </div>
            @endforeach
        </div>

        <!-- Slider controls -->
        <button type="button" class="flex absolute top-0 left-0 z-30 justify-center items-center px-4 h-full cursor-pointer group focus:outline-none" data-carousel-prev>
            <span class="inline-flex justify-center items-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                <svg class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
                <span class="hidden">Previous</span>
            </span>
        </button>

        <button type="button" class="flex absolute top-0 right-0 z-30 justify-center items-center px-4 h-full cursor-pointer group focus:outline-none" data-carousel-next>
            <span class="inline-flex justify-center items-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                <svg class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                <span class="hidden">Next</span>
            </span>
        </button>
        
    </div>
    <script src="https://unpkg.com/flowbite@1.4.0/dist/flowbite.js"></script>
</div>

<div class="container">
    <!-- boton create pendiente de estilizar -->
    <a href="{{ route('create') }}" class="bg-gray-900 text-white px-4 py-2 rounded-full m-4">
        <i class="fa-solid fa-plus-circle"></i>
    </a>
    <div class="flex items-center flex-wrap justify-around mt-3">
    @foreach ($events as $event)
        
        <!-- Card -->
        <div class="delay-50 duration-100 bg-gray-900 p-4 rounded-lg max-w-sm group mb-8">
            <!-- Image Cover -->
            <a href="#">
                <img src="{{ $event -> image }}" style="width:100%; height:181px" class="w-full rounded shadow"/>
            </a>
            <!-- Title -->
            <h3 class="text-gray-200 font-bold mt-3 text-center truncate_title"> {{ $event -> name }} </h3>
            <!-- Description -->
            <div class="mt-2 mb-1 width_description">
                <p class="text-gray-400 font-light text-xs truncate_text"> {{ $event -> description }} </p>
            </div>
            <!-- button and date  -->
            <div class="flex items-end justify-between">
                <a target="_blank" rel="noreferrer noopener" href="#"
                    class="border-3 border-emerald-400 hover:bg-emerald-400 text-white rounded-full px-7 py-1">
                    Ver mas
                </a>
                <div class="flex items-center flex-col">
                    <p class="text-gray-400 font-light">{{ $event -> date }}</p>
                    <p class="text-gray-400 font-light">Plazas: {{ $event -> capacity }}</p>
                </div>
                
                <a target="_blank" rel="noreferrer noopener" href="#"
                    class="bg-blue-900 hover:bg-blue-800 text-white rounded-full px-6 py-2">
                    Apuntarse
                </a>
            </div>
            <!-- admin button -->
            <div class="flex justify-end mt-2">
                <form action="{{ route('delete', ['id' => $event->id]) }}" method="post">
                    @method ('delete')
                    @csrf 
                    <button type="submit" onclick="return confirm('Está seguro que desea eliminar el evento {{$event -> name}}?')" class="mr-10 text-white text-base" >
                        <i class="fa-solid fa-trash-can icon_hover"></i>
                    </button>
                </form>

                <a href="{{ route('edit', ['id' => $event->id]) }}"
                    class=" text-white px-3 text-base ">
                    <i class="fa-solid fa-pen-to-square icon_hover"></i>
                </a>
            </div>
        </div>

    @endforeach
    </div>

</div>
    <div class="flex justify-around">
        {{ $events -> links() }}
    </div>

@endsection