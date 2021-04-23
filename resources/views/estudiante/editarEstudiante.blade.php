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
                        </div>
                    </div>
                </center>


                <a class="sr-only sr-only-focusable" href="#content">Skip to main content</a>
                <div class="form-row">

                    <div class="col-5"><br>
                        <img src="/imagenes/iconos_formulario/usuario.svg" class="svg" width="25" height="35"   >
                        <label for="nombres_alumno" style="color: #000000">Nombres</label><br>
                        <input type="text" class="form-control" name="nombres_alumno"
                               id="nombres_alumno" placeholder="Nombres"  value="{{$estudiante->nombres_alumno}}"><br>
                    </div>
                    <br>

                    <div class="col-5"><br>
                        <img src="/imagenes/iconos_formulario/usuario.svg" class="svg" width="25" height="35"  >
                        <label for="apellidos_alumno" style="color: #000000">Apellidos</label><br>
                        <input type="text" class="form-control" name="apellidos_alumno"
                               id="apellidos_alumno" placeholder="Apellidos"  value="{{$estudiante->apellidos_alumno}}">
                    </div>
                    <br>
                    <br>

                    <div class="col-5"><br>
                        <img src="/imagenes/iconos_formulario/Grado.svg" class="svg" width="25" height="35"  >
                        <label for="grado" style="color: #000000">Grado</label><br>
                        <input type="text" class="form-control" name="grado"
                               id="grado" placeholder="Grado"  value="{{$estudiante->grado}}">
                    </div>
                    <br>
                    <br>

                    <div class="col-5"><br>
                        <img src="/imagenes/iconos_formulario/Ca1.svg" class="svg" width="25" height="35"  >
                        <label for="carrera" style="color: #000000">Carrera</label><br>
                        <input type="text" class="form-control" name="carrera"
                               id="carrera" placeholder="Carrera"  value="{{$estudiante->carrera}}">
                    </div>
                    <br>


                    <div class="col-5">
                        <img src="/imagenes/iconos_formulario/Escritura.svg" class="svg" width="50" height="35"  >
                        <label for="escritura" style="color: #000000">Nivel de escritura</label><br>
                        <select class="form-control" name="escritura" >
                            <option  value="ninguno" @if($estudiante->escritura === "ninguno") selected='selected' @endif>
                        Ninguno
                        </option>
                            <option  value="bajo" @if($estudiante->escritura === "bajo") selected='selected' @endif>
                                Bajo
                            </option>
                        <option  value="medio" @if($estudiante->escritura === "medio") selected='selected' @endif>
                            Medio
                        </option>
                            <option  value="alto" @if($estudiante->escritura === "alto") selected='selected' @endif>
                                alto
                            </option>
                        </select><br>
                    </div>
                    <br>


                    <div class="col-5">
                        <img src="/imagenes/iconos_formulario/Reed.svg" class="svg" width="50" height="35"  >
                        <label for="lectura" style="color: #000000">Nivel de Lectura</label><br>
                        <select class="form-control" name="lectura">
                            <option  value="ninguno" @if($estudiante->escritura === "ninguno") selected='selected' @endif>
                                Ninguno
                            </option>
                            <option  value="bajo" @if($estudiante->escritura === "bajo") selected='selected' @endif>
                                Bajo
                            </option>
                            <option  value="medio" @if($estudiante->escritura === "medio") selected='selected' @endif>
                                Medio
                            </option>
                            <option  value="alto" @if($estudiante->escritura === "alto") selected='selected' @endif>
                                alto
                            </option>
                        </select><br>
                    </div>


                    <div class="col-5">
                        <img src="/imagenes/iconos_formulario/Arte.svg" class="svg" width="50" height="35"  >
                        <label for="habilidades" style="color: #000000">Habilidades Artisticas</label><br>
                        <select class="form-control" name="habilidades">
                            <option  value="arte" @if($estudiante->habilidades === "arte") selected='selected' @endif>
                                Arte
                            </option>
                            <option  value="canto" @if($estudiante->habilidades === "canto") selected='selected' @endif>
                                Canto
                            </option>
                            <option  value="baile" @if($estudiante->habilidades === "baile") selected='selected' @endif>
                                Baile
                            </option>
                            <option  value="dibujo" @if($estudiante->habilidades === "dibujo") selected='selected' @endif>
                                Dibujo
                            </option>
                        </select><br>
                    </div>


                    <div class="col-5">
                        <img src="/imagenes/iconos_formulario/Musica.svg" class="svg" width="50" height="35"  >
                        <label for="instrumento" style="color: #000000">Ejecuta algun instrumento</label><br>
                        <select class="form-control" name="instrumento">
                            <option  value="ninguno" @if($estudiante->instrumento === "ninguno") selected='selected' @endif>
                                Ninguno
                            </option>
                            <option  value="guitarra" @if($estudiante->instrumento === "guitarra") selected='selected' @endif>
                                Guitarra
                            </option>
                            <option  value="violin" @if($estudiante->instrumento === "violin") selected='selected' @endif>
                                Violin
                            </option>
                            <option  value="ukelele" @if($estudiante->instrumento === "ukelele") selected='selected' @endif>
                                Ukelele
                            </option>
                            <option  value="saxofon" @if($estudiante->instrumento === "saxofon") selected='selected' @endif>
                                Saxofon
                            </option>
                            <option  value="teclado" @if($estudiante->instrumento === "teclado") selected='selected' @endif>
                                Teclado
                            </option>
                            <option  value="otros" @if($estudiante->instrumento === "otros") selected='selected' @endif>
                                Otros
                            </option>

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
