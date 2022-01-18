<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
  
        <title>{{ config('app.name', 'ANEJS') }}</title>
  
        <!-- Scripts -->
      
        <script src="{{ asset('js/jquery.js')}}" defer></script>
        <script src="{{ asset('js/app.js')}}" defer></script>
        <script src="{{ asset('js/sbs-all.js')}}" defer></script>
  
        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

        <link rel="stylesheet" href="{{ asset('css/style.css')}}">
        <link rel="shortcut icon" href="{{ asset('img/IMG-20210818-WA0006.jpg')}}" type="image/x-icon">
  
        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer">


    </head>
    <body >
        <div id="app">
            <!--Page Wrapper content-->
            <div id="wrapper">
                <!--Inicio do sidebar-->
                <ul class="navbar-nav bg-success sidebar sidebar-dark accordion" id="accordionSidebar">
                    <!--Incicio do sidebar Brand-->
                    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/home">
                        <div class="sidebar-brand-icon">
                            <i class="fas fa-laugh-wink"></i>
                        </div>
                        <div class="sidebar-brand-text mx-3">ANEJS ADMIN </div>
                    </a>
                    <!--Section devider-->
                    <hr class="sidebar-divider my-0" style="width: 100%">
                    <!--Navitem Dashboard-->
                    <li class="nav-item active">
                        <a class="nav-link" href="/admin">
                            <i class="fas fa-fw fa-tachometer-alt"></i>
                            <span>Dashboard</span>
                        </a>
                        <hr class="sidebar-divider " style="width: 100%">
                    </li>
                    <!--Cabecalho das seccoes-->
                    <div class="sidebar-heading">
                        Membros
                    </div>
                    <!--Membros-->
                    <li class="nav-item">
                        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            <i class="fas fa- fw fa-cog"></i>
                            <span class="h4">Membros</span>
                        </a>
                        
                        <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionSidebar">
                            <div class="bg-success  py-2 collapse-inner">
                                <a class="collapse-item" href="/admin/membros_ccargo">Membros com Cargo</a>
                                <a class="collapse-item" href="#">Membros sem Cargo</a>
                                <a class="collapse-item" href="/admin/candmembros">Candidados a Membros</a>
                            </div>

                        </div>
                        <hr class="sidebar-divider " style="width: 100%">
                    </li>
                    <!--Pedidos de Ajuda-->
                    <li class="nav-item">
                        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                            <i class="fas fa- fw fa-cog"></i>
                            <span class="h4">Pedidos de Ajuda</span>
                        </a>
                        
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                            <div class="bg-success  py-2 collapse-inner">
                                <a class="collapse-item"  href="/admin/ajudapendente">Pedidos Pendentes</a>
                                <a class="collapse-item" href="">Pedidos Resolvidos</a>
                    
                            </div>

                        </div>
                        <hr class="sidebar-divider " style="width: 100%">
                    </li>
                    <!--Doacoes-->
                    <li class="nav-item">
                        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                            <i class="fas fa- fw fa-cog"></i>
                            <span class="h4">Doações</span>
                        </a>
                        
                        <div id="collapseThree" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                            <div class="bg-success  py-2 collapse-inner">
                                <a class="collapse-item"  href="">Doações Pendentes</a>
                                <a class="collapse-item" href="">Doações Resolvidas</a>
                    
                            </div>

                        </div>
                        <hr class="sidebar-divider " style="width: 100%">
                    </li>
                    <!--Actividades-->
                    <li class="nav-item">
                        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
                            <i class="fas fa- fw fa-cog"></i>
                            <span class="h4">Actividades</span>
                        </a>
                        
                        <div id="collapseFour" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                            <div class="bg-success  py-2 collapse-inner">
                                <a class="collapse-item"  href="">Gerir Actividades</a>
                                <a class="collapse-item" href="">Registar novas Actividades</a>
                    
                            </div>

                        </div>
                    </li>
                    <hr class="sidebar-divider d-none d-md-block" style="width: 100%">
                    <!--Sidebar Toggler-->
                    <div class="text-center d-none d-md-inline">
                        <button class="rounded-circle border-0" id="sidebarToggle">

                        </button>
                    </div>

                </ul>
                <!--Fim do sidebar-->

                <!--Content Wrapper start-->
                <div id="content-wrapper" class="d-flex flex-column">
                    <!--Main content-->
                    <div id="content">
                        <!--Topnavbar-->
                        <nav class="navbar  navbar-expand navbar-light bg-white topbar mb-4 static-top  shadow">
                            <!--SidebarToggler-->
                            <button id="sidebarToggleTop"  class="btn btn-link d-md-none  rounded-circle mr-3">
                                <i class="fa fa-bars"></i>
                            </button>
                        <ul class="navbar-nav ml-auto">
                            <div class="topbar-divider d-none d-sm-block"></div>
                            <li class="nav-item dropdown no-arrow ">
                                <a href="" class="nav-link dropdown-toggle" id="userDropdown" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                    <span class="mr-2 d-none d-lg-inline text-gray-600 small">Nome Usuario</span>
                                <i class="fas fa-user"></i>
                                </a>
                            
                                <div class="dropdown-menu dropdown-menu-right shadow animated-grow-in" aria-labelledby="userDropdown" >
                                    <a href="" class="dropdown-item">
                                        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400">Logout</i>
                                    </a>
                                </div>
                            </li>
                        </ul>
                        </nav>
                        <!--The topbar  ends Here-->
                        <!--Page content-->
                        <div class="container-fluid">
                            @yield('content')

                        </div>
                        
                    </div>
                </div>
                <!--Content  Wrapper ends-->
            </div>
        </div>
    </body>

</html>