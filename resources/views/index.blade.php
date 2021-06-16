@extends('PlantillaMadre.menu_inicio')
@section('titulo', 'Página Principal')
@section('contenido')

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
    <link href="plugins/fontawesome-free-5.0.1/css/fontawesome-all.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="styles/stylesAdmin/main_styles.css">
    <link rel="stylesheet" type="text/css" href="styles/responsive.css">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">



</head>
<body style="background-image: url(images/fondoOscuro.jpg) ">

<div class="hero_slider_container">
    <!-- Hero Slide -->
    <div class="hero_slide">
        <div >
        <div class="hero_slide_background"></div>
        <div class="hero_slide_container d-flex flex-column align-items-center justify-content-center">
            <div class="hero_slide_content text-center"  >
                <h6 style="color: white; font-size: 25px;height: 500px">Bienvenido Director(a) :</h6>
            </div>
        </div>
    </div>
    </div>
</div>


<div class="hero_boxes" >
    <div class="hero_boxes_inner"  >
        <div>
            <div class="row justify-content-center" >

                <div class="col-lg-3 hero_box_col ">
                    <br>
                    <a href="{{route('huesped.nuevo')}}" >
                    <div class="hero_box d-flex flex-row align-items-center justify-content-start" >
                        <img src="images/registro.svg"  class="svg" alt="">
                        <div class="hero_box_content" >
                            <a style="font-size:15px " href="{{route('huesped.nuevo')}}" class="hero_box_link">Ficha de Ingreso</a>
                        </div>
                    </div>
                    </a>
                </div>
                <div class="col-lg-3 hero_box_col">
                    <br>
                    <a href="{{ route('listado.index') }}">
                        <div class="hero_box d-flex flex-row align-items-center justify-content-start">
                            <img src="images/familia.svg" class="svg" alt="">
                            <div class="hero_box_content">

                                <a style="font-size:15px " href="{{ route('listado.index') }}" class="hero_box_link">Listado Huesped</a>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-lg-3 hero_box_col">
                    <br>
                    <a href="{{ route('salud.salu')}}" >
                    <div class="hero_box d-flex flex-row align-items-center justify-content-start">
                        <img src="images/salud.svg" class="svg" alt="">
                        <div class="hero_box_content">

                            <a style="font-size:15px " href="{{ route('salud.salu') }}" class="hero_box_link">Salud</a>
                        </div>
                    </div>
                    </a>
                </div>
                <div class="col-lg-3 hero_box_col">
                    <br>
                    <a href="{{ route('estadisticas.admin')}}" >
                        <div class="hero_box d-flex flex-row align-items-center justify-content-start">

                            <img src="images/creciente.svg" class="svg" alt="">
                            <div class="hero_box_content">

                                <a style="font-size:15px " href="{{ route('estadisticas.admin') }}" class="hero_box_link">Estadísticas</a>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 hero_box_col">
                    <br>
                    <a href="{{ route('personal.personal') }}" >
                        <div class="hero_box d-flex flex-row align-items-center justify-content-start">
                            <img src="images/personal.svg" class="svg" alt="">
                            <div class="hero_box_content">

                                <a  style="font-size:15px  "href="{{ route('personal.personal') }}" class="hero_box_link">Ficha Personal</a>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 hero_box_col">
                    <br>
                    <a href="{{route('listadoEmpleado.index')}}" >
                        <div class="hero_box d-flex flex-row align-items-center justify-content-start">
                            <img src="images/personal.svg" class="svg" alt="">
                            <div class="hero_box_content">

                                <a  style="font-size:15px " href="{{route('listadoEmpleado.index')}}" class="hero_box_link">Listado Personal</a>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-lg-3 hero_box_col">
                    <br>
                    <a href="{{ route('actividades.admin')}}" >
                        <div class="hero_box d-flex flex-row align-items-center justify-content-start">
                            <img src="images/actividades.svg" class="svg" alt="">
                            <div class="hero_box_content">

                                <a  style="font-size:15px "href="{{ route('actividades.admin')}}" class="hero_box_link">Actividades</a>
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

                                <a  style="font-size:15px "href="{{ asset('/Evento/index/') }}" class="hero_box_link">Calendario</a>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 hero_box_col">
                    <br>
                    <a href="{{ asset('/fichaMedica') }}">
                        <div class="hero_box d-flex flex-row align-items-center justify-content-start">
                            <img src="images/informe-medico.svg" class="svg" alt="">
                            <div class="hero_box_content">

                                <a  style="font-size:15px "href="{{ asset('/fichaMedica') }}" class="hero_box_link">Ficha Médica</a>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 hero_box_col">
                    <br>
                    <a href="{{ asset('/egresos') }}">
                        <div class="hero_box d-flex flex-row align-items-center justify-content-start">
                            <img src="images/egresados.svg" class="svg " alt="">
                            <div class="hero_box_content">
                                <a  style="font-size:15px "href="{{ asset('/egresos') }}" class="hero_box_link">Lista de Egresados</a>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 hero_box_col ">
                    <br>
                    <a href="{{('/estudiante/create_estudiante')}}">
                        <div class="hero_box d-flex flex-row align-items-center justify-content-start">
                            <img src="images/graduacion.svg" class="svg" alt="">
                            <div class="hero_box_content">
                                <a  style="font-size:15px " href="{{('/estudiante/create_estudiante') }}" class="hero_box_link">Escolaridad</a>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 hero_box_col">
                    <br>
                    <a href="{{ route('listado.descarga')}}">
                        <div class="hero_box d-flex flex-row align-items-center justify-content-start">
                            <img src="images/carpeta.svg" class="svg" alt="">
                            <div class="hero_box_content">

                                <a   style="font-size:15px "href="{{ route('listado.descarga')}}" class="hero_box_link">Zona de Descarga</a>
                            </div>
                            <br>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<br>
<br>








<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="plugins/scrollTo/jquery.scrollTo.min.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="js/custom.js"></script>
</body>
@endsection
