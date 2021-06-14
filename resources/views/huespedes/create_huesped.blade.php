@extends ('PlantillaMadre.menu_inicio')
@section('titulo', 'Ficha de Ingreso Huésped')
@section('contenido')
    <br><br><br>
    <section class="container">
        <head>
            <!-- CSRF Token -->
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximun-scale=1.0,
        minimun-scale=1.0">
            <meta name="csrf-token" content="{{ csrf_token() }}">



        </head>

        <body class="table-responsive">
        <div class="" style="-moz-box-shadow: 0px 5px 3px 3px rgb(194,194,194);
    box-shadow: 0px 5px 3px 3px rgba(194,194,194,1);">
            <div class="card-header" style="background-color: #4cd213">
                <label class="card-title" style="color: black;">Datos Personales del Niño, Niña o Adolescente</label>
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

                <form method="post" action="{{route('huesped.store')}}" enctype="multipart/form-data">

                    @csrf
                    <a class="sr-only sr-only-focusable" href="#content">Skip to main content</a>
                    <div class="abs-center">
                        <center>
                            <div class="col-2"><br>
                                <div class="row">
                                    <div class="form-group {{ $errors->has('imagen') ? ' has-error' : '' }}"
                                         style="width: 70%">
                                        <h6 style="text-align-last: center">Imagen (Opcional)</h6>
                                        <img width="150px"  id="previewImagen" style="max-height:150px"
                                             src="/imagenes/iconos_formulario/anadir-imagen.svg"
                                             @if($errors->has("imagen"))  src="/imagenes/iconos_formulario/anadir-imagen.svg"
                                             @endif onclick="seleccionarImagen(event)"/>

                                        <label id="labelImagen" for="imagen" class="btn btn-large"><span
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


                        <div class="form-row">

                            <div class="col-5"><br>
                                <img src="/imagenes/iconos_formulario/usuario.svg" style="margin-left: 50px" class="svg"
                                     width="25" height="35">
                                <label for="nombre" style="color: #000000;">Nombres</label><br>
                                <input type="text" style="margin-left: 30px" class="form-control" maxlength="50"
                                       name="nombres"
                                       value="{{old('nombres')}}"
                                       id="nombres" placeholder="Nombres"><br>
                            </div>
                            <br>

                            <div class="col-5"><br>
                                <img src="/imagenes/iconos_formulario/usuario.svg" style="margin-left: 50px" class="svg"
                                     width="25" height="35">
                                <label for="apellido" style="color: #000000">Apellidos</label><br>
                                <input type="text" style="margin-left: 30px" class="form-control" maxlength="50"
                                       name="apellidos"
                                       value="{{old('apellidos')}}" id="apellidos" placeholder="Apellidos">
                            </div>
                            <br>

                            <?php $fnacimiento = date("d-m-Y");?>
                            <div class="col-5">
                                <img src="/imagenes/iconos_formulario/calendario.svg" style="margin-left: 50px"
                                     class="svg" width="50" height="35">
                                <label for="fnacimiento" style="color: #000000">Fecha de Nacimiento</label><br>
                                <input type="date" class="form-control" style="margin-left: 30px" name="fnacimiento"
                                       id="fnacimiento" value="{{old('fnacimiento')}}"
                                       min="<?php echo date('Y-m-d', strtotime($fnacimiento . "- 25 year"));?>"
                                       max="<?php echo date('Y-m-d', strtotime($fnacimiento . " 10 year"));?>">

                                <br>
                            </div>


                            <div class="col-5">
                                <img src="/imagenes/iconos_formulario/grupo-de-edad.svg" style="margin-left: 50px"
                                     class="svg" width="50" height="35">
                                <label for="edad" style="color: #000000">Edad</label><br>
                                <input type="number" type="number" min="0" pattern="^[0-9]+" style="margin-left: 30px"
                                       class="form-control" name="edad"
                                       value="{{old('edad')}}" id="edad" placeholder="Edad"><br>
                            </div>
                            <div class="col-5">
                                <img src="/imagenes/iconos_formulario/fecha.svg" class="svg" style="margin-left: 50px"
                                     width="50" height="35">
                                <label style="color: #000000" for="ingreso">Fecha de Ingreso</label><br>
                                <input type="date" style="margin-left: 30px" class="form-control" name="ingreso"
                                       value="{{old('ingreso')}}">
                                <br>
                            </div>


                            <div class="col-5">
                                <img src="/imagenes/iconos_formulario/fechaEgreso.svg" style="margin-left: 50px"
                                     class="svg" width="50" height="35">
                                <label style="color: #000000" for="egreso">Fecha de Egreso</label><br>
                                <input type="date" style="margin-left: 30px" class="form-control"
                                       value="{{old('egreso')}}" name="egreso">
                                <br>
                            </div>

                            <div class="col-5">
                                <img src="/imagenes/iconos_formulario/sexo.svg" class="svg" style="margin-left: 50px"
                                     width="50" height="35">
                                <label for="sexo" style="color: #000000; ">Sexo</label><br>
                                <select style="margin-left: 30px" class="form-control" name="sexo">
                                    <option value="femenino" @if(old('sexo') === "femenino") selected='selected' @endif>
                                        Femenino
                                    </option>
                                    <option value="masculino"
                                            @if(old('sexo') === "masculino") selected='selected' @endif>
                                        Masculino
                                    </option>

                                </select><br>
                            </div>
                            <br>


                            <div class="col-5">
                                <img src="/imagenes/iconos_formulario/muestra-de-color-de-cabello.svg"
                                     style="margin-left: 50px" class="svg" width="50" height="35">
                                <label for="cabello" style="color: #000000">Color de cabello</label><br>
                                <select style="margin-left: 30px" class="form-control" name="cabello">
                                    <option value="negro" @if(old('cabello') === "negro") selected='selected' @endif>
                                        Negro
                                    </option>
                                    <option value="castaño"
                                            @if(old('cabello') === "castaño") selected='selected' @endif>
                                        Castaño
                                    </option>
                                    <option value="pelirojo"
                                            @if(old('cabello') === "pelirojo") selected='selected' @endif>
                                        Pelirojo
                                    </option>
                                    <option value="rubio" @if(old('cabello') === "rubio") selected='selected' @endif>
                                        Rubio
                                    </option>
                                    <option value="canoso" @if(old('cabello') === "canoso") selected='selected' @endif>
                                        Canoso
                                    </option>
                                    <option value="blanco" @if(old('cabello') === "blanco") selected='selected' @endif>
                                        Blanco
                                    </option>
                                    <option value="otro" @if(old('cabello') === "otro") selected='selected' @endif>
                                        Otro
                                    </option>

                                </select><br>
                            </div>


                            <div class="col-5">
                                <img src="/imagenes/iconos_formulario/observacion.svg" style="margin-left: 50px"
                                     class="svg" width="50" height="35">
                                <label for="OjosSelec" style="color: #000000">Color de ojos</label><br>
                                <select style="margin-left: 30px" class="form-control" name="ojos">
                                    <option value="negros" @if(old('ojos') === "negros") selected='selected' @endif>
                                        Ojos
                                    </option>
                                    <option value="azules" @if(old('ojos') === "azules") selected='selected' @endif>
                                        Azules
                                    </option>
                                    <option value="verdes" @if(old('ojos') === "verdes") selected='selected' @endif>
                                        Verdes
                                    </option>
                                    <option value="grises" @if(old('ojos') === "grises") selected='selected' @endif>
                                        Castaño
                                    </option>

                                </select><br>
                            </div>


                            <div class="col-5">
                                <img src="/imagenes/iconos_formulario/levantar-la-mano.svg" style="margin-left: 50px"
                                     class="svg" width="50" height="35">
                                <label for="pielSelct" style="color: #000000">Color de piel</label><br>
                                <select style="margin-left: 30px" class="form-control" name="piel">
                                    <option value="blanca" @if(old('piel') === "castaño") selected='selected' @endif>
                                        Castaño
                                    </option>
                                    <option value="trigueña" @if(old('piel') === "trigueña") selected='selected' @endif>
                                        Trigueña
                                    </option>
                                    <option value="morena" @if(old('piel') === "morena") selected='selected' @endif>
                                        Morena
                                    </option>
                                    <option value="negra" @if(old('piel') === "negra") selected='selected' @endif>
                                        Negra
                                    </option>
                                    <option value="otro" @if(old('piel') === "otro") selected='selected' @endif>
                                        Otro
                                    </option>

                                </select>
                            </div>


                            <div class="col-5">
                                <img src="/imagenes/iconos_formulario/tarjeta-de-identificacion.svg"
                                     style="margin-left: 50px" class="svg" width="50" height="35">
                                <label for="identidad" style="color: #000000">Identidad </label><br>
                                <input type="text" style="margin-left: 30px" class="form-control" name="identidad"
                                       maxlength="13"
                                       value="{{old('identidad')}}" id="identidad" placeholder="0000-0000-00000"><br>
                            </div>
                            <br>


                            <div class="col-md-5">
                                <img src="/imagenes/iconos_formulario/nacionalidad.svg" style="margin-left: 50px"
                                     class="svg" width="50" height="35">
                                <label for="nacionalidad" style="color: #000000">Nacionalidad</label>
                                <input style="margin-left: 30px" type="text" class="form-control" name="nacionalidad"
                                       value="{{old('nacionalidad')}}" id="nacionalidad" placeholder="Nacionalidad">
                            </div>
                            <br>


                            <div class="col-5">
                                <img src="/imagenes/iconos_formulario/pasaporte.svg" style="margin-left: 50px"
                                     class="svg" width="50" height="35">
                                <label for="pasaporte" style="color: #000000">Pasaporte</label><br>
                                <input style="margin-left: 30px" type="text" class="form-control" name="pasaporte"
                                       maxlength="20"
                                       value="{{old('pasaporte')}}" id="pasaporte" placeholder="Numero de pasaporte">
                            </div>
                            <br>


                            <div class="col-5">
                                <img src="/imagenes/iconos_formulario/lugar.svg" style="margin-left: 50px" class="svg"
                                     width="50" height="35">
                                <label for="nacimiento" style="color: #000000">Lugar de nacimiento</label><br>
                                <input style="margin-left: 30px" type="text" class="form-control" name="nacimiento"
                                       value="{{old('nacimiento')}}" id="nacimiento"
                                       placeholder="Lugar de nacimiento"><br>
                            </div>


                            <div style="margin-left: 45px">
                                <img src="/imagenes/iconos_formulario/ubicacion.svg" style="margin-left: 54px"
                                     class="svg" width="50" height="35">
                                <label for="direccionProcede" style="color: #000000">Dirección</label>
                                <span class="col-md-5 col-md-offset-10 text-center">
        <textarea class="form-control" id="direccion" name="direccion"
                  placeholder="Dirección de dónde procede" style="margin-left: 35px" cols="138" rows="2">{{old('direccion')}}</textarea><br>
                    </span></div>
                            <br>


                            <div style="margin-left: 45px">
                                <img src="/imagenes/iconos_formulario/material-escolar.svg" style="margin-left: 50px"
                                     class="svg" width="50" height="35">
                                <label for="signos" style="color: #000000">Grado Escolar</label>
                                <span class="col-md-5 col-md-offset-10 text-center">
        <textarea class="form-control" id="gradoEscolar" name="gradoEscolar"
                  placeholder="Describa el grado escolar del niño, niña o adolescente" style="margin-left: 25px"
                  cols="120" rows="2">{{old('gradoEscolar')}}</textarea><br>
                    </span></div>
                            <br>


                            <div style="margin-left: 45px">
                                <img src="/imagenes/iconos_formulario/fisico.svg" style="margin-left: 50px" class="svg"
                                     width="50" height="35">
                                <label for="signos" style="color: #000000">Signos Fisicos</label>
                                <span class="col-md-5 col-md-offset-10 text-center">
        <textarea class="form-control" id="signosFisicos" name="signosFisicos"
                  placeholder="Lunares, cicatrices y otros. Describir" style="margin-left: 25px" cols="120"
                  rows="2"></textarea><br>
                    </span></div>
                            <br>


                            <div class="col-md-12 justify-content-center">
                                <img src="/imagenes/iconos_formulario/fiebre.svg" style="margin-left: 50px" class="svg"
                                     width="50" height="35">
                                <label for="enfermedad" style="color: #000000">Enfermedad o padecimiento </label>
                                <span class=" text-center">
        <textarea class="form-control col-md-8" id="enfermedad" name="enfermedad"
                  placeholder="Describa la enfermedad o padecimiento"
                  rows="2"></textarea><br>
                    </span>{{old('enfermedad')}}</div>
                            <br>


                            <div class="col-md-12 justify-content-center">
                                <img src="/imagenes/iconos_formulario/medicamento.svg" style="margin-left: 50px"
                                     class="svg" width="50" height="35">
                                <label for="tratamiento" style="color: #000000">Tratamiento</label>
                                <span class="text-center">
        <textarea class="form-control col-md-8" id="tratamiento" name="tratamiento"
                  placeholder="Describa el tratamiento que necesita"
                  rows="2">{{old('tratamiento')}}</textarea><br>
                    </span></div>
                            <br>

                        </div>
                        <br>
                        <div class="botones">
                            <button type="submit" class="btn btn-sm btn-outline-success"><i class="fas fa-save"></i>
                                Guardar
                            </button>
                        </div>
                        <br>

                    </div>
                </form>
                <br>


        </div>

        <br>
        <script src="/js/jquery-3.2.1.min.js"></script>
        <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

        </body>
    </section>
@endsection
