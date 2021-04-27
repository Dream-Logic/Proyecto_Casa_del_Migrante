@extends ('PlantillaMadre.menu_inicio')
@section('titulo', 'Datos del Responsable')
@section('contenido')

    <br><br><br>
    <div class="card">

        <div class="card"  class="table-responsive" style="-moz-box-shadow: 0px 5px 3px 3px rgba(194,194,194,1);
    box-shadow: 0px 5px 3px 3px rgba(194,194,194,1);" >
            <div class="card-header" style="background-color: #4cd213">
            <label class="card-title" style="color: black">Datos Personales de la Madre y/o Resposable Legal</label>
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

        <form method="Post" action="{{route('responsable.store',['id'=>$id])}}">
            @csrf
            <div class="card-body">


                <a class="sr-only sr-only-focusable" href="#content">Skip to main content</a>

                <div class="form-row">
                    <div class="col-5">
                        <img src="/imagenes/iconos_formulario/personas.svg" style="margin-left: 50px" class="svg" width="25" height="35"   >
                        <label for="parentesco" style="color: black;">Parentesco</label>
                        <select  style="margin-left: 30px" class="form-control" name="parentesco">
                            <option value="Madre">Madre</option>
                            <option value="Padre">Padre</option>
                            <option value="Responsable Legal">Responsable Legal</option>
                        </select>
                    </div>
                    <div class="col-5">
                        <img src="/imagenes/iconos_formulario/usuario.svg" style="margin-left: 50px" class="svg" width="25" height="35"   >
                        <label for="nombre" style="color: black;">Nombres </label>
                        <input style="margin-left: 30px" type="text" class="form-control"
                               value="{{old('nombres')}}"
                               name="nombres"
                               id="nombres" placeholder="Nombre completo de la madre y/o resprentante legal."><br>
                    </div>
                    <br>

                    <div class="col-5">
                        <img src="/imagenes/iconos_formulario/usuario.svg" style="margin-left: 50px" class="svg" width="25" height="35"   >
                        <label for="apellido" style="color: black;">Apellidos </label><br>
                        <input style="margin-left: 30px" type="text" class="form-control"
                               value="{{old('apellidos')}}"
                               name="apellidos"
                               id="apellidos" placeholder="Apellido completo de la madre y/o resprentante legal.">
                    </div>
                    <br>

                    <div class="col-5">
                        <img src="/imagenes/iconos_formulario/calendario.svg" style="margin-left: 50px" class="svg" width="50" height="35"  >
                        <label for="FechaNac" style="color: black;">Fecha de Nacimiento</label><br>
                        <input style="margin-left: 30px" type="date" class="form-control"
                               value="{{old('fnacimiento')}}"
                               name="fnacimiento"
                               id="fnacimiento"><br>
                    </div>


                    <div class="col-5">
                        <img src="/imagenes/iconos_formulario/ubicacion.svg" style="margin-left: 50px" class="svg" width="50" height="35"  >
                        <label for="direccion" style="color: black;">Dirección</label>
                        <input style="margin-left: 30px" type="text" class="form-control"
                               value="{{old('direccion')}}"
                               name="direccion"
                               id="direccion" placeholder="Dirección permanente">
                    </div>
                    <br>


                    <div class="col-5">
                        <img src="/imagenes/iconos_formulario/empresario.svg" style="margin-left: 50px" class="svg" width="50" height="35"  >
                        <label for="trabaja" style="color: black;">Trabaja</label><br>
                        <select style="margin-left: 30px" class="form-control"

                                name="trabaja">
                            <option value="Si" @if(old('trabaja') === "Si") selected='selected' @endif>Si</option>
                            <option value="No" @if(old('trabaja')=== "No") selected='selected' @endif>No</option>
                        </select><br>
                    </div>
                    <br>

                    <div class="col-5">
                        <img src="/imagenes/iconos_formulario/empresarios.svg" style="margin-left: 50px" class="svg" width="50" height="35"  >
                        <label for="profesionOficio" style="color: black;">Profesión u oficio</label><br>
                        <input style="margin-left: 30px" type="text" class="form-control"
                               value="{{old('profesionOficio')}}"
                               name="profesionOficio"
                               id="profesionOficio" placeholder="Profesión u oficio"><br>
                    </div>
                    <br>


                    <div class="col-5">
                        <img src="/imagenes/iconos_formulario/tarjeta-de-identificacion.svg" style="margin-left: 50px" class="svg" width="50" height="35"  >
                        <label for="identidad" style="color: black;">Identidad</label><br>
                        <input style="margin-left: 30px" type="text" class="form-control"
                               value="{{old('identidad')}}"
                               name="identidad"
                               id="identidadMadre" placeholder="Número de identidad"><br>
                    </div>
                    <br>


                    <div class="col-5">
                        <img src="/imagenes/iconos_formulario/pasaporte.svg" style="margin-left: 50px" class="svg" width="50" height="35"  >
                        <label for="pasaporte" style="color: black;">Pasaporte</label><br>
                        <input style="margin-left: 30px" type="text" class="form-control"
                               value="{{old('pasaporte')}}"
                               name="pasaporte"
                               id="pasaporteMadre" placeholder="Número de pasaporte"><br>
                    </div>
                    <br><br>


                    <div class="col-5">
                        <img src="/imagenes/iconos_formulario/anillos-de-boda.svg" style="margin-left: 50px" class="svg" width="50" height="35"  >
                        <label for="civil" style="color: black;">Estado Civil</label><br>
                        <select style="margin-left: 30px" class="form-control" name="civil">
                            <option value="Soltero/a" @if(old('civil') === "Soltero/a") selected='selected' @endif>
                                Soltero/a
                            </option>
                            <option value="Comprometido/a"
                                    @if(old('civil') === "Comprometido/a") selected='selected' @endif>Comprometido/a
                            </option>
                            <option value="Casado/a" @if(old('civil')=== "Casado/a") selected='selected' @endif>
                                Casado/a
                            </option>
                            <option value="Unión libre" @if(old('civil') === "Unión libre") selected='selected' @endif>
                                Unión libre
                            </option>
                            <option value="Separado/a" @if(old('civil') === "Separado/a") selected='selected' @endif>
                                Separado/a
                            </option>
                            <option value="Divorciado/a" @if(old('civil')=== "Divorciado/a") selected='selected' @endif>
                                Divorciado/a
                            </option>
                            <option value="Viudo/a" @if(old('civil')=== "Viudo/a") selected='selected' @endif>Viudo/a
                            </option>
                        </select><br>
                    </div>

                    <div class="col-5">
                        <img src="/imagenes/iconos_formulario/telefono.svg" style="margin-left: 50px" class="svg" width="50" height="35"  >
                        <label for="telefono" style="color: black;">Teléfono</label><br>
                        <input style="margin-left: 30px" type="text" class="form-control" name="telefono"
                               id="telefono" placeholder="Número de teléfono"><br>
                    </div>
                </div>
                <br>
                <div class="table-responsive">
                    <a class="btn btn-outline-danger" style="margin-left: 990px" href="{{route('narracion.nuevo', ['id'=>$id])}}">Siguiente</a>
                    <button type="submit" class="btn btn-outline-success"><i class="fas fa-save"></i> Guardar</button>
                </div>
            </div>
        </form>
        </div>
        <br>
        <br>
        <script src="/js/jquery-3.2.1.min.js"></script>
        <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
    </div>



@endsection
