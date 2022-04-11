@extends('layouts.app')

@section ('content')

<!-- carrousel -->
        <div>
            <a href="{{ route('create') }}" class="bg-gray-900 text-white px-4 py-2 rounded-full m-4">
            <i class="fa-solid fa-plus-circle"></i>
            </a>
        </div>
        <div class="container">
        <div class="flex items-center flex-wrap justify-around">
    @foreach ($events as $event)
    

        <div class="hover:bg-gray-800 delay-50 duration-100 bg-gray-900 p-4 rounded-lg max-w-sm group mb-8 mt-4">

            <img src="{{ $event -> image }}" style="width:100%; height:181px" class="w-full rounded shadow"/>
            
            <h3 class="text-gray-200 font-bold mt-3 text-center truncate_title"> {{ $event -> name }} </h3>

            <p class="text-gray-400 font-light mt-2 text-xs truncate_text mb-1"> {{ $event -> description }} </p>

            <div class="flex items-end justify-between">
                <a rel="noreferrer noopener" href="{{ route('show', ['id' => $event->id]) }}"
                    class="border-3 border-emerald-400 hover:bg-emerald-400 text-white rounded-full px-7 py-1">
                    Ver más
                </a>
                <div class="flex items-center flex-col">
                    <p class="text-gray-400 font-light">{{ $event -> date }}</p>
                    <p class="text-gray-400 font-light">Plazas: {{ $event -> capacity }}</p>
                </div>

                <a rel="noreferrer noopener"
                    class="border-3 border-emerald-400 hover:bg-emerald-400 text-white rounded-full px-7 py-1">
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

                <a rel="noreferrer noopener" href="{{ route('edit', ['id' => $event->id]) }}"
                    class=" text-white px-3 text-base">
                    <i class="fa-solid fa-pen-to-square"></i>
                </a>
            </div>

        </div>

    @endforeach
    </div>
    <!-- boton create pendiente de estilizar -->

</div>

{{ $events -> links() }}

@endsection