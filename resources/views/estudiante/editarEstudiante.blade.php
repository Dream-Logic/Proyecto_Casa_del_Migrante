@extends ('PlantillaMadre.menu_inicio')
@section('titulo', 'Editar datos del huésped')
@section('contenido')

    <br><br><br>
    <div class="card ">

        <div class="card-header">
            <label class="card-title">Editar Datos del Estudiante</label>
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
            <form method="post" action="{{route('estudiante.update',["id"=>$estudiante->id])}}">
                @method('PUT')
                @csrf
                <center>
                    <div class="col-5"><br>
                        <div class="row">
                            <div class="form-group {{ $errors->has('imagen') ? ' has-error' : '' }}" style="width: 90%">
                                <h6 style="text-align: start">Imagen (Opcional)</h6>
                                <img width="200px" id="previewImagen" style="max-height:250px"
                                     src="{{"/foto/".$estudiante->imagen}}"
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
                    <button type="submit" class="btn btn-sm btn-success"><i class="fas fa-save"></i> Guardar</button>

                </div>
            </form>
        </div>
    </div>
    <script src="/js/jquery-3.2.1.min.js"></script>
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
    </div>

@endsection
