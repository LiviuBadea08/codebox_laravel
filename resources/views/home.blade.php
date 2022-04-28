@extends('layouts.app')

@section ('content')
    {{-- Alert --}}
    @if(session('alert'))
    <div class="fixed h-0 container z-30 top-50 left-0 right-0 bottom-0 w-full sm:w-3/5 fixed container z-30 left-0 right-0 top-0">
        <div class="alert alert-{{ session('alert')['type'] }} alert-dismissible fade show h5" role="alert">

            <i class="{{ session('alert')['icon'] }} sm:mr-4"></i><strong>{{ session('alert')['message'] }}</strong>

            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                <i class="fa-solid fa-xmark h5"></i>
            </button>
            
        </div>
    </div>
    @endif
    {{-- carousel --}}
    <div class="w-full mx-auto mb-5 shadow-lg">
        <div id="default-carousel" class="relative" data-carousel="slide">
            <div class="overflow-hidden relative h-56 sm:h-64 xl:h-80 2xl:h-96">
                @foreach ($featured as $event)

                    <a href="{{ route('show', ['id' => $event->id]) }}" class="content-slide hidden duration-700 ease-in-out" data-carousel-item>
                        <div class="slide" style="background-image: url('{{ $event->image }}');"></div>
                        <div class="flex items-center flex-col h-full justify-end">
                            <div class="flex items-center flex-col slide-title">
                                <h1 class="sm:mb-2 text-base font-extrabold leading-10 tracking-tight sm:text-3xl sm:mt-5 sm:leading-none md:text-3xl">
                                    {{ $event-> name }}
                                </h1>
                                <p class="slide-description text-center leading-relaxed">
                                    {{ $event -> description}}
                                </p>
                            </div>
                        </div>
                    </a>
                    
                @endforeach
            </div>
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

    <div class=" container mx-auto">
        @if (Auth::check() && Auth::user()->isAdmin())
            <a href="{{ route('create') }}" class="bg-gray-900 text-white px-4 py-2 rounded-full m-4">
                <i class="fa-solid fa-plus-circle"></i>
            </a>
        @endif

        {{-- cards --}}
        <div class=" flex items-center flex-wrap justify-around mt-3">

            @foreach ($events as $event)
                <div class="delay-50 duration-100 bg-gray-900 p-4 rounded-lg max-w-sm group mb-8">
                    <a href="{{ route('show', ['id' => $event->id]) }}">
                        <img src="{{ $event -> image }}" style="width:100%; height:181px" class="w-full rounded shadow"/>
                    </a>
                    <h3 class="text-gray-200 font-bold mt-3 text-center truncate_title">
                        {{ $event -> name }}
                    </h3>
                    <div class="mt-2 mb-1 width_description">
                        <p class="text-gray-400 font-light text-xs truncate_text"> {{ $event -> description }} </p>
                    </div>
                    <div class="flex items-end justify-between">
                        <a rel="noreferrer noopener" href="{{ route('show', ['id' => $event->id]) }}" class="border-3 border-emerald-400 hover:bg-emerald-400 text-white rounded-full px-3 py-1">
                            Ver más
                        </a>
                        <div class="flex items-center flex-col">
                            <p class="text-gray-400 font-light">{{ date('d/m/Y H:i' ,strtotime($event->dateTime)) }}</p>
                            <p class="text-gray-400 font-light">Plazas: {{ $event-> stock }}</p>
                        </div>

                        @if (Auth::check() && Auth::user()->isAdmin())

                            @if ($event->dateTime > $today)
                                <div class="flex justify-end mt-2">
                                    <form action="{{ route('delete', ['id' => $event->id]) }}" method="post">
                                    @method ('delete')
                                    @csrf 
                                        <button type="submit" onclick="return confirm('Está seguro que desea eliminar el evento {{$event -> name}}?')" class="mr-10 text-white text-base" >
                                            <i class="fa-solid fa-trash-can icon_hover"></i>
                                        </button>
                                    </form>
                                    <a href="{{ route('edit', ['id' => $event->id]) }}" class=" text-white px-1 text-base ">
                                        <i class="fa-solid fa-pen-to-square icon_hover"></i>
                                    </a>
                                </div>
                            @endif

                            @if ($event->dateTime < $today)
                                <div class="border-3 border-red-500 bg-red-500 text-white rounded-full px-3 py-1">
                                    Finalizado
                                </div>
                            @endif

                        @else
                            @if ($event->dateTime > $today)

                                @if ($event->stock != 0) 
                                    <a href="{{ url('subscribe', $event->id) }}" class="border-3 border-emerald-400 hover:bg-emerald-400 text-white rounded-full px-3 py-1">
                                        Apuntarse
                                    </a>
                                @endif

                                @if ($event->stock == 0) 
                                    <div href="#" class="border-3 border-emerald-900 bg-emerald-900 text-white rounded-full px-3 py-1">
                                        sin plazas 
                                    </div>
                                @endif

                            @endif

                            @if ($event->dateTime < $today)
                                <div class="border-3 border-red-500 bg-red-500 text-white rounded-full px-3 py-1">
                                    Finalizado
                                </div>
                            @endif

                        @endif
                        
                    </div>
                </div>
            @endforeach

        </div>
    </div>

    {{-- buttoms --}}
    <div id='next' class="flex justify-around mb-5">
        {{ $events -> links() }}
    </div>

@endsection
