@extends ('PlantillaMadre.menu_inicio')
@section('titulo', 'Ficha de Ingreso')
@section('contenido')
    <br>
    <br>
    <br>
    <head>
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
    </head>
    <body>
    <a href="{{url('/proyectos/listado')}}" class="btn btn-warning">
        <img src="/imagenes/iconos/restaurar.svg" class="svg" width="25">
    </a>
    <div class="card" >
        <div class="card-header" style="background-color: #759d3d">
            <label class="card-title" style="color: black;">Registro del evento</label>
        </div>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif


        @if(session("exito"))
            <div class="alert alert-info">
                {{session("exito")}}
            </div>
        @endif


            @csrf
            <a class="sr-only sr-only-focusable" href="#content">Skip to main content</a>
            <div class="abs-center">



                <div class="form-row">

                    <div class="col-5"><br>
                        <img src="/imagenes/iconos_formulario/eve.svg" class="svg" width="25" height="35"   >
                        <label for="titulo" style="color: #000000">Titulo</label><br>
                        <input type="text" class="form-control" name="titulo"
                               id="titulo" placeholder="Titulo del evento"><br>
                    </div>
                    <br>
                </div>
                    <br>


                    <div class="col-5">
                        <img src="/imagenes/iconos_formulario/calendario.svg" class="svg" width="50" height="35"   >
                        <label for="fecha" style="color: #000000">Fecha</label><br>
                        <input type="date" class="form-control" name="fecha"
                               id="fecha"><br>

                    </div>

                <div class="col-11">
                    <img src="/imagenes/iconos_formulario/descrip.svg" class="svg" width="50" height="35"  >
                    <label for="descripcion" style="color: black;">Descripción</label>
                    <span class="col-md-5 col-md-offset-10 text-center">
                     <textarea class="form-control" id="descripcion" name="descripcion"
                               placeholder="Descripción del evento"></textarea>
                        </span></div>
                <br>
                <input type="submit" class="btn btn-info" value="Guardar">
            </div>
                <br>
            </div>

        <br>
    </div class="card">
    <script src="/js/jquery-3.2.1.min.js"></script>
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

    </body>

@endsection


