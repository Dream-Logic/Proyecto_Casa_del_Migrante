@extends ('PlantillaMadre.menu_inicio')
@section('titulo', 'Editar datos del huésped')
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
        <div  style="-moz-box-shadow: 0px 5px 3px 3px rgba(194,194,194,1);
    box-shadow: 0px 5px 3px 3px rgba(194,194,194,1);" >
            <div class="card-header" style="background-color: #4cd213">
            <label class="card-title"  style="color: black">Editar Datos Personales del Niño, Niña o Adolescente</label>
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
        <div class="card-body">
            <form method="post" action="{{route('huesped.update',["id"=>$huesped->id])}}"enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <center>
                    <div class="col-md-12 justify justify-content-center"><br>
                        <div class="col-md-12 justify-content-center">
                            <div class="form-group {{ $errors->has('imagen') ? ' has-error' : '' }}" style="width: 90%">
                                <h6 style="text-align: center">Imagen (Opcional)</h6>
                                <img  width="200px" id="previewImagen" style="max-height:250px;  margin-left: 35px"
                                     src="{{"/foto/".$huesped->imagen}}"
                                     onclick="seleccionarImagen(event)"/>

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
                        <img src="/imagenes/iconos_formulario/usuario.svg" style="margin-left: 50px" class="svg" width="25" height="35">
                        <label for="nombre">Nombres</label><br>
                        <input type="text" class="form-control" name="nombres"
                               id="nombres" placeholder="Nombres" value="{{$huesped->nombres}}"><br>
                    </div>
                    <br>

                    <div class="col-md-5 justify-content-center"><br>
                        <img src="/imagenes/iconos_formulario/usuario.svg" style="margin-left: 50px" class="svg" width="25" height="35">
                        <label for="apellido">Apellidos</label><br>
                        <input type="text" class="form-control" name="apellidos"
                               id="apellidos" placeholder="Apellidos" value="{{$huesped->apellidos}}"><br>
                    </div>
                    <br>

                    <div class="col-md-5 justify-content-center"><br>
                        <img src="/imagenes/iconos_formulario/calendario.svg" style="margin-left: 50px" class="svg" width="25" height="35">
                        <label for="FechaNac">Fecha de Nacimiento</label><br>
                        <input type="date" class="form-control" name="fnacimiento"
                               id="fnacimiento" value="{{$huesped->fnacimiento}}"><br>
                    </div>
                    <br>

                    <div class="col-md-5 justify-content-center"><br>
                        <img src="/imagenes/iconos_formulario/grupo-de-edad.svg" style="margin-left: 50px" class="svg" width="25" height="35">
                        <label for="edad">Edad</label><br>
                        <input type="number" class="form-control" name="edad"
                               id="edad" placeholder="Edad" value="{{$huesped->edad}}"><br>
                    </div>
                    <br>

                    <div class="col-md-5 justify-content-center"><br>
                        <img src="/imagenes/iconos_formulario/calendario.svg" style="margin-left: 50px" class="svg" width="25" height="35">
                        <label style="color: #000000" for="ingreso">Fecha de Ingreso</label><br>
                        <input type="date" class="form-control" name="ingreso"
                               id="ingreso" value="{{$huesped->ingreso}}"><br>
                    </div>
                    <br>
                    <div class="col-md-5 justify-content-center"><br>
                        <img src="/imagenes/iconos_formulario/calendario.svg" style="margin-left: 50px" class="svg" width="25" height="35">
                        <label style="color: #000000" for="egreso">Fecha de Egreso</label><br>
                        <input type="date" class="form-control" name="egreso"
                               id="egreso" value="{{$huesped->egreso}}"><br>
                    </div>
                    <br>
                    <div class="col-md-5 justify-content-center"><br>
                        <img src="/imagenes/iconos_formulario/sexo.svg" style="margin-left: 50px" class="svg" width="25" height="35">
                        <label for="sexo">sexo</label><br>
                        <select class="form-control" name="sexo">
                            <option value="femenina" @if($huesped->sexo === "femenino") selected='selected' @endif>
                                Femenino
                            </option>
                            <option value="masculino" @if($huesped->sexo === "masculino") selected='selected' @endif>
                                Masculino
                            </option>
                        </select><br>
                    </div>
                    <br>


                    <div class="col-md-5 justify-content-center"><br>
                        <img src="/imagenes/iconos_formulario/muestra-de-color-de-cabello.svg"  style="margin-left: 50px"class="svg" width="25"
                             height="35">
                        <label for="cabello">Color de cabello</label><br>
                        <select class="form-control" name="cabello">
                            <option value="negro" @if($huesped->cabello === "negro") selected='selected' @endif >Negro
                            </option>
                            <option value="castaño" @if($huesped->cabello === "castaño") selected='selected' @endif >
                                Castaño
                            </option>
                            <option value="pelirojo" @if($huesped->cabello === "pelirojo") selected='selected' @endif>
                                Pelirrojo
                            </option>
                            <option value="rubio" @if($huesped->cabello === "rubio") selected='selected' @endif>Rubio
                            </option>
                            <option value="canoso" @if($huesped->cabello === "canoso") selected='selected' @endif>
                                Canoso
                            </option>
                            <option value="blanco" @if($huesped->cabello === "blanco") selected='selected' @endif>
                                Blanco
                            </option>
                            <option value="otro" @if($huesped->cabello === "otro") selected='selected' @endif>Otro
                            </option>
                        </select><br>
                    </div>


                    <div class="col-md-5 justify-content-center"><br>
                        <img src="/imagenes/iconos_formulario/observacion.svg" style="margin-left: 50px" class="svg" width="25" height="35">
                        <label for="OjosSelec">Color de ojos</label><br>
                        <select class="form-control" name="ojos">
                            <option value="negros" @if($huesped->ojos === "negros") selected='selected' @endif>Negros
                            </option>
                            <option value="azules" @if($huesped->ojos === "azules") selected='selected' @endif>Azules
                            </option>
                            <option value="cafes" @if($huesped->ojos === "cafes") selected='selected' @endif>Cafés
                            </option>
                            <option value="verdes" @if($huesped->ojos === "verdes") selected='selected' @endif>Verdes
                            </option>
                            <option value="grises" @if($huesped->ojos === "grises") selected='selected' @endif>Grises
                            </option>
                        </select><br>
                    </div>


                    <div class="col-md-5 justify-content-center"><br>
                        <img src="/imagenes/iconos_formulario/levantar-la-mano.svg" style="margin-left: 50px" class="svg" width="25" height="35">
                        <label for="pielSelct">Color de piel</label><br>
                        <select class="form-control" name="piel">

                            <option value="blanca" @if($huesped->piel === "blanca") selected='selected' @endif>Blanca
                            </option>
                            <option value="trigueña" @if($huesped->piel === "trigueña") selected='selected' @endif>
                                Trigueña
                            </option>
                            <option value="morena" @if($huesped->piel === "morena") selected='selected' @endif>Morena
                            </option>
                            <option value="negra" @if($huesped->piel === "negra") selected='selected' @endif>Negra
                            </option>
                            <option value="otros" @if($huesped->piel === "otros") selected='selected' @endif>Otros
                            </option>

                        </select><br>
                    </div>

                    <br>
                    <div class="col-md-5 justify-content-center"><br>
                        <img src="/imagenes/iconos_formulario/tarjeta-de-identificacion.svg" style="margin-left: 50px" class="svg" width="25"
                             height="35">
                        <label for="identidad">Identidad </label><br>
                        <input type="text" class="form-control" name="identidad" value="{{$huesped->identidad}}"
                               id="identidad" placeholder="0000-0000-00000"><br>
                    </div>
                    <br>

                    <div class="col-md-5 justify-content-center"><br>
                        <img style="margin-left: 50px" src="/imagenes/iconos_formulario/nacionalidad.svg" class="svg" width="25" height="35">
                        <label for="nacionalidad">Nacionalidad</label><br>
                        <input type="text" class="form-control" name="nacionalidad" value="{{$huesped->nacionalidad}}"
                               id="nacionalidad" placeholder="Nacionalidad">
                    </div><br>

                    <div class="col-md-5 justify-content-center"><br>
                        <img style="margin-left: 50px" src="/imagenes/iconos_formulario/pasaporte.svg" class="svg" width="25" height="35">
                        <label for="pasaporte">Pasaporte</label><br>
                        <input  type="text" class="form-control" name="pasaporte" value="{{$huesped->pasaporte}}"
                               id="pasaporte" placeholder="Numero de pasaporte">
                    </div>
                    <br>


                    <div class="col-md-5 justify-content-center"><br>
                        <img src="/imagenes/iconos_formulario/lugar.svg" style="margin-left: 50px" class="svg" width="25" height="35">
                        <label for="nacimiento">Lugar de nacimiento</label><br>
                        <input type="text" class="form-control" name="nacimiento"
                               id="nacimiento" placeholder="Lugar de nacimiento" value="{{$huesped->nacimiento}}"><br>
                    </div>

                    <br>
                    <div class="col-md-5 justify-content-center"><br>
                        <img src="/imagenes/iconos_formulario/ubicacion.svg" style="margin-left: 50px" class="svg" width="25" height="35">
                        <label for="direccionProcede">Dirección</label>
                        <span class="col-md-5 col-md-offset-10 text-center">
        <textarea class="form-control" id="direccion" name="direccion"
                  placeholder="Dirección de dónde procede" cols="136"  rows="2">{{$huesped->direccion}}</textarea><br>
                </span></div>
                    <br>

                    <div class="col-md-5 justify-content-center"><br>
                        <img src="/imagenes/iconos_formulario/material-escolar.svg" style="margin-left: 50px" class="svg" width="25" height="35">
                        <label for="signos" style="color: #000000">Grado Escolar</label>
                        <span class="col-md-5 col-md-offset-10 text-center">
        <textarea class="form-control" id="gradoEscolar" name="gradoEscolar"
                  placeholder="Describa el grado escolar del niño, niña o adolescente" cols="136"
                  rows="2">{{$huesped->gradoEscolar}}</textarea><br>
                    </span></div>
                    <br>


                    <div class="col-md-5 justify-content-center"><br>
                        <img src="/imagenes/iconos_formulario/fisico.svg" style="margin-left: 50px" class="svg" width="25" height="35">
                        <label for="signos">Signos Fisicos</label>
                        <span class="col-md-5 col-md-offset-10 text-center">
        <textarea class="form-control" id="signosFisicos" name="signosFisicos"
                  placeholder="Lunares, cicatrices y otros. Describir" cols="136"
                  rows="2">{{$huesped->signosFisicos}}</textarea><br>
                </span></div>
                    <br>


                    <div class="col-md-5 justify-content-center"><br>
                        <img src="/imagenes/iconos_formulario/fiebre.svg" style="margin-left: 50px" class="svg" width="25" height="35">
                        <label for="enfermedad">Enfermedad o padecimiento </label>
                        <span class="col-md-5 col-md-offset-10 text-center">
        <textarea class="form-control" id="enfermedad" name="enfermedad"  cols="136"
                  placeholder="Describa la enfermedad o padecimiento" rows="2">{{$huesped->enfermedad}}</textarea><br>
                </span></div>
                    <br>


                    <div class="col-md-5 justify-content-center"><br>
                        <img src="/imagenes/iconos_formulario/medicamento.svg" style="margin-left: 50px" class="svg" width="25" height="35">
                        <label for="tratamiento">Tratamiento</label>
                        <span class="col-md-5 col-md-offset-10 text-center">
        <textarea class="form-control" id="tratamiento" name="tratamiento"
                  placeholder="Describa el tratamiento que necesita" rows="2"  cols="136">{{$huesped->tratamiento}}</textarea><br>
                </span></div>
                    <br>
                </div>
                    <div class="trans text-center">
                    <button  type="submit"  class="btn btn-outline-success"><i class="fas fa-save"></i> Guardar</button>
                    </div>
            </form>
        </div>
            <br>
        </div>
    <script src="/js/jquery-3.2.1.min.js"></script>
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
    <br>
    <br>
        </body>
    </section>
@endsection
