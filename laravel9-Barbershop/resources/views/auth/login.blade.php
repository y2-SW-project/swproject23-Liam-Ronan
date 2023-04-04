{{-- @extends('layouts.app') --}}
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

    
        @vite(['resources/js/app.js'])
    
    </head>
<body>
    <div class="bg-login pt-3">
        <div id="app">
            <nav class="navbar navbar-expand-md navbar-light shadow-sm text-light">
                <div class="container">
                    <a class="slider-link heading navbar-brand text-light">
                        {{ config('app.name', 'Boyz2Men') }}
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <!-- Left Side Of Navbar -->
                        <ul class="navbar-nav me-auto">

                        </ul>

                        <!-- Right Side Of Navbar -->
                        <ul class="navbar-nav ms-auto">
                            <!-- Authentication Links -->
                            @guest
                                @if (Route::has('login'))
                                    <li class="nav-item">
                                        <a class="slider-link heading nav-link text-light fw-light" href="{{ route('login') }}">{{ __('Login') }}</a>
                                    </li>
                                @endif

                                @if (Route::has('register'))
                                    <li class="nav-item">
                                        <a class="slider-link heading nav-link text-light fw-light" href="{{ route('register') }}">{{ __('Register') }}</a>
                                    </li>
                                @endif
                            @else
                                <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle text-light" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ Auth::user()->name }}
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-end bg-black" aria-labelledby="navbarDropdown">
                                        <a class="heading bg-black nav-link text-light dropdown-item p-1 text-center" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                                        </form>
                                    </div>
                                </li>
                            @endguest
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
        <div class="container-fluid d-flex justify-content-center min-vh-100">
            <div class="heading align-self-center text-center text-light col-md-8">
                        <h1 class="heading text-danger display-5 fw-normal mb-1">Log In<h1>
                        <div class="container heading">
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="container my-3">
                                    <div class="row justify-content-center">
                                        <div class="col-md-8 text-center">
                                            <hr class="border border-danger border-2 opacity-75">
                                            <label for="email" class="fs-5 col-md-8 col-form-label p-2">{{ __('Email Address') }}</label>
                                            <div class="mb-3">
                                                <input id="email" placeholder="Enter Email Address" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                            </div>

                                            <label for="password" class="fs-5 col-md-6 col-form-label p-2">{{ __('Password') }}</label>
                                            <div class="mb-3">
                                                <input id="password" placeholder="Enter Password"  type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                            </div>
                                            <hr class="border border-danger border-2 opacity-75 mt-5">
                                        </div>
                                    </div>
                                </div>
                        </div>

                            <button class="col-md-4 rounded-3 my-2 gradient btn text-light">
                                {{ __('Login') }}
                            </button>

                            @if (Route::has('password.request'))
                                <a class="slider-link btn para my-3 px-3 text-light" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            @endif   
                        </form>
            </div>
        </div>
    </div>
</body>
</html>
