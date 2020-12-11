<!doctype html>
<html lang="en">
<head>
    <style>
        .site-navbar {
            background-color: rgba(0, 0, 0, 0.2)
        }


        .col-5 {
            margin-left: 55px;
            margin-right: 30px;

        }

        .col-11 {
            margin-left: 50px;
        }

        label {
            font: xx-large;
            font-family: Arial;
            font-weight: bold;
        }

        .botones {

            padding-bottom: 30px;
            padding-left: 85%;
            font-family: 'Verdana', Geneva, Tahoma, sans-serif;
        }


    </style>
    <title>Casa del Migrante</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="/fonts/icomoon/style.css">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/jquery-ui.css">
    <link rel="stylesheet" href="/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="/css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="/fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="/css/aos.css">
    <link rel="stylesheet" href="/css/style.css">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">

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
                          style="color: #ffffff; font-family: 'Arial Black'">Casa del Migrante</span>
                </div>
                <div class="col-12 col-md-10 d-none d-xl-block">
                    <nav class="site-navigation position-relative text-right" role="navigation">

                        <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                            <li><a href="{{route('index.index')}}" class="nav-link"><strong>Inicio</strong></a></li>
                            <li><a href="{{route('hola.ho')}}" class="nav-link"><strong>Ficha de Ingreso</strong></a>
                            </li>
                            <li><a href="{{ route('listado.index') }}" class="nav-link"><strong>Listado de
                                        Huspedes</strong></a></li>
                            <li><a href="{{ route('estadisticas.admin')}}" class="nav-link">Estadísticas</a></li>
                            <li><a href="{{ route('salud.salu') }}" class="nav-link">Salud</a></li>

                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
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
<script src="/js/jquery.sticky.js"></script>
<script src="/js/isotope.pkgd.min.js"></script>


<script src="/js/main.js"></script>

</body>
</html>
