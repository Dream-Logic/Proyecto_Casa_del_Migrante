@extends ('PlantillaMadre.menu_inicio')
@section('titulo', 'Ficha de Ingreso Personal')
@section('contenido')
    <br>
    <br>
    <br>
    <head>
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
    </head>
    <body class="table-responsive">

    <div class="">
        <div   class="" style="-moz-box-shadow: 0px 5px 3px 3px rgba(194,194,194,1);
    box-shadow: 0px 5px 3px 3px rgba(194,194,194,1);" >
            <div class="card-header" style="background-color: #4cd213">
            <label class="" style="color: black;">Datos del Personal</label>
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

        <form method="post" action="{{route('personal.store')}}" enctype="multipart/form-data">

            @csrf
            <a class="sr-only sr-only-focusable" href="#content">Skip to main content</a>
            <div class="abs-center">
                <center>
                    <div class="col-md-12 justify-content-center"><br>
                        <div class="col-md-12 justify-content-center">
                            <div class="form-group {{ $errors->has('imagen') ? ' has-error' : '' }}" style="width: 70%">
                                <h6 style="text-align: center">Imagen (Opcional)</h6>
                                <img width="150px" id="previewImagen" style="max-height:250px"
                                     src="/imagenes/iconos_formulario/anadir-imagen.svg"
                                     @if($errors->has("imagen"))  src="/imagenes/iconos_formulario/anadir-imagen.svg"
                                     @endif onclick="seleccionarImagen(event)"/>

                                <label id="labelImagen" for="imagen" class="btn btn-large col-md-12 justify-content-center"><span
                                        style="font-size: 60px">
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
                                    document.getElementById("labelImagen").style.display = "none";
                                };
                                var seleccionarImagen = function (event) {
                                    var element = document.getElementById("imagen");
                                    element.click();
                                }
                            </script>
                        </div>

                    </div>
                </center>

                <div class="form-row justify-content-center">

                    <div class="col-md-5 justify-content-center"><br>
                        <img src="/imagenes/iconos_formulario/usuario.svg" style="margin-left: 50px" class="svg"
                             width="25" height="35">
                        <label for="nombre_personal" style="color: #000000">Nombres</label><br>
                        <input type="text" class="form-control" name="nombres_personal" value="{{old('nombres_personal')}}"
                               id="nombres_personal" placeholder="Nombres"><br>
                    </div>
                    <br>

                    <div class="col-md-5 justify-content-center"><br>
                        <img src="/imagenes/iconos_formulario/usuario.svg" style="margin-left: 50px" class="svg" width="25" height="35">
                        <label for="apellido_personal" style="color: #000000">Apellidos</label><br>
                        <input type="text" class="form-control" name="apellidos_personal"value="{{old('apellidos_personal')}}"
                               id="apellidos_personal" placeholder="Apellidos"><br>
                    </div>
                    <br>

                    <?php $fnacimiento_personal = date("d-m-Y");?>
                    <div class="col-md-5 justify-content-center"><br>
                        <img src="/imagenes/iconos_formulario/calendario.svg" style="margin-left: 50px" class="svg"
                             width="25" height="35">
                        <label for="FechaNac_personal" style="color: #000000">Fecha de Nacimiento</label>
                        <input  type="date" class="form-control" name="fnacimiento_personal"
                               id="fnacimiento_personal" value="{{old('fnacimiento_personal')}}"
                               min="<?php echo date('Y-m-d', strtotime($fnacimiento_personal . "- 65 year"));?>"
                               max="<?php echo date('Y-m-d', strtotime($fnacimiento_personal . "0 year"));?>"><br>
                    </div><br>

                    <div class="col-md-5 justify-content-center"><br>
                        <img src="/imagenes/iconos_formulario/grupo-de-edad.svg" style="margin-left: 50px" class="svg" width="25" height="35">
                        <label for="edad_personal" style="color: #000000">Edad</label>
                        <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                               name="edad_personal" id="edad_personal" value="{{old('edad_personal')}}" placeholder="Edad"><br>
                    </div><br>
                    <div class="col-md-5 justify-content-center"><br>
                        <img src="/imagenes/iconos_formulario/sexo.svg" style="margin-left: 50px" class="svg" width="25" height="35">
                        <label for="sexo_personal" style="color: #000000">Sexo</label>
                        <select  class="form-control" name="sexo_personal" >
                            <option value="femenino"@if(old('sexo_personal') === "femenino") selected='selected' @endif>Femenino</option>
                            <option value="masculino" @if(old('sexo_personal') === "masculino") selected='selected' @endif>Masculino</option>
                        </select><br>
                    </div><br>


                    <div class="col-md-5 justify-content-center"><br>
                        <img src="/imagenes/iconos_formulario/tarjeta-de-identificacion.svg" style="margin-left: 50px" class="svg" width="25"
                             height="35">
                        <label for="identidad_personal" style="color: #000000">Identidad </label>
                        <input type="text" class="form-control" name="identidad_personal"
                               id="identidad_personal" pattern="[0-9]+" maxlength="13" minlength="13"
                               value="{{old('identidad_personal')}}"placeholder="0000000000000"><br>
                    </div><br>


                    <div class="col-md-10 justify-content-center"><br>
                        <img src="/imagenes/iconos_formulario/email.svg" style="margin-left: 25px" class="svg" width="25" height="35">
                        <label for="email" style="color: #000000">Correo Electrónico </label>

                    <input  class="form-control" id="email" name="email"value="{{old('email')}}"
                          placeholder="Ej. sosaRoger2021@gmail.com (opcional)" ><br>
                    </div><br>


                    <div class="col-md-10 justify-content-center"><br>
                        <img src="/imagenes/iconos_formulario/telefono.svg" style="margin-left: 25px" class="svg" width="25" height="35">
                        <label for="telefono_personal" style="color: #000000">Telefono</label>
                        <input class="form-control" type="text"
               id="telefono_personal" name="telefono_personal" value="{{old('telefono_personal')}}" pattern="[0-9]+" maxlength="8" minlength="8"
               placeholder="Número de telefono, Ej. 33665814" ><br>
                    </div><br>



                    <div class="col-md-10 justify-content-center"><br>
                        <img src="/imagenes/iconos_formulario/ubicacion.svg" style="margin-left: 50px" class="svg" width="25" height="35">
                        <label for="direccion_personal" style="color: #000000">Dirección</label>
                        <span class="text-center col-md-10 justify-content-center">
        <textarea class="form-control" id="direccion_personal" name="direccion_personal"
                  placeholder="Dirección" rows="2">{{old('direccion_personal')}}</textarea><br>
                    </span></div>
                    <br>


                    <div class="col-md-10 justify-content-center"><br>
                        <img src="/imagenes/iconos_formulario/profesion.svg" style="margin-left: 50px" class="svg" width="25" height="35">
                        <label for="profesion" style="color: #000000">Profesión u Oficio</label>
                        <span class="text-center col-md-10 justify-content-center">
        <textarea class="form-control" id="profesionPersonal" name="profesionPersonal"
                  placeholder="Ingrese su profesión u oficio"  cols="138" rows="2">{{old('profesionPersonal')}}</textarea><br>
                    </span></div>
                    <br>

                    <br>
                    <div class="col-md-10 justify-content-center"><br>
                        <img src="/imagenes/iconos_formulario/cargo.svg" style="margin-left: 50px" class="svg" width="25" height="35">
                        <label for="cargo" style="color: #000000">Cargo</label>
                        <span class="ext-center col-md-10 justify-content-center">
                       <textarea class="form-control" id="cargo" name="cargo"
                                 placeholder="Cargo que desempeñará" rows="2">{{old('cargo')}}</textarea><br>
                    </span></div>
                    <br>
                </div>



            <div class="trans text-center">
                <button type="submit" class="btn btn-outline-success"> Guardar</button>
            </div>
            </div><br>
        </form>
        </div>
        </div>
    <script src="/js/jquery-3.2.1.min.js"></script>
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
    <br>
    <br>

@endsection
