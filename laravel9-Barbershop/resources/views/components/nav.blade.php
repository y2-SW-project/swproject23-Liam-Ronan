<header>
        <nav class="navbar fixed-top bg-blur navbar-expand-lg py-4">
            <div class="container-xl">
                    <a class="slider-link heading text-light navbar-brand fs-2 fw-normal" href="{{ route('home') }}">Boyz2Men</a>
                    <button
                        class="navbar-toggler bg-light"
                        type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent"
                        aria-expanded="false"
                        aria-label="Toggle navigation"
                    >
                        <span class="navbar-toggler-icon text-light"></span>
                    </button>
                <div class="container">
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <div class="container">
                            <ul class="heading navbar-nav fs-5 gap-4 justify-content-center">
                                <li class="nav-item">
                                    <a class="slider-link nav-link text-light" href="{{ route('home') }}">Home</a>
                                </li>
                                @if(Auth::user()->hasRole('user'))
                                    <li class="nav-item">
                                        <a class="slider-link nav-link text-light" href="{{ route('user.bookings.index')}}">Bookings</a>
                                    </li>
                                @else
                                    <li class="nav-item">
                                        <a class="slider-link nav-link text-light" href="{{ route('admin.bookings.index')}}">Bookings</a>
                                    </li>
                                @endif
                                <li class="nav-item">
                                    <a class="slider-link nav-link text-light" href="{{ route('about') }}">About</a>
                                </li>
                                <li class="nav-item">
                                    <a class="slider-link nav-link text-light" href="{{ route('contact') }}">Contact</a>
                                </li>
                            </ul>
                        </div>
                        {{-- Checking if the user is authorised to show a dropdown menu with a logout button --}}
                             @if(Auth::check())
                             <div class="slider-link nav-item dropdown text-light heading fs-5">
                                <a href="#" class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    {{-- Capitlising the first letter of the name and making it red using a callback function --}}
                                    Welcome, {!! preg_replace_callback('/(\w+)/', function($matches) {
                                        return '<span class="bg-Text">'.ucfirst($matches[1]).'</span>';
                                    }, Auth::user()->name) !!}
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <a href="{{ route('logout') }}" class="dropdown-item" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </div>
                             @else
                                <button class="main-btn gradient btn fs-5 mt-2">
                                    <a class="text-light text-center p-3 text-decoration-none fw-semibold" href="{{route('login')}}">{{__('Login')}}</a>
                                </button> 
                                <button class="main-btn gradient btn fs-5 mt-2">
                                    <a class="text-light text-center p-3 text-decoration-none fw-semibold" href="{{route('register')}}">{{__('Register')}}</a>
                                </button>
                             @endif                 
                    </div>
                </div>
         </div>
    </nav>
</header>