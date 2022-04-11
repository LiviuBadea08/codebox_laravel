@extends('layouts.app')

@section('content')

<!-- create a form to create an event with name, description, price, image, date, time, capacity, featured -->
<form action="{{route('store')}}" method="post">
    @csrf
        <div class="flex space-x-2 pl-16 ">
        <h1>Añadir un evento</h1>
        </div>
        <form class=" col-sm-4 p-4">
            <h3 class="flex space-x-2 justify-center">Imagen</h3>
            <section class="flex space-x-2 justify-center pb-2">
                        <div class="marco1">
                            <label for="image_uploads">
                                <img src="./img/plus.png" style="cursor:pointer">
                            </label>
                            <input type="file" id="image_uploads" name="image_uploads" accept=".jpg, .jpeg, .png" multiple style="display:none">
                        </div>
                
            </section>
                <h3 class="flex space-x-2 justify-center">Titulo</h3>
            <section class="flex space-x-2 justify-center pb-2">
                        <div class="marco2">
                            <input type="text" name="titulo" id="titulo" aria-describedby="titulo" required>
                        </div>
            </section>
                <h3 class="flex space-x-2 justify-center">Descripción</h3>
            <section class="flex space-x-2 justify-center pb-6">
                        <div class="marco2">
                            <input type="text" name="titulo" class="descripcion" id="titulo" aria-describedby="titulo" required>
                        </div>
            </section>
                <h3 class="flex space-x-2 justify-center">Fecha y hora</h3>
            <section class="flex space-x-2 justify-center">
                    <div>
                        <label for="start"></label>
                        <input type="date" id="start" name="trip-start"  min="2022-04-06" max="2022-12-31">
                    </div>
                    <div>
                        <input type="time" name="hora" id="time">
                    </div>
            </section>
            <section id="container" class="flex space-x-2 justify-center py-6">
                <div class="contenido pt-2">
                    <label><input type="checkbox" id="destacados" >Destacado</label>
                </div>
                <div class="contenido marco2">
                    <input type="number" placeholder="Maximo participantes" max="99" />
                </div>
            </section>
            <div class="flex space-x-2 justify-center space-evenly">
                
            <button type="submit" class="btn btn-primary" onclick="return confirm ('Seguro que desea crear este evento?')">Confirmar</button>
            <!--  create button that redirects to home -->
            <a href="{{route('home')}}" class="btn btn-primary">Cancelar</a>
        </div>
</form>


@endsection
