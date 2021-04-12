@extends ('PlantillaMadre.menu_inicio')
@section('titulo', 'Editar datos del huésped')
@section('contenido')

    <br><br><br>
    <div class="card ">

        <div class="card-header" style="background-color: #4dc0b5; color:black" >
            <label class="card-title">Editar Datos del Personal</label>
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
            <form method="post" action="{{route('personal.update',["id"=>$personal->id])}}" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <center>
                    <div class="col-5"><br>
                        <div class="row">
                            <div class="form-group {{ $errors->has('imagen') ? ' has-error' : '' }}" style="width: 90%">
                                <h6 style="text-align: start">Imagen (Opcional)</h6>
                                <img width="200px" id="previewImagen" style="max-height:250px"
                                     src="{{"/foto/".$personal->imagen}}"
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


                <a class="sr-only sr-only-focusable" href="#content">Skip to main content</a>
                <div class="form-row">

                    <div class="col-5"><br>
                        <img src="/imagenes/iconos_formulario/usuario.svg" class="svg" width="25" height="35">
                        <label for="nombre">Nombres</label><br>
                        <input type="text" class="form-control" name="nombres_personal"
                               id="nombres" placeholder="Nombres" value="{{$personal->nombres_personal}}"><br>
                    </div>
                    <br>

                    <div class="col-5"><br>
                        <img src="/imagenes/iconos_formulario/usuario.svg" class="svg" width="25" height="35">
                        <label for="apellido">Apellidos</label><br>
                        <input type="text" class="form-control" name="apellidos_personal"
                               id="apellidos" placeholder="Apellidos" value="{{$personal->apellidos_personal}}">
                    </div>
                    <br>


                    <div class="col-5">
                        <img src="/imagenes/iconos_formulario/calendario.svg" class="svg" width="50" height="35">
                        <label for="FechaNac">Fecha de Nacimiento</label><br>
                        <input type="date" class="form-control" name="fnacimiento_personal"
                               id="fnacimiento" value="{{$personal->fnacimiento_personal}}"><br>
                    </div>


                    <div class="col-5">
                        <img src="/imagenes/iconos_formulario/grupo-de-edad.svg" class="svg" width="50" height="35">
                        <label for="edad">Edad</label><br>
                        <input type="number" class="form-control" name="edad_personal"
                               id="edad" placeholder="Edad" value="{{$personal->edad_personal}}"><br>
                    </div>



                    <div class="col-5">
                        <img src="/imagenes/iconos_formulario/sexo.svg" class="svg" width="50" height="35">
                        <label for="sexo">sexo</label><br>
                        <select class="form-control" name="sexo_personal">
                            <option value="femenina" @if($personal->sexo_personal === "femenino") selected='selected' @endif>
                                Femenino
                            </option>
                            <option value="masculino" @if($personal->sexo_personal === "masculino") selected='selected' @endif>
                                Masculino
                            </option>
                        </select><br>
                    </div>
                    <br>

                    <div class="col-5">
                        <img src="/imagenes/iconos_formulario/tarjeta-de-identificacion.svg" class="svg" width="50"
                             height="35">
                        <label for="identidad">Identidad </label><br>
                        <input type="text" class="form-control" name="identidad_personal" value="{{$personal->identidad_personal}}"
                               id="identidad" placeholder="0000-0000-00000"><br>
                    </div>
                    <br>


                    <div class="col-11">
                        <img src="/imagenes/iconos_formulario/ubicacion.svg" class="svg" width="50" height="35">
                        <label for="direccionProcede">Dirección</label>
                        <span class="col-md-5 col-md-offset-10 text-center">
        <textarea class="form-control" id="direccion" name="direccion_personal"
                  placeholder="Dirección de dónde procede" rows="2">{{$personal->direccion_personal}}</textarea><br>
                </span></div>
                    <br>

                    <div class="col-11">
                        <img src="/imagenes/iconos_formulario/material-escolar.svg" class="svg" width="50" height="35">
                        <label for="signos" style="color: #000000">Profesion u Oficio</label>
                        <span class="col-md-5 col-md-offset-10 text-center">
        <textarea class="form-control" id="oficioprofesion" name="profesionPersonal"
                  placeholder="Describa la profesion u oficio del empleado"
                  rows="2">{{$personal->profesionPersonal}}</textarea><br>
                    </span></div>
                    <br>


                    <div class="col-11">
                        <img src="/imagenes/iconos_formulario/fisico.svg" class="svg" width="50" height="35">
                        <label for="signos">Cargo</label>
                        <span class="col-md-5 col-md-offset-10 text-center">
        <textarea class="form-control" id="cargo" name="cargo"
                  placeholder="Describa el cargo que desempeña"
                  rows="2">{{$personal->cargo}}</textarea><br>
                </span></div>
                    <br>


                    <div class="col-11">
                        <img src="/imagenes/iconos_formulario/fiebre.svg" class="svg" width="50" height="35">
                        <label for="enfermedad"></label>
                        <span class="col-md-5 col-md-offset-10 text-center">
        <textarea class="form-control" id="email" name="email"
                  placeholder="Escriba su correo electronico (Opcional)" rows="2">{{$personal->email}}</textarea><br>
                </span></div>
                    <br>


                    <div class="col-11">
                        <img src="/imagenes/iconos_formulario/medicamento.svg" class="svg" width="50" height="35">
                        <label for="tratamiento">Tratamiento</label>
                        <span class="col-md-5 col-md-offset-10 text-center">
        <textarea class="form-control" id="telefono_personal" name="telefono_personal"
                  placeholder="Escriba el número de Teléfono" rows="2">{{$personal->telefono_personal}}</textarea><br>
                </span></div>
                    <br>


                    <button type="submit" class="btn btn-sm btn-success"><i class="fas fa-save"></i> Guardar</button>

                </div>
            </form>
        </div>
    </div>
    <script src="/js/jquery-3.2.1.min.js"></script>
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
    </div>

@endsection
