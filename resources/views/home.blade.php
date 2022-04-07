@extends('layouts.app')
<!-- meter el header de componentes -->
<section class="carrousel-section">
    <!-- PARA EL CARROUSELL -->
</section>
<section class= "product-card-section flex flex-row justify-arround flex-wrap">
    @section ('content')
    @foreach ($events as $event)
    <section class="pt-20 lg:pt-[120px] pb-10 lg:pb-20 bg-[#F3F4F6]">
        <div class="container">
            <div class="flex flex-wrap -mx-4">
                <div class="w-full md:w-1/2 xl:w-1/3 px-4">
                    <div class="bg-zinc-200 rounded-lg overflow-hidden mb-10">
                    <img src="{{$event -> image}}" alt="image" class="w-full"/>
                        <div class="p-8 sm:p-9 md:p-7 xl:p-9 text-center">
                            <h3>
                                <a href="javascript:void(0)"class="font-semibold text-black text-xl sm:text-[22px] md:text-xl lg:text-[22px] xl:text-xl 2xl:text-[22px] mb-4 block hover:text-primary">{{$event -> name}}
                                </a>
                            </h3>
                            <p class="text-base text-body-color leading-relaxed mb-7">{{$event -> description}}</p>
                            <form action="{{ route('delete', ['id' => $event->id]) }}" method="post">
                                @method ('delete')
                                @csrf
                                <button type="submit" onclick="return confirm('Está seguro que desea eliminar el evento {{$event -> name}}?')">
                                    Eliminar
                                </button>
                            </form>
                                    <a href="{{ route('edit', ['id' => $event->id]) }}">
                                        <button type='button' class="text-withe py-3 px-4 rounded-lg bg-blue-500">
                                            <p class="work-sans font-semibol text-sm tracking-wide"> Editar</p>
                                        </button>
                                    </a>

                                    <a href="{{ route('show', ['id' => $event->id]) }}">
                                        <button type='button' class="text-withe py-3 px-4 rounded-lg bg-blue-500">
                                            <p class="work-sans font-semibol text-sm tracking-wide"> Show</p>
                                        </button>
                                    </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @endforeach
    {{$events -> links()}}
    @endsection

        <a href="{{ route('create') }}">
        <button type='button' class="text-withe py-3 px-4 rounded-lg bg-blue-500">
            <p class="work-sans font-semibol text-sm tracking-wide">Crear</p>
        </button>

</section>