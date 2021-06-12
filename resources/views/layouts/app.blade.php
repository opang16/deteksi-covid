<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
 <!-- Option 1: Bootstrap Bundle with Popper -->
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    <title>@yield('title')</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    {{-- <link rel="dns-prefetch" href="//fonts.gstatic.com">--}}
    {{-- <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">--}}

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    {{-- @yield('css') --}}
    <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@400;700;900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="/fonts/icomoon/style.css">
  
    <link rel="stylesheet" href="/css2/bootstrap.min.css">
    <link rel="stylesheet" href="/css2/jquery-ui.css">
    <link rel="stylesheet" href="/css2/owl.carousel.min.css">
    <link rel="stylesheet" href="/css2/owl.theme.default.min.css">
    <link rel="stylesheet" href="/css2/owl.theme.default.min.css">
  
    <link rel="stylesheet" href="/css2/jquery.fancybox.min.css">
  
    <link rel="stylesheet" href="/css2/bootstrap-datepicker.css">
  
    <link rel="stylesheet" href="/fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="/fonts/flaticon-covid/font/flaticon.css">
  
    <link rel="stylesheet" href="/css2/aos.css">
  
    <link rel="stylesheet" href="/css2/style.css">
  

</head>
<body class="main-bg">
    <div id="app">
      
        <nav class="navbar navbar-expand-md navbar-light bg-light shadow-sm fixed-top">
            <div class="container">
                
               
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    
        
                        <div class="container">
                          <a class="navbar-brand" href="{{ url('/') }}">Deteksi Covid-19</a>
                          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                          </button>
                          <div class="collapse navbar-collapse" id="navbarNavDropdown">
                            <ul class="navbar-nav">
                              <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="{{ url('/') }}">Home</a>
                              </li>
                            
                              <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                  Menu Diagnosa
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                  <li><a class="dropdown-item" href="{{ url('/tes-covid') }}">Tes Covid</a></li>
                                  <li><a class="dropdown-item" href="{{ url('/history') }}">History</a></li>
                                </ul>
                              </li>
                              
                              <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                  Daftar
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                  <li><a class="dropdown-item" href="{{ url('/rumah-sakit') }}">Rumah Sakit</a></li>
                                  <li><a class="dropdown-item" href="{{ url('/puskesmas') }}">Puskesmas</a></li>
                                  <li><a class="dropdown-item" href="{{ url('/hotel') }}">Hotel</a></li>
                                  <li><a class="dropdown-item" href="{{ url('/wisma-atlet') }}">Wisma Atlet</a></li>
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" href="{{ url('/panduan') }}">Panduan</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" href="{{ url('/about') }}">About Covid</a>
                              </li>
                              </ul>
                          </div>
                        </div>
                    
                      
                
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
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

        <main class="">
            @yield('content')
        </main>
        @yield('container')
    </div> 

    
    @stack('scripts')
    
</body>
</html>
