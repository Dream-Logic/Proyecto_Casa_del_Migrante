@extends ('PlantillaMadre.menu_inicio')
@section('titulo', 'Ficha de Escolaridad')
@section('contenido')
    <br><br><br>
    <section class="container">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximun-scale=1.0,
        minimun-scale=1.0">
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
    </head>

    <body  class="table-responsive">
    <div class="" style="-moz-box-shadow: 0px 5px 3px 3px rgb(194,194,194);
                    box-shadow: 0px 5px 3px 3px rgba(194,194,194,1);">
        <div class="card-header" style="background-color: #4cd213">
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
                    <div class="col-md-12 justify-content-center"><br>
                        <div class="col-md-12 justify-content-center">
                            <div class="form-group {{ $errors->has('imagen') ? ' has-error' : '' }}"
                                 style="width: 70%">
                                <h6 style="text-align-last: center">Imagen (Opcional)</h6>
                                <img width="150px" id="previewImagen"
                                     style="max-height:150px; image-orientation: inherit"
                                     src="/imagenes/iconos_formulario/anadir-imagen.svg"
                                     @if($errors->has("imagen"))  src="/imagenes/iconos_formulario/anadir-imagen.svg"
                                     @endif onclick="seleccionarImagen(event)"/>

                                <label id="labelImagen" for="imagen"
                                       class="btn btn-large col-md-12 justify-content-center"><span
                                        style="font-size: 60px; ">
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
                        <label for="nombres_alumno" style="color: #000000">Nombres</label><br>
                        <input type="text" class="form-control"  name="nombres_alumno" maxlength="50"
                               value="{{old('nombres')}}"
                               id="nombres_alumno" placeholder="Nombres">
                    </div>
                    <br>

                    <div class="col-md-5 justify-content-center"><br>
                        <img src="/imagenes/iconos_formulario/usuario.svg" class="svg" style="margin-left: 50px"  class="svg" width="25" height="35"     >
                        <label for="apellidos_alumno" style="color: #000000">Apellidos</label><br>
                        <input type="text" class="form-control"  name="apellidos_alumno" maxlength="50"
                               value="{{old('apellidos')}}"
                               id="apellidos_alumno" placeholder="Apellidos">
                    </div>
                    <br>

                    <div class="col-md-5 justify-content-center"><br>
                        <img src="/imagenes/iconos_formulario/Grado.svg" class="svg"style="margin-left: 50px"  class="svg" width="25" height="35"    >
                        <label for="grado" style="color: #000000">Grado</label><br>
                        <input type="text" class="form-control"  name="grado" maxlength="10"
                               id="grado" placeholder="Grado">
                    </div>
                    <br>
                    <div class="col-md-5 justify-content-center"><br>
                        <img src="/imagenes/iconos_formulario/Ca1.svg" class="svg" style="margin-left: 50px"  class="svg" width="25" height="35" >
                        <label for="carrera" style="color: #000000">Carrera</label><br>
                        <input type="text" class="form-control" name="carrera" maxlength="100"
                               id="carrera" placeholder="Carrera">
                    </div>
                     <br>
                    <div class="col-md-5 justify-content-center"><br>
                        <img src="/imagenes/iconos_formulario/Escritura.svg" class="svg" style="margin-left: 50px"  class="svg" width="25" height="35"    >
                        <label for="escritura" style="color: #000000">Nivel de escritura</label><br>
                        <select class="form-control" name="escritura">
                            <option value="ninguno" @if(old('escritura') === "ninguno") selected='selected' @endif>Ninguno</option>
                            <option value="bajo" @if(old('escritura') === "bajo") selected='selected' @endif>Bajo</option>
                            <option value="medio" @if(old('escritura') === "medio") selected='selected' @endif>Medio</option>
                            <option value="alto" @if(old('escritura') === "alto") selected='selected' @endif>Alto</option>
                        </select><br>
                    </div>
                   <br>
                    <div class="col-md-5 justify-content-center"><br>
                        <img src="/imagenes/iconos_formulario/Reed.svg" class="svg" style="margin-left: 50px"  class="svg" width="25" height="35">
                        <label for="lectura" style="color: #000000">Nivel de Lectura</label><br>
                        <select class="form-control"  name="lectura">
                            <option value="ninguno" @if(old('lectura') === "ninguno") selected='selected' @endif>Ninguno</option>
                            <option value="bajo" @if(old('lectura') === "bajo") selected='selected' @endif>Bajo</option>
                            <option value="medio" @if(old('lectura') === "medio") selected='selected' @endif>Medio</option>
                            <option value="alto" @if(old('lectura') === "alto") selected='selected' @endif>Alto</option>
                        </select><br>
                    </div>
                    <br>
                    <div class="col-md-5 justify-content-center"><br>
                        <img src="/imagenes/iconos_formulario/Arte.svg" class="svg" style="margin-left: 50px"  class="svg" width="25" height="35"    >
                        <label for="habilidades" style="color: #000000">Habilidades Artisticas</label><br>
                        <select class="form-control"  name="habilidades">
                            <option value="ninguno" @if(old('habilidades') === "ninguno") selected='selected' @endif>
                                Ninguno</option>
                            <option value="arte" @if(old('habilidades') === "arte") selected='selected' @endif>
                                Arte</option>
                            <option value="canto" @if(old('habilidades') === "canto") selected='selected' @endif>
                                Canto</option>
                            <option value="baile" @if(old('habilidades') === "baile") selected='selected' @endif>
                                Baile</option>
                            <option value="dibujo" @if(old('habilidades') === "dibujo") selected='selected' @endif>
                                Dibujo</option>
                            <option value="ejecucion" @if(old('habilidades') === "ejecucion") selected='selected' @endif>
                                Ejecución de instrumento</option>
                        </select><br>
                    </div>

                    <br>
                    <div class="col-md-5 justify-content-center"><br>
                        <img src="/imagenes/iconos_formulario/Musica.svg" class="svg" style="margin-left: 50px"
                             class="svg" width="25" height="35" >
                        <label for="instrumento" style="color: #000000">Ejecuta algún instrumento</label><br>
                        <select class="form-control"  name="instrumento">
                            <option value="ninguno" @if(old('instrumento') === "ninguno") selected='selected' @endif>
                                Ninguno</option>
                            <option value="guitarra" @if(old('instrumento') === "guitarra") selected='selected' @endif>
                                Guitarra</option>
                            <option value="violin" @if(old('instrumento') === "violín") selected='selected' @endif>
                                Violin</option>
                            <option value="ukele" @if(old('instrumento') === "ukele") selected='selected' @endif>
                                Ukelele</option>
                            <option value="saxofon" @if(old('instrumento') === "saxofon") selected='selected' @endif>
                                Saxofon</option>
                            <option value="teclado" @if(old('instrumento') === "teclado") selected='selected' @endif>
                                Teclado</option>
                            <option value="otros" @if(old('instrumento') === "otros") selected='selected' @endif>
                                Otros</option>

                        </select>
                    </div>
                    <br>
                </div>
                <br>
                <div class="trans text-center">
                    <button type="submit" class="btn btn-sm btn-success " ><i class="fas fa-save"></i> Guardar</button>
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
