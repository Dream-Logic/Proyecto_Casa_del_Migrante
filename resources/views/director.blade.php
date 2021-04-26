@extends('PlantillaMadre.Plantilla_menu_director')
@section('titulo','Principal Administrador')
@section('contenido')
<!-- <!DOCTYPE html>
<html lang="en"> -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
    <link href="plugins/fontawesome-free-5.0.1/css/fontawesome-all.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="styles/stylesDirector/main_styles.css">
    <link rel="stylesheet" type="text/css" href="styles/responsive.css">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">



</head>
<body style="background-image: url(images/fondoOscuro.jpg)">

<div class="site-blocks overlay" data-aos="fade" >
    <div class="hero_slider_container">
        <!-- Hero Slide -->
        <div class="hero_slide">
            <div >
                <div class="hero_slide_background"></div>
                <div class="hero_slide_container d-flex flex-column align-items-center justify-content-center">
                    <div class="hero_slide_content text-center" style="height:560px ">
                        <h6 style="color: white; font-size: 15px;">Bienvenido Administrador(a) :</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="hero_boxes"  >
    <div class="hero_boxes_inner"  >
        <div>
            <div class="row" >
                <div class="col-lg-3 hero_box_col">
                    <a href="{{route('listado.director')}}" >
                        <div class="hero_box d-flex flex-row align-items-center justify-content-start" >
                            <img src="images/Listado.svg"  class="svg" alt="">
                            <div class="hero_box_content" >
                                <h6 class="hero_box_title">Listado de Husped</h6>
                                <a href="{{route('listado.director')}}" class="hero_box_link">ver</a>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 hero_box_col">
                    <a href="{{ route('estadisticas.direc')}}" >
                        <div class="hero_box d-flex flex-row align-items-center justify-content-start">
                            <img src="images/Estadistica.svg" class="svg" alt="">
                            <div class="hero_box_content">
                                <h6 class="hero_box_title">Estadisticas</h6>
                                <a href="{{ route('estadisticas.direc') }}" class="hero_box_link">Ver</a>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 hero_box_col">
                    <a href="{{ route('saludDire.salu') }}">
                        <div class="hero_box d-flex flex-row align-items-center justify-content-start">
                            <img src="images/Salud.svg" class="svg" alt="">
                            <div class="hero_box_content">
                                <h6 class="hero_box_title">Salud</h6>
                                <a href="{{ route('saludDire.salu') }}" class="hero_box_link">ver</a>
                            </div>
                        </div>
                    </a>
                </div>



                <div class="col-lg-3 hero_box_col">
                    <a href="{{ route('listaEmpleado.director')}}" >
                        <div class="hero_box d-flex flex-row align-items-center justify-content-start">
                            <img src="images/personal.svg" class="svg"  alt="">
                            <div class="hero_box_content">
                                <h6 class="hero_box_title">Listado del Personal</h6>
                                <a href="{{ route('listaEmpleado.director') }}" class="hero_box_link">Ver</a>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 hero_box_col">
                    <br>
                    <a href="{{ asset('/Evento/index/') }}">
                        <div class="hero_box d-flex flex-row align-items-center justify-content-start">
                            <img src="images/calendario.svg" class="svg" alt="">
                            <div class="hero_box_content">
                                <h6 class="hero_box_title">Calendario</h6>
                                <a href="{{asset('/Evento/index/') }}" class="hero_box_link">Ver</a>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 hero_box_col">
                    <br>
                    <a href="{{ asset('/egresos') }}">
                        <div class="hero_box d-flex flex-row align-items-center justify-content-start">
                            <img src="images/egresados.svg" class="svg" alt="">
                            <div class="hero_box_content">
                                <h6 class="hero_box_title">Lista de Egresados</h6>
                                <a href="{{ asset('/egresos') }}" class="hero_box_link">Ver</a>
                            </div>
                        </div>
                    </a>
                </div>


                <div class="col-lg-3 hero_box_col">
                    <br>
                    <a href="">
                        <div class="hero_box d-flex flex-row align-items-center justify-content-start">
                            <img src="images/graduacion.svg" class="svg" alt="">
                            <div class="hero_box_content">
                                <h6 class="hero_box_title"> Listado de Escolaridad</h6>
                                <a href="{{ route('listadoEst.director') }}" class="hero_box_link">ver</a>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 hero_box_col">
                    <br>
                    <a href="{{ asset('/ficha') }}">
                        <div class="hero_box d-flex flex-row align-items-center justify-content-start">
                            <img src="images/informe-medico.svg" class="svg" alt="">
                            <div class="hero_box_content">
                                <h6 class="hero_box_title"> Listado de Ficha Médica</h6>
                                <a href="" class="hero_box_link">Ver</a>
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


        </body>
@endsection

