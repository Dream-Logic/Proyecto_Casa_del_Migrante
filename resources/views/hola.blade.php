<!DOCTYPE html>
<html lang="en">
<head>
    <title>Casa del migrante</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Course Project">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
    <link href="plugins/fontawesome-free-5.0.1/css/fontawesome-all.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="styles/elements_styles.css">
    <link rel="stylesheet" type="text/css" href="styles/elements_responsive.css">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">



</head>
<body>
<div id="app">
    <nav class="navbar fixed-top
 navbar-expand-md navbar-light bg-white shadow-sm" >
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
    <div class="milestones_background" style=" background-image:url(imagenes/fondo9.jpg)"></div>
</div>



<br>
<br>
<br>
<br>
<br>
<br>

<div class="hero_slide_content text-center text-dark">
    <h1 data-animation-in="fadeInUp" data-animation-out="animate-out fadeOut"> Bienvenido al <span></span></h1>
</div>
<div class="hero_slide_content text-center text-dark">
    <h1 data-animation-in="fadeInUp" data-animation-out="animate-out fadeOut"> Registro<span> del</span> Huesped</h1>
</div>
<div class="milestones_container">
    <div class="container">
        <div class="row ">
            <div class="col-lg-3 milestone_col align-content-center">
                <div class="milestone icon-font-awesome text-info text-md-right h-75">
                    <div>
                        <h3 href="{{route('ficha.create')}}" class="milestones_background text-dark  ">Datos del Huesped</h3>
                    </div>
                    <a href="{{route('ficha.create')}}" class="milestones_background w-50 "><img src=" imagenes/icon6.svg"  alt="https://www.flaticon.com/authors/zlatko-najdenovski"></div>
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
<script src="plugins/progressbar/progressbar.min.js"></script>
<script src="plugins/scrollTo/jquery.scrollTo.min.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="js/elements_custom.js"></script>



</body>
</html>
