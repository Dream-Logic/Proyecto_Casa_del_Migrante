@extends('PlantillaMadre.Plantilla_menu_director')
@section('titulo', 'Estadísticas Director')
@section('contenido')
    <br><br><br>
    <br>
    <body>
    <div class="container-fluid ml-2 mr-2">
        <div >
            <div class="row mr-2 ml-4">
                <div class="col ml-5"><br><br>
                    <span style="color: #0b0b0b; font-size: 25px;">Estadística índice de edades</span>
                    <div style="width:50%;">

                        {!! $edadChart->container() !!}

                        {!! $edadChart->script() !!}
                    </div>
                </div>

                <div class="col"><br><br>
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
    <script src="/styles/bootstrap4/popper.js"></script>
    <script src="/styles/bootstrap4/bootstrap.min.js"></script>
    <script type="text/javascript" src="Chart/jquery-1.12.0.min.js"></script>
    <script type="text/javascript" src="Chart/dist/Chart.bundle.min.js"></script>
    </body>
@endsection



