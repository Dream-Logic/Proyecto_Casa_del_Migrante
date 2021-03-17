@extends('PlantillaMadre.Plantilla_menu_director')
@section('titulo','Principal Director')
@section('contenido')
<!-- <!DOCTYPE html>
<html lang="en"> -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Course Project">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
    <link href="plugins/fontawesome-free-5.0.1/css/fontawesome-all.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
    <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
    <link rel="stylesheet" type="text/css" href="styles/stylesDirector/main_styles.css">
    <link rel="stylesheet" type="text/css" href="styles/responsive.css">
</head>
<body style="background-image: url(images/fondoOscuro.jpg)">
<div class="hero_slider_container">
    <!-- Hero Slide -->
    <div class="hero_slider_container">
        <!-- Hero Slide -->
        <div class="hero_slide">
            <div class="hero_slide_background" ></div>
            <div class="hero_slide_container d-flex flex-column align-items-center justify-content-center">
                <div class="hero_slide_content text-center" style="height:540px ">
                    <n1 style="color: white; font-size: 20px">Bienvenido Director a:</n1><p style="font-size: 20px; color: #f8f9fb"> Proyecto   Casa Del  Migrante</p>
                </div>
            </div>
        </div>
    </div>
    <div class="hero_boxes">
        <div class="hero_boxes_inner">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 hero_box_col col-lg-auto" >
                        <a href="{{route('listado.director')}}" >
                            <div class="hero_box d-flex  align-items-center justify-content-start ">
                                <img src="images/Listado.svg"  class="svg" alt="">
                                <div class="hero_box_content ">
                                    <h6 class="hero_box_title">Listado de Huespedes</h6>
                                    <a href="{{route('listado.director')}}" class="hero_box_link">Ver</a>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-3.5hero_box_col">
                        <a href="{{route('estadisticas.direc')}}" >
                            <div class="hero_box d-flex flex-row align-items-center justify-content-start col offset-4">
                                <img src="images/Estadistica.svg" class="svg" alt="">
                                <div class="hero_box_content">
                                    <h6 class="hero_box_title">Estadisticas</h6>
                                    <a href="{{route('estadisticas.direc')}}" class="hero_box_link">Ver</a>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-3 hero_box_col col-lg-auto " >
                        <a href="{{route('saludDire.salu')}}">
                            <div class="mx-auto">
                                <div class="hero_box d-flex flex-row align-items-center justify-content-start  col offset-9 ">
                                    <img src="images/Salud.svg" class="svg" alt="">
                                    <div class="hero_box_content">
                                        <h6 class="hero_box_title">Salud</h6>
                                        <a href="{{route('saludDire.salu')}}" class="hero_box_link">Ver</a>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="hero_boxes_inner">
                    <div class="container">
                        <div class="row">
                    <div class="col-lg-3 hero_box_col">
                        <br>
                        <a href="{{route('listaEmpleado.director')}}" >
                            <div class="hero_box d-flex flex-row align-items-center justify-content-start ">
                                <img src="images/personal.svg" class="svg"  alt="">
                                <div class="hero_box_content">
                                    <h6 class="hero_box_title">Listado de Personal</h6>
                                    <a href="{{route('listaEmpleado.director')}}" class="hero_box_link">Ver</a>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-3 hero_box_col">
                        <br>
                        <a href="{{ route('actividades.admin')}}" >
                            <div class="hero_box d-flex flex-row align-items-center justify-content-start col offset-4">
                                <img src="images/actividades.svg" class="svg" alt="">
                                <div class="hero_box_content">
                                    <h6 class="hero_box_title">Actividades</h6>
                                    <a href="{{ route('actividades.admin')}}" class="hero_box_link">Ver</a>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 hero_box_col">
                        <br>
                        <a href="{{ asset('/Evento/index/') }}">
                            <div class="hero_box d-flex flex-row align-items-center justify-content-start col offset-8">
                                <img src="images/calendario.svg" class="svg" alt="">
                                <div class="hero_box_content">
                                    <h6 class="hero_box_title">Calendario</h6>
                                    <a href="{{ asset('/Evento/index/') }}" class="hero_box_link">Ver</a>
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
    <script src="plugins/scrollTo/jquery.scrollTo.min.js"></script>
    <script src="plugins/easing/easing.js"></script>
    <script src="js/custom.js"></script>

</div>
</body>
@endsection

