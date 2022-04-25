@extends('layouts.app')
@section('content')
<div class="container mt-5 mb-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
                <h1 class="mb-3 row justify-content-center font-sans font-bold text-4xl 36px" >Iniciar Sesion</h1>
                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end text-base font-sans font-bold">{{ __('Direccion email') }}</label>

                            <div class="col-md-6">
                                <input placeholder="Escribe tu usuario" class="w-full bg-neutral-300 py-3 px-12 border hover: border-gray-500 rounded shadow text-base font-sans" class=" id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                            
                            </div>
                        </div>

                        @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end font-sans font-bold">{{ __('Contraseña') }}</label>

                            <div class="col-md-6">
                                <input placeholder="Escribe tu Contraseña" class=" w-full bg-neutral-300 py-3 px-12 border hover: border-gray-500 rounded shadow text-base font-sans" id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="hover:bg-emerald-400 form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                    <label class="form-check-label" for="remember">
                                        {{ __('Recuerdame') }}
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button class="text-center w-full py-4 bg-emerald-400 hover:bg-emerald-400 rounded-md text-white" type="submit" class="bg-emerald-400 hover:bg-emerald-400 btn">
                                    {{ __('Iniciar Sesion') }}
                                </button>
                            <div class="flex flex-col ">
                                @if (Route::has('password.request'))
                                    <a class="text-sm font-sans font-medium text-gray-600 underline"" href="{{ route('password.request') }}">
                                        {{ __('Has olvidado la contraseña?') }}
                                    </a>
                                    <a class="text-sm font-sans font-medium text-gray-600 underline"" href="{{ route('register') }}">
                                        {{ __('No tienes cuenta registrate!') }}
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>                    
@endsection
