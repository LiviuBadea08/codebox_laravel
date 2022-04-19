@extends('layouts.app')

@section('content')

<!-- create a form to create an event with name, description, price, image, date, time, capacity, featured -->
<form action="{{route('store')}}" method="post">
    @csrf
        <div class="flex space-x-2 pl-16 font-bold">
        <h1>Añadir un evento</h1>
        </div>
        <form class=" col-sm-4 p-4">
            <h3 class="flex space-x-2 justify-center font-bold pb-2">Imagen</h3>
            <section class="flex space-x-2 justify-center pb-2">
                        <div class="marco2">
                            <input type="text" name="image" id="image">
                        </div>
            </section>
                <h3 class="flex space-x-2 justify-center font-bold pb-2">Titulo</h3>
            <section class="flex space-x-2 justify-center pb-2">
                        <div class="marco2">
                            <input type="text" name="name" aria-describedby="titulo" id="name" required>
                        </div>
            </section>
                <h3 class="flex space-x-2 justify-center font-bold pb-2">Descripción</h3>
            <section class="flex space-x-2 justify-center pb-6">
                        <div class="marco2">
                            <textarea rows="4" cols="20" name="description" id="description" required></textarea>
                        </div>
            </section>
                <h3 class="flex space-x-2 justify-center font-bold pb-2">Fecha y hora</h3>
            <section class="flex space-x-2 justify-center">
                    <div>
                        <label for="start"></label>
                        <input type="date"  name="date"  id="date" min="0000-00-00" max="2022-12-31">
                    </div>
                    <div>
                        <input type="time" name="time" id="time">
                    </div>
            </section>
            <section id="container" class="flex space-x-2 justify-center py-6">
                <div class="contenido pt-2 font-bold">
                    <label><input type="checkbox" name="featured" id="featured">Destacado</label>
                </div>
                <div class="contenido marco2">
                    <input type="number" name="capacity" id="capacity" placeholder="Maximo participantes" min="1" max="10" />
                </div>
            </section>
            <section class="contenido marco2 flex space-x-2 justify-center">
                <input type="number" name="price" id="price">
            </section>
            <div class="flex space-x-2 justify-center space-evenly">
            <button type="submit" class="inline-block px-6 py-2.5 bg-green-500 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-green-600 hover:shadow-lg focus:bg-green-600 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-green-700 active:shadow-lg transition duration-150 ease-in-out" onclick="return confirm ('Seguro que desea crear este evento?')">Confirmar</button>
            <!--  create button that redirects to home -->
            <a href="{{route('home')}}" class="btn inline-block px-6 py-2.5 bg-red-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-red-700 hover:shadow-lg focus:bg-red-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-red-800 active:shadow-lg transition duration-150 ease-in-out">Cancelar</a>
        </div>
</form>


@endsection
