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
    
@endsection