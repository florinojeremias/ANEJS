<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">

      <!-- CSRF Token -->
      <meta name="csrf-token" content="{{ csrf_token() }}">

      <title>{{ config('app.name', 'ANEJS') }}</title>

      <!-- Scripts -->
    
      <script src="{{ asset('js/jquery.js')}}"></script>
      <script src="{{ asset('js/app.js')}}" defer></script>

      <!-- Fonts -->
      <link rel="dns-prefetch" href="//fonts.gstatic.com">
      <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
      <link rel="shortcut icon" href="{{ asset('img/IMG-20210818-WA0006.jpg')}}" type="image/x-icon">

      <!-- Styles -->
      <link href="{{ asset('css/app.css') }}" rel="stylesheet">
      <link rel="stylesheet" href="{{ asset('css/navbar.css')}}">
      <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css')}}">
</head>
<body>
  <div id="app">
          <header class="header">
              <div class="header-inner">
                  <div class="container-fluid px-lg-5">
                      <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-success ">
                          <span class="logo">
                          <a class="navbar-brand" href="/">  
                              <img src="{{ asset('img/anejslogo.png')}}" class="img-fluid" alt="" style="width: 70px; margin:-3px 0px 0px 0px;">
                              ANEJS
                          </span>
                          </a>
                          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon">
                                
                              <i class="fas fa-bars" style="margin:5px 0px 0px 0px;"></i></span>
                          </button>
                        
                          <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav m-auto">
                              <li class="nav-item active">
                                <a class="nav-link" href="/about">Quem somos <span class="sr-only">(current)</span></a>
                              </li>
                                <li class="nav-item">
                                  <a class="nav-link" href="/activities">Actividades</a>
                                </li>
                                <li class="nav-item">
                                  <a class="nav-link" href="/membro/create">Ser Membro</a>
                                </li>
                                {{--
                              <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                  Ser Membro
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                  <a class="dropdown-item" href="#">Candidatar-me</a>
                                  <a class="dropdown-item" href="#">Another action</a>
                                  <div class="dropdown-divider"></div>
                                  <a class="dropdown-item" href="#">Something else here</a>
                                </div>
                              </li>
                              --}}
                              <form class="form-inline my-2 my-lg-0">
                                  <button class="header-btn my-2 my-sm-0" type="submit">
                                      Doação
                                  </button>
                              </form>
                            
                            </ul>
                          
                          </div>
                        </nav>
                  </div>
              </div>
          </header>
          <div class="main-content">
            @yield('conteudo')
          </div>        
  </div>
</body>
</html>