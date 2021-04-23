@extends ('PlantillaMadre.menu_inicio')
@section('titulo', 'Ficha de Escolaridad')
@section('contenido')
    <br>
    <br>
    <br>
    <head>
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
    </head>
    <body>
    <div class="card" >
        <div class="card-header" style="background-color: #4dc0b5">
            <label class="card-title" style="color: black;">Escolaridad</label>
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
        <form method="post" action="{{route('estudiante.store')}}" enctype="multipart/form-data">
            @csrf
            <a class="sr-only sr-only-focusable" href="#content">Skip to main content</a>
            <div class="abs-center">
                <center>
                    <div class="col-5" ><br>
                        <div class="row" >

                        </div>

                    </div>
                </center>


                <div class="form-row">

                    <div class="col-5"><br>
                        <img src="/imagenes/iconos_formulario/usuario.svg" class="svg" width="25" height="35"   >
                        <label for="nombres_alumno" style="color: #000000">Nombres</label><br>
                        <input type="text" class="form-control" name="nombres_alumno"
                               id="nombres_alumno" placeholder="Nombres"><br>
                    </div>
                    <br>

                    <div class="col-5"><br>
                        <img src="/imagenes/iconos_formulario/usuario.svg" class="svg" width="25" height="35"  >
                        <label for="apellidos_alumno" style="color: #000000">Apellidos</label><br>
                        <input type="text" class="form-control" name="apellidos_alumno"
                               id="apellidos_alumno" placeholder="Apellidos">
                    </div>
                    <br>
                    <br>

                    <div class="col-5"><br>
                        <img src="/imagenes/iconos_formulario/Grado.svg" class="svg" width="25" height="35"  >
                        <label for="grado" style="color: #000000">Grado</label><br>
                        <input type="text" class="form-control" name="grado"
                               id="grado" placeholder="Grado">
                    </div>
                    <br>
                    <br>

                    <div class="col-5"><br>
                        <img src="/imagenes/iconos_formulario/Ca1.svg" class="svg" width="25" height="35"  >
                        <label for="carrera" style="color: #000000">Carrera</label><br>
                        <input type="text" class="form-control" name="carrera"
                               id="carrera" placeholder="Carrera">
                    </div>
                    <br>


                    <div class="col-5">
                        <img src="/imagenes/iconos_formulario/Escritura.svg" class="svg" width="50" height="35"  >
                        <label for="escritura" style="color: #000000">Nivel de escritura</label><br>
                        <select class="form-control" name="escritura">
                            <option value="ninguno">Ninguno</option>
                            <option value="bajo">Bajo</option>
                            <option value="medio">Medio</option>
                            <option value="alto">Alto</option>
                        </select><br>
                    </div>
                    <br>


                    <div class="col-5">
                        <img src="/imagenes/iconos_formulario/Reed.svg" class="svg" width="50" height="35"  >
                        <label for="lectura" style="color: #000000">Nivel de Lectura</label><br>
                        <select class="form-control" name="lectura">
                            <option value="ninguno">Ninguno</option>
                            <option value="bajo">Bajo</option>
                            <option value="medio">Medio</option>
                            <option value="alto">Alto</option>
                        </select><br>
                    </div>


                    <div class="col-5">
                        <img src="/imagenes/iconos_formulario/Arte.svg" class="svg" width="50" height="35"  >
                        <label for="habilidades" style="color: #000000">Habilidades Artisticas</label><br>
                        <select class="form-control" name="habilidades">
                            <option value="ninguno">Ninguno</option>
                            <option value="arte">Arte</option>
                            <option value="canto">Canto</option>
                            <option value="baile">Baile</option>
                            <option value="dibujo">Dibujo</option>
                            <option value="ejecucion">Ejecución de instrumento</option>
                        </select><br>
                    </div>


                    <div class="col-5">
                        <img src="/imagenes/iconos_formulario/Musica.svg" class="svg" width="50" height="35"  >
                        <label for="instrumento" style="color: #000000">Ejecuta algun instrumento</label><br>
                        <select class="form-control" name="instrumento">
                            <option value="ninguno">Ninguno</option>
                            <option value="guitarra">Guitarra</option>
                            <option value="violin">Violin</option>
                            <option value="ukele">Ukelele</option>
                            <option value="saxofon">Saxofon</option>
                            <option value="teclado">Teclado</option>
                            <option value="otros">Otros</option>

                        </select>
                    </div>

                    <br>

                </div>
                <div class="botones">
                    <button type="submit" class="btn btn-sm btn-success"><i class="fas fa-save"></i> Guardar</button>
                </div>
                <br>
            </div>

        <br>
    </div class="card">
    <script src="/js/jquery-3.2.1.min.js"></script>
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

    </body>

@endsection
