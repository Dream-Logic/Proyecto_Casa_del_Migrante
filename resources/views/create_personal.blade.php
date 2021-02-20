
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
    <div class="card" >
        <div class="card-header" style="background-color: #4dc0b5">
            <label class="card-title" style="color: black;">Datos del Personal</label>
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

        <form method="post" action="{{route('huesped.store')}}">

            @csrf
            <a class="sr-only sr-only-focusable" href="#content">Skip to main content</a>
            <div class="abs-center">
                <center>
                    <div class="col-5" ><br>
                        <div class="row" >
                            <div class="form-group {{ $errors->has('imagen') ? ' has-error' : '' }}"style="width: 70%">
                                <h6 style="text-align: start">Imagen  (Opcional)</h6>
                                <img width="200px"  id="previewImagen" style="max-height:250px"
                                     src="/imagenes/iconos_formulario/anadir-imagen.svg"
                                     @if($errors->has("imagen"))  src="/imagenes/iconos_formulario/anadir-imagen.svg"
                                     @endif onclick="seleccionarImagen(event)"/>

                                <label id="labelImagen" for="imagen" class="btn btn-large" ><span style="font-size: 60px">
                                                    </span></label>
                                <input type="file" accept="image/*"
                                       onchange="loadFile(event)"
                                       @if($errors->has("imagen"))
                                       style="display: none"
                                       required
                                       @endif
                                       class="form-control"
                                       style="opacity: 0" id="imagen"
                                       name="imagen"/>
                                @if ($errors->has('imagen'))
                                    <span class="help-block" style="color: red">
                                        <h6> <strong>{{ $errors->first('imagen') }}</strong></h6>
                                    </span>
                                @endif
                            </div>

                            <script>

                                var loadFile = function (event) {
                                    var image = document.getElementById('previewImagen');
                                    image.src = URL.createObjectURL(event.target.files[0]);
                                    document.getElementById("imagen").style.display = "none";
                                    document.getElementById("labelImagen").style.display="none";
                                };
                                var seleccionarImagen = function (event) {
                                    var element = document.getElementById("imagen");
                                    element.click();
                                }
                            </script>
                        </div>

                    </div>
                </center>


                <div class="form-row">

                    <div class="col-5"><br>
                        <img src="/imagenes/iconos_formulario/usuario.svg" class="svg" width="25" height="35"   >
                        <label for="nombre" style="color: #000000">Nombres</label><br>
                        <input type="text" class="form-control" name="nombres"
                               id="nombres" placeholder="Nombres"><br>
                    </div>
                    <br>

                    <div class="col-5"><br>
                        <img src="/imagenes/iconos_formulario/usuario.svg" class="svg" width="25" height="35"  >
                        <label for="apellido" style="color: #000000">Apellidos</label><br>
                        <input type="text" class="form-control" name="apellidos"
                               id="apellidos" placeholder="Apellidos">
                    </div>
                    <br>


                    <div class="col-5">
                        <img src="/imagenes/iconos_formulario/calendario.svg" class="svg" width="50" height="35"  >
                        <label for="FechaNac" style="color: #000000">Fecha de Nacimiento</label><br>
                        <input type="date" class="form-control" name="fnacimiento"
                               id="fnacimiento"><br>
                    </div>


                    <div class="col-5">
                        <img src="/imagenes/iconos_formulario/grupo-de-edad.svg" class="svg" width="50" height="35"  >
                        <label for="edad" style="color: #000000">Edad</label><br>
                        <input type="number" class="form-control" name="edad"
                               id="edad" placeholder="Edad"><br>
                    </div>
                    <div class="col-5">
                        <img src="/imagenes/iconos_formulario/sexo.svg" class="svg" width="50" height="35"  >
                        <label for="sexo" style="color: #000000">Sexo</label><br>
                        <select class="form-control" name="sexo">
                            <option value="femenino">Femenino</option>
                            <option value="masculino">Masculino</option>
                        </select><br>
                    </div>


                    <div class="col-5">
                        <img src="/imagenes/iconos_formulario/tarjeta-de-identificacion.svg" class="svg" width="50" height="35"  >
                        <label for="identidad" style="color: #000000">Identidad </label><br>
                        <input type="text" class="form-control" name="identidad"
                               id="identidad" placeholder="0000-0000-00000"><br>
                    </div>

                    <div class="col-11">
                        <img src="/imagenes/iconos_formulario/ubicacion.svg" class="svg" width="50" height="35"  >
                        <label for="direccionProcede" style="color: #000000">Dirección</label>
                        <span class="col-md-5 col-md-offset-10 text-center">
        <textarea class="form-control" id="direccion" name="direccion"
                  placeholder="Dirección" rows="2"></textarea><br>
                    </span></div>
                    <br>


                    <div class="col-11">
                        <img src="/imagenes/iconos_formulario/profesion.svg" class="svg" width="50" height="35"  >
                        <label for="profesion" style="color: #000000">Profesión u Oficio</label>
                        <span class="col-md-5 col-md-offset-10 text-center">
        <textarea class="form-control" id="profesion" name="profesion"
                  placeholder="Ingrese su profesión u oficio" rows="2"></textarea><br>
                    </span></div>
                    <br>

                    <br>
                    <div class="col-11">
                        <img src="/imagenes/iconos_formulario/cargo.svg" class="svg" width="50" height="35"  >
                        <label for="cargo" style="color: #000000">Cargo</label>
                        <span class="col-md-5 col-md-offset-10 text-center">
        <textarea class="form-control" id="cargo" name="cargo"
                  placeholder="Cargo que desempeñará" rows="2"></textarea><br>
                    </span></div>
                    <br>


                </div>


                    <div class="col-11">
                        <img src="/imagenes/iconos_formulario/email.svg" class="svg" width="50" height="35"  >
                        <label for="email" style="color: #000000">Correo Electrónico </label>
                        <span class="col-md-5 col-md-offset-10 text-center">
        <textarea class="form-control" id="email" name="email"
                  placeholder="Ingrese su correo electrónico" rows="2"></textarea><br>
                    </span></div>


                <div class="col-11">
                    <img src="/imagenes/iconos_formulario/telefono.svg" class="svg" width="50" height="35"  >
                    <label for="telefono" style="color: #000000">Telefono</label>
                    <span class="col-md-5 col-md-offset-10 text-center">
        <textarea class="form-control" id="telefono" name="telefono"
                  placeholder="Numero de telefono" rows="2"></textarea><br>
                    </span></div>
                <br>

            </div>
                <div class="botones">
                    <button type="submit" class="btn btn-sm btn-success"><i class="fas fa-save"></i> Guardar</button>
                </div>
                <br>
        </form>o
        <br>
    </div class="card">
    <script src="/js/jquery-3.2.1.min.js"></script>
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

    </body>

@endsection
