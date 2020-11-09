<!DOCTYPE html>
<html lang="en">
<head>
    <title>Principal Proyecto Casa del Migrante</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Course Project">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
    <link href="plugins/fontawesome-free-5.0.1/css/fontawesome-all.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
    <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
    <link rel="stylesheet" type="text/css" href="styles/stylesAdmin/main_styles.css">
    <link rel="stylesheet" type="text/css" href="styles/responsive.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">



</head>
<body>
<div id="app">
    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm" >
        <div class="container" style="background-color: #ffe8a1">
          <h3>Fundación Alivio del Sufrimiento </h3>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto">

                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">
                    <!-- Authentication Links -->
                    @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
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
                                    {{ __('Cerrar Sesión') }}
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
<div class="hero_slider_container">
    <!-- Hero Slide -->
    <div class="hero_slide">
        <div class="hero_slide_background"  style="background-image:url(images/fondo2.jpeg)"></div>
        <div class="hero_slide_container d-flex flex-column align-items-center justify-content-center">
            <div class="hero_slide_content text-center" style="height:400px ">
                <h1 data-animation-in="fadeInUp" data-animation-out="animate-out fadeOut"> Proyecto   Casa Del  Migrante</h1>
            </div>
        </div>
    </div>
</div>

<div class="hero_boxes"  >
    <div class="hero_boxes_inner"  >
        <div class="container" >
            <div class="row" >

                <div class="col-lg-3 hero_box_col"   >
                    <a href="{{route('hola.ho')}}" >
                    <div class="hero_box d-flex flex-row align-items-center justify-content-start" >
                        <img src="images/registro.svg"  class="svg" alt="">
                        <div class="hero_box_content" >
                            <h1 class="hero_box_title" >Ficha de Ingreso</h1>
                            <a href="{{route('hola.ho')}}" class="hero_box_link">Registro</a>
                        </div>
                    </div>
                    </a>
                </div>
                <div class="col-lg-3 hero_box_col">
                    <a href="{{ route('listado.index') }}">
                        <div class="hero_box d-flex flex-row align-items-center justify-content-start">
                            <img src="images/bueno.svg" class="svg" alt="">
                            <div class="hero_box_content">
                                <h2 class="hero_box_title">Listado  de Huespedes</h2>
                                <a href="" class="hero_box_link">ver</a>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-lg-3 hero_box_col">
                    <a href="">
                    <div class="hero_box d-flex flex-row align-items-center justify-content-start">
                        <img src="images/salud.svg" class="svg" alt="">
                        <div class="hero_box_content">
                            <h2 class="hero_box_title">Salud</h2>
                            <a href="{{ route('salud.salu') }}" class="hero_box_link">Ver</a>
                        </div>
                    </div>
                    </a>
                </div>

                <div class="col-lg-3.5 hero_box_col">
                    <a href="{{ route('estadisticas.admin')}}" >
                        <div class="hero_box d-flex flex-row align-items-center justify-content-start">
                            <img src="images/creciente.svg" class="svg" alt="">
                            <div class="hero_box_content">
                                <h2 class="hero_box_title">Estadisticas</h2>
                                <a href="{{ route('estadisticas.admin') }}" class="hero_box_link">Ver</a>
                            </div>
                        </div>
                    </a>
                </div>

            </div>
        </div>
    </div>
</div>







<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/greensock/TweenMax.min.js"></script>
<script src="plugins/greensock/TimelineMax.min.js"></script>
<script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="plugins/greensock/animation.gsap.min.js"></script>
<script src="plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/scrollTo/jquery.scrollTo.min.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="js/custom.js"></script>
</body>
</html>
