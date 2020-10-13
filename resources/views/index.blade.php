<!DOCTYPE html>
<html lang="en">
<head>
    <title>Course</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Course Project">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
    <link href="plugins/fontawesome-free-5.0.1/css/fontawesome-all.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
    <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
    <link rel="stylesheet" type="text/css" href="styles/main_styles.css">
    <link rel="stylesheet" type="text/css" href="styles/responsive.css">

</head>
<body>
<div class="hero_slider_container">
    <!-- Hero Slide -->
    <div class="hero_slide">
        <div class="hero_slide_background" style="background-image:url(images/niño2.jpg)"></div>
        <div class="hero_slide_container d-flex flex-column align-items-center justify-content-center">
            <div class="hero_slide_content text-center">
                <h1 data-animation-in="fadeInUp" data-animation-out="animate-out fadeOut"> Proyecto  <span> Casa Del</span> Migrante</h1>
            </div>
        </div>
    </div>
</div>

<div class="hero_boxes">
    <div class="hero_boxes_inner">
        <div class="container">
            <div class="row">

                <div class="col-lg-3 hero_box_col" >
                    <a href="{{route('hola.ho')}}" >
                    <div class="hero_box d-flex flex-row align-items-center justify-content-start">
                        <img src="images/registro.svg"  class="svg" alt="">
                        <div class="hero_box_content">
                            <h1 class="hero_box_title">Ficha de Ingreso</h1>
                            <a href="{{route('hola.ho')}}" class="hero_box_link">Registro</a>
                        </div>
                    </div>
                    </a>
                </div>

                <div class="col-lg-3.5 hero_box_col">
                    <a href="{{route('construccion.crear')}}" >
                    <div class="hero_box d-flex flex-row align-items-center justify-content-start">
                        <img src="images/creciente.svg" class="svg" alt="">
                        <div class="hero_box_content">
                            <h2 class="hero_box_title">Estadisticas</h2>
                            <a href="{{route('construccion.crear')}}" class="hero_box_link">Ver</a>
                        </div>
                    </div>
                    </a>
            </div>

                <div class="col-lg-3 hero_box_col">
                    <a href="{{route('construccion.crear')}}">
                    <div class="hero_box d-flex flex-row align-items-center justify-content-start">
                        <img src="images/salud.svg" class="svg" alt="">
                        <div class="hero_box_content">
                            <h2 class="hero_box_title">Salud</h2>
                            <a href="{{route('construccion.crear')}}" class="hero_box_link">Ver</a>
                        </div>
                    </div>
                    </a>
                </div>

                <div class="col-lg-3 hero_box_col">
                    <a href="{{route('construccion.crear')}}">
                    <div class="hero_box d-flex flex-row align-items-center justify-content-start">
                        <img src="images/bueno.svg" class="svg" alt="">
                        <div class="hero_box_content">
                            <h2 class="hero_box_title">Listado  de Huespedes</h2>
                            <a href="{{route('construccion.crear')}}" class="hero_box_link">ver</a>
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
