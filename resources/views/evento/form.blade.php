
    <title></title>
    <meta content="">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Exo&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
        body{
            font-family: 'Exo', sans-serif;
        }
        .header-col{
            background: #E3E9E5;
            color:#536170;
            text-align: center;
            font-size: 20px;
            font-weight: bold;
        }
        .header-calendar{
            background: #EE192D;color:white;
        }
        .box-day{
            border:1px solid #E3E9E5;
            height:150px;
        }
        .box-dayoff{
            border:1px solid #E3E9E5;
            height:150px;
            background-color: #ccd1ce;
        }
    </style>

</head>
<body>

<div class="container">
    <div style="height:50px"></div>
    <p class="lead">
        <a href="{{ asset('/Evento/index') }}" class="btn btn-warning">
            <img src="/imagenes/iconos/restaurar.svg" class="svg" width="25">
        </a>
            <div class="card-header" style="background-color: #ccde2e">
                <label class="card-title" style="color: black;">Registro del evento</label>
            </div>
    <hr>

    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <button type="button" class="close" data-dismiss="alert">×</button>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    @if ($message = Session::get('success'))
        <div class="alert alert-success alert-block">
            <button type="button" class="close" data-dismiss="alert">×</button>
            <strong>{{ $message }}</strong>
        </div>
    @endif


    <div class="col-md-6">
        <form action="{{ asset('/Evento/create') }}" method="post">
            @csrf
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
            <input type="submit" class="btn btn-success" value="Guardar">
            <br>
        </form>
    </div>


    <!-- inicio de semana -->


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
</html>
