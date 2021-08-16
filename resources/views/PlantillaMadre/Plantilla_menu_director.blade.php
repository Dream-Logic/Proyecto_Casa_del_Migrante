<!doctype html>
<html lang="en">
<head>
    <style>
        .site-navbar {
            background-image: url(/images/fondoOscuro.jpg)
        }

        .col-5 {
            margin-left: 55px;
            margin-right: 30px;

        }

        .col-11 {
            margin-left: 50px;
        }

        label {
            font-family: Arial;
            font-weight: bold;
        }

        .botones {


            font-family: 'Verdana', Geneva, Tahoma, sans-serif;
        }
        .pereza{
            content-align: right;
        }
        .btn-whatsapp {
            display:block;
            width:70px;
            height:70px;
            color:#fff;
            position: fixed;
            right:20px;
            bottom:20px;
            border-radius:50%;
            line-height:80px;
            text-align:center;
            z-index:999;
        }



    </style>
    <title>@yield('titulo')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="/fonts/icomoon/style.css">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/jquery-ui.css">
    <link rel="stylesheet" href="/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="/css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="/fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="/css/aos.css">
    <link rel="stylesheet" href="/css/style.css">
    <meta name="csrf-token" content="{{ csrf_token() }}">

</head>
<body data-spy="scroll" data-target=".site-navbar-target" data-offset="50">


<div class="site-wrap">
    <div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
            <div class="site-mobile-menu-close mt-3">
                <span class="icon-close2 js-menu-toggle"></span>
            </div>
        </div>
        <div class="site-mobile-menu-body"></div>
    </div>
    <header class="site-navbar py-4 js-sticky-header site-navbar-target " role="banner">
        <div class="container">
            <div class="row align-items-center">
                <div class="flex-row justify-content-center align-items-center">
                    <span class="text-md-left"
                          style="color: #e0a800;  font-family: 'Arial Black';font-size: 16px">Casa del Migrante</span>
                </div>
                <div class="col-10 col-md-10 d-none d-xl-block">
                    <nav class="site-navigation position-relative text-right" role="navigation">

                        <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                            <li><a href="{{route('index.index')}}" class="nav-link"><strong style="font-size: 18px">Inicio</strong></a></li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle"  id="navbardrop" data-toggle="dropdown">
                                    <strong style="font-size: 18px">Listados</strong>
                                </a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="{{route('listado.director')}}">Listado de Huésped</a>
                                    <a class="dropdown-item" href="{{ route('listaEmpleado.director') }}">Listado de Personal</a>
                                    <a class="dropdown-item" href="{{ route('lista.egresod') }}">Listado de egresos</a>
                                    <a class="dropdown-item" href="{{ route('saludDire.salu') }}">Listado de salud</a>
                                    <a class="dropdown-item" href="{{ route('listadoEst.director') }}">Listado de Estudiantes</a>
                                    <a class="dropdown-item" href="{{route('ficha.fichaDire')}}">Listado de Ficha Medica</a>

                                </div>
                            </li>
                            <li><a href="{{ route('estadisticas.direc')}}" class="nav-link"><strong style="font-size: 18px">Estadísticas</strong></a></li>
                            <li><a href="{{asset('Evento/admin') }}" class="nav-link"><strong style="font-size: 18px">Calendario</strong></a></li>
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" style="font-size: 18px" class="nav-link dropdown-toggle" href="#" role="button"
                                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Cerrar Sesión') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="col-6 d-inline-block d-xl-none ml-md-0 py-3" style="position: relative; top: 3px;"><a
                        href="#" class="site-menu-toggle js-menu-toggle float-right"><span
                            class="icon-menu h3"></span></a></div>
            </div>
        </div>
    </header>
    <div class="container-fluid">
        @yield('contenido')
    </div>


</div> <!-- .site-wrap -->


<script src="/js/jquery-ui.js"></script>
<script src="/js/popper.min.js"></script>
<script src="/js/bootstrap.min.js"></script>
<script src="/js/owl.carousel.min.js"></script>
<script src="/js/jquery.countdown.min.js"></script>
<script src="/js/jquery.easing.1.3.js"></script>
<script src="/js/aos.js"></script>
<script src="/js/jquery.fancybox.min.js"></script>
<link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
<script src="/js/jquery.sticky.js"></script>
<script src="/js/isotope.pkgd.min.js"></script>
<script src="/js/main.js"></script>

</body>
</html>
