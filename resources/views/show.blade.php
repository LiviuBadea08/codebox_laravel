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