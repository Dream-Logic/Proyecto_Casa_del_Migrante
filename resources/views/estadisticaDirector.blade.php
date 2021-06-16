@extends('PlantillaMadre.Plantilla_menu_director')
@section('titulo', 'Estadísticas Administrador')
@section('contenido')
    <br><br><br>
    <br><br><br>
    <section class="container">
        <head>
            <link rel="stylesheet" type="text/css" href="styles/responsive.css">
            <!-- CSRF Token -->
            <meta name="csrf-token" content="{{ csrf_token() }}">

        </head>
        <body>
        <div>
            <div>
                <div class="row">
                    <div class="col"><br>
                        <p style="color: #0b0b0b; font-size: 25px; text-align: center">Estadística índice de edades</p>
                        <div style="width:50%; margin: auto;">

                            {!! $edadChart->container() !!}

                            {!! $edadChart->script() !!}
                        </div>
                        <div>
                        </div>
                    </div>
                    <div class="col "><br>
                        <p style="color: #0b0b0b; font-size: 25px; text-align: center">Estadística índice de géneros</p>
                        <div style="width:50%; margin: auto">

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
        <script type="text/javascript" src="Chart/jquery-1.12.0.min.js"></script>
        <script type="text/javascript" src="Chart/dist/Chart.bundle.min.js"></script>
        </body>
    </section>
@endsection



