@extends('PlantillaMadre.menuEstadisticas')
@section('titulo', 'Estadística índice de edades')
@section('contenido')
    <br><br><br>
    <br><br>
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
    <body>
    <div class="container-fluid ml-2 mr-2 ">
        <div class="">
            <div class="row">
                <div class="col">

                    <span style="color: #0b0b0b; font-size: 25px;">Estadística de índice de edades</span>
                    <div style="width:50%;">

                        {!! $edadChart->container() !!}

                        {!! $edadChart->script() !!}
                    </div>
                </div>
                <div class="col">

                    <span style="color: #0b0b0b; font-size: 25px;">Estadística de índice de géneros</span>
                    <div style="width:50%;">

                        {!! $generosChart->container() !!}

                        {!! $generosChart->script() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="/js/jquery-3.2.1.min.js"></script>
    <script src="/styles/bootstrap4/popper.js"></script>
    <script src="/styles/bootstrap4/bootstrap.min.js"></script>
    <script src="/js/custom.js"></script>
    <script type="text/javascript" src="Chart/jquery-1.12.0.min.js"></script>
    <script type="text/javascript" src="Chart/dist/Chart.bundle.min.js"></script>

    </body>
@endsection


