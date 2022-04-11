@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <img class="imgShow" src="{{ $event->img }}">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">{{ $event->name }}</h5>
                        <div class="d-flex flex-row flex-wrap align-items-center">
                            <h6 class="extraShow font-wight-bold mr-2"></h6>
                            <p class="card-title extraShow font-eight-bold txtPrice">{{ $event->price }}</p>
                            <h6 class="card-title font-weight-bold">Descripcion:</h6>
                            <p class="card-title extraShow">{{ $event->description }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
@endsection