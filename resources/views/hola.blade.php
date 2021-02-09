@extends('PlantillaMadre.menu_inicio')
@section('titulo', 'Registro huésped')
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
        <link rel="stylesheet" type="text/css" href="styles/elements_styles.css">
        <link rel="stylesheet" type="text/css" href="styles/elements_responsive.css">

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">


    </head>
    <body>


    <div class="site-blocks-cover overlay " style="background-image: url(images/fo2.jpg);" data-aos="fade"
         id="home-section">
        <div class="hero_slide_background text-center text-dark">
            <br>
            <br>
            <br>
            <br>
            <br>

            <p style="font-size: 50px; color: #7eae25"><span>¡Bienvenido al </span></p>
        </div>
        <div class="hero_slide_background text-center text-warning">
            <p style="font-size: 50px; color: #7eae25"> Registro<span> del</span> Huesped!</p>
        </div>
        <div class="milestones_container">
            <div class="container">
                <div class="row ">
                    <div class="col-lg-3 milestone_col align-content-center">
                        <div class="milestone  text-info text-md-right h-75">
                            <div>
                                <p style="font-size: 25px ; font-family: 'Arial'  ; color: #7eae25" href="{{route('huesped.nuevo')}}" class="milestones_background"> Ingreso los datos</p>
                            </div>
                            <a href="{{route('huesped.nuevo')}}" class="milestones_background w-50 "><img
                                        src=" imagenes/icon6.svg"
                                        alt="https://www.flaticon.com/authors/zlatko-najdenovski"></div>
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

    </div>

    </body>
@endsection
