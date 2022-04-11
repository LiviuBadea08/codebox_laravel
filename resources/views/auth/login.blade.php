@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

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
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
          >
<div class='grid grid-cols-12'>
   <div class="col-span-4 text-white font-sans font-bold bg-white min-h-screen pl-7">
       <div class="grid grid-rows-6 grid-flow-col min-h-screen items-center justify-items-start">
           <div class="text-black row-span-4 row-start-2 text-4xl">
           {{ __('Iniciar Sesion') }}
               <div class="pt-10 pr-20">
               <form method="POST" action="{{ route('login') }}">
                        @csrf                      
                   <label class="text-sm font-sans font-medium">
                       Usuario
                   </label>
                   <input 
                       type="text" 
                       name="username" 
                       placeholder="Write your username" 
                       class="w-full bg-neutral-300 py-3 px-12 border hover: border-gray-500 rounded shadow text-base font-sans"/>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror   
                            </div>   

                       @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror                       
               </div>
               <div class="pt-2 pr-20">
                   <label class="text-sm font-sans font-medium">
                       Contraseña
                   </label>
                   <input 
                       type="password" 
                       name="password" 
                       placeholder="Write your password" 
                       class=" w-full bg-neutral-300 py-3 px-12 border hover: border-gray-500 rounded shadow text-base font-sans"/

                       @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                
                   <a href="" class="text-sm font-sans font-medium text-gray-600 underline">
                       Has olvidado tu contraseña?
                   </a>
               </div>   
               <!-- Button -->
               <div class="text-sm font-sans font-medium w-full pr-20 pt-14">
                   <button 
                       type="button"   
                       class="text-center w-full py-4 bg-green-400 hover:bg-green-400 rounded-md text-white">
                           Registrate
                   </button>
               </div>
           </div>
           <!-- Text -->
           <a href="" class="text-sm font-sans font-medium text-gray-400 underline">
               No tienes cuenta? ¡Registrate!
           </a>
       </div>         
   </div>

   <!-- Second column image -->
   <div class="banner col-span-8 text-white font-sans font-bold">
       <!-- Aquí iría algún comentario -->
   </div>    
</div>



<section class="banner">

</section>
@endsection
