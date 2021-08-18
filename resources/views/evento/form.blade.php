<section class="container">

    <head>
        <!-- CSRF Token -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximun-scale=1.0,
        minimun-scale=1.0">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
              integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay"
              crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Exo&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
              integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
              crossorigin="anonymous">
    </head>


    <body>
    <div class="" style="-moz-box-shadow: 0px 5px 3px 3px rgb(194,194,194);
                    box-shadow: 0px 5px 3px 3px rgba(194,194,194,1);">
        <div class="card-header" style="background-color: #4cd213">
            <label class="card-title" style="color: black; font-weight: bold">Registrar el evento</label>
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






<br>

            <form action="{{ asset('/Evento/create') }}" method="post">
                @csrf


                <div class="col-md-12 justify-content-center">
                        <img src="/imagenes/iconos_formulario/eve.svg" style="margin-left: 15px" class="svg"
                             width="25" height="35">
                        <label for="titulo" style="color: #000000">Título</label>
                        <input type="text" class="form-control"  name="titulo"
                               id="titulo" placeholder="Título del evento"value="{{old('titulo')}}"><br>
                </div>
                <br>

                <div class="col-md-12 justify-content-center">
                        <img src="/imagenes/iconos_formulario/calendario.svg"  style="margin-left: 15px" class="svg"
                             width="25" height="35">
                        <label for="fecha" style="color: #000000">Fecha</label><br>
                        <input type="date" class="form-control" name="fecha"value="{{old('fecha')}}"
                               id="fecha"><br>
                    </div><br>


                <div class="col-md-12 justify-content-center">
                    <img src="/imagenes/iconos_formulario/descrip.svg"  style="margin-left: 15px" class="svg"
                         width="25" height="35">
                    <label for="descripcion" style="color: black;">Descripción</label>
                    <span class="text-center col-md-10 justify-content-center">
                     <textarea class="form-control"  id="descripcion" name="descripcion"
                               placeholder="Descripción del evento" rows="2">{{old('descripcion')}}</textarea><br>
                        </span></div>
                <br>
                <div class="trans text-center">
                <input type="submit" class="btn btn-success" value="Guardar">
                    <a class=" btn btn-danger" title="Regresar al Login" href="{{ asset('/Evento/index') }}">Cancelar</a>

                </div>
                <br>
                <br>
            </form>


        </div> <!-- /container -->

        <!-- Footer -->
        <footer class="page-footer font-small blue pt-4">
            <!-- Copyright -->
            <div class="footer-copyright text-center py-3">


            </div>
            <!-- Copyright -->

        </footer>
        <!-- Footer -->

    </body>

</section>
