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
    <!--PRUEBA-->
    <section class="flex justify-center m-6">
    <div class="delay-50 duration-100 bg-gray-900 p-4 rounded-lg h-96 max-w-sm group mb-8">
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
                        <div class="flex items-center flex-col">
                            <p class="text-gray-400 font-light">{{ $event -> date }}</p>
                            <p class="text-gray-400 font-light">Plazas: {{ $event -> capacity }}</p>
                        </div>
                        @if (Auth::check() && Auth::user()->isAdmin())
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
                        @else
                            <a href="{{ url('subscribe', $event->id) }}" class="border-3 border-emerald-400 hover:bg-emerald-400 text-white rounded-full px-7 py-1">
                                Apuntarse
                            </a>
                        @endif
                </div>
        </div>
</section>

@endsection