<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/home') }}">
                    Home
                </a>
                <a class="navbar-brand" href="{{ url('/list') }}" >
                    Recipes
                </a>
               
                <a class="navbar-brand" href="{{'/blog'}}">
                    Blog
                </a>
                <a class="navbar-brand" href="{{ url('/contacts') }}">
                    Contatti
                </a>
                <a class="navbar-brand " href="{{'/search'}}">
                  search
              </a>

                {{-- <a class="nav-item">
                  <a class="navbar-brand" href="{{ url('my_favorites') }}">My Favorites</a>
                </a> --}}

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
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                    
                                </a>
                               

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
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

        <main class="py-4">
            @yield('content')
        </main>
        <footer class="text-center text-lg-start bg-light text-muted static-bottom">
            <section class="">
              <div class="container text-center text-md-start mt-5">
                <div class="row mt-3">
                  <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">  <br>
                    <h6 class="text-uppercase fw-bold mb-4">
                    @ ricette 2022
                    </h6>
                    <p>
                        Un concept store digitale dove proponiamo la nostra visione di bellezza e contemporaneità attraverso la selezione di prodotti e designer locali e internazionali. Enjoy and be nice.
                    </p>
                </div>
                  <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4"><br>
                    <h6 class="text-uppercase fw-bold mb-4">
                      Social
                    </h6>
                    <p>
                      <a href="#!" class="text-reset">Facebook</a>
                    </p>
                    <p>
                      <a href="#!" class="text-reset">Instagram</a>
                    </p>
                    <p>
                        <a href="#!" class="text-reset">Youtube</a>
                      </p>
                  </div>
                  <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4"><br>
                    <h6 class="text-uppercase fw-bold mb-4">
                      Help
                    </h6>
                    <p>
                      <a href="#!" class="text-reset">About</a>
                    </p>
                    <p>
                      <a href="#!" class="text-reset">Contatti</a>
                    </p>
                    <p>
                      <a href="#!" class="text-reset">Privacy Policy</a>
                    </p>
                    <p>
                      <a href="#!" class="text-reset">Cookie Policy</a>
                    </p>
                  </div>
                  <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4"><br>
                    <h6 class="text-uppercase fw-bold mb-4">Contatti</h6>
                    <p><i class="fas fa-home me-3"></i> Roma, Rm 10012</p>
                    <p>
                      <i class="fas fa-envelope me-3"></i>
                      info@example.com
                    </p>
                    <p><i class="fas fa-phone me-3"></i> + 39 222 222 88</p>
                    <p><i class="fas fa-print me-3"></i> + 39 222 222 88</p>
                  </div>
                </div>
              </div>
            </section>
          </footer>
    </div>
</body>
</html>
