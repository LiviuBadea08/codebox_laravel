@extends('layouts.app')

@section ('content')
<div class="container">
    <div class="flex items-center flex-wrap justify-around">

    {{-- slide --}}


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
            {{-- <div class="flex justify-end mt-2">
                <form action="{{ route('delete', ['id' => $event->id]) }}" method="post">
                    @method ('delete')
                    @csrf 
                    <button type="submit" onclick="return confirm('Está seguro que desea eliminar el evento {{$event -> name}}?')" class="mr-10 text-white text-base" >
                        <i class="fa-solid fa-trash-can icon_hover"></i>
                    </button>
                </form>

                <a target="_blank" rel="noreferrer noopener" href="{{ route('edit', ['id' => $event->id]) }}"
                    class=" text-white px-3 text-base ">
                    <i class="fa-solid fa-pen-to-square icon_hover"></i>
                </a>
            </div> --}}
        </div>

    @endforeach
    </div>
</div>
<div class="flex justify-around">
    {{ $events -> links() }}
</div>
@endsection