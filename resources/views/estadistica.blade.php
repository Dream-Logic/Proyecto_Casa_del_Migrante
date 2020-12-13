@extends('PlantillaMadre.menu_inicio')
@section('titulo', 'Estadísticas')
@section('contenido')
    <br><br><br>
    <br><br>
    <head>
        <link rel="stylesheet" type="text/css" href="styles/responsive.css">
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

    </head>
    <body>
    <div class="container-fluid ml-2 mr-2">
        <div >
            <div class="row mr-2 ml-4">
                <div class="col ml-5"><br>
                    <span style="color: #0b0b0b; font-size: 25px;">Estadística índice de edades</span>
                    <div style="width:50%;">

                        {!! $edadChart->container() !!}

                        {!! $edadChart->script() !!}
                    </div>
                </div>

                <div class="col"><br>
                    <span style="color: #0b0b0b; font-size: 25px;">Estadística índice de géneros</span>
                    <div style="width:50%;">

                        {!! $generosChart->container() !!}

                        {!! $generosChart->script() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="/js/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="Chart/jquery-1.12.0.min.js"></script>
    <script type="text/javascript" src="Chart/dist/Chart.bundle.min.js"></script>
    </body>
@endsection


