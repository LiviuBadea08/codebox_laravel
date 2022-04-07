@extends('layouts.app')

@section ('content')
<div class="container">
    <div class="flex items-center flex-wrap justify-around">
    @foreach ($events as $event)
        
        <!-- Card -->
        <div class="hover:bg-gray-800 delay-50 duration-100 bg-gray-900 p-4 rounded-lg max-w-sm group mb-8">
            <!-- Image Cover -->
            <a href="#">
                <img src="{{ $event -> image }}" style="width:100%; height:181px" class="w-full rounded shadow"/>
            </a>
            
            <!-- Title -->
            <h3 class="text-gray-200 font-bold mt-3 text-center truncate_title"> {{ $event -> name }} </h3>

            <!-- Description -->
            <p class="text-gray-400 font-light mt-2 text-xs truncate_text mb-1"> {{ $event -> description }} </p>

            <div class="flex items-end justify-between">
                <a target="_blank" rel="noreferrer noopener" href="#"
                    class="border-3 border-green-500 hover:bg-green-500 text-white rounded-full px-7 py-1">
                    Ver mas
                </a>
                <div class="flex items-center flex-col">
                    <p class="text-gray-400 font-light">{{ $event -> date }}</p>
                    <p class="text-gray-400 font-light">Plazas: {{ $event -> capacity }}</p>
                </div>
                
                <a target="_blank" rel="noreferrer noopener" href="#"
                    class="bg-blue-900 hover:bg-green-500 text-white rounded-full px-6 py-2">
                    Apuntarse
                </a>
            </div>

            <div class="flex justify-end mt-2">
                <form action="{{ route('delete', ['id' => $event->id]) }}" method="post">
                    @method ('delete')
                    @csrf 
                    <button type="submit" onclick="return confirm('Está seguro que desea eliminar el evento {{$event -> name}}?')" class="mr-10 text-white text-base" >
                        <i class="fa-solid fa-trash-can"></i>
                    </button>
                </form>

                <a target="_blank" rel="noreferrer noopener" href="{{ route('edit', ['id' => $event->id]) }}"
                    class=" text-white px-3 text-base">
                    <i class="fa-solid fa-pen-to-square"></i>
                </a>
            </div>

        </div>

    @endforeach
    </div>
</div>
{{ $events -> links() }}
@endsection