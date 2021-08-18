@extends ('PlantillaMadre.menu_inicio')
@section('titulo', 'Datos del Responsable')
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
                <label class="card-title" style="color: black;">Editar datos Personales de la Madre y/o Resposable
                    Legal</label>
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

            @foreach($responsables as $responsables)
            <form method="post" action="{{route('responsable.update',["id"=>$responsables->id])}}"enctype="multipart/form-data">
                @method('PUT')
                @csrf

                <a class="sr-only sr-only-focusable" href="#content">Skip to main content</a>
                <div class="row justify-content-center">
                    <div class="col-md-5 justify-content-center">
                        <img src="/imagenes/iconos_formulario/personas.svg" style="margin-left: 50px" class="svg"
                             width="25" height="35">
                        <label for="parentesco" style="color: black;">Parentesco</label>
                        <select class="form-control" name="parentesco">
                            <option value="madre"
                                    @if($responsables->parentesco === "madre") selected='selected' @endif>Madre
                            </option>
                            <option value="padre" @if($responsables->parentesco === "padre")selected='selected' @endif>
                                Padre
                            </option>
                            <option value="responsable"
                                    @if($responsables->parentesco === "responsable") selected='selected' @endif>
                                Responsable Legal
                            </option>
                        </select>
                        <br></div>
                    <br>
                    <div class="col-md-5 justify-content-center">
                        <img src="/imagenes/iconos_formulario/usuario.svg" style="margin-left: 50px" class="svg"
                             width="25" height="35">
                        <label for="nombre" style="color: black;">Nombres </label>
                        <input type="text" class="form-control" maxlength="50"
                               value="{{$responsables->nombres}}"
                               name="nombres"
                               id="nombres" placeholder="Nombre completo de la madre y/o resprentante legal."><br>
                    </div>
                    <br>

                    <div class="col-md-5 justify-content-center">
                        <img src="/imagenes/iconos_formulario/usuario.svg" style="margin-left: 50px" class="svg"
                             width="25" height="35">
                        <label for="apellido" style="color: black;">Apellidos </label><br>
                        <input type="text" class="form-control" maxlength="50"
                               value="{{$responsables->apellidos}}"
                               name="apellidos"
                               id="apellidos" placeholder="Apellido completo de la madre y/o resprentante legal.">
                        <br>
                    </div>
                    <br>
                    <?php $fnacimiento = date("d-m-Y");?>
                    <div class="col-md-5 justify-content-center">
                        <img src="/imagenes/iconos_formulario/calendario.svg" style="margin-left: 50px" class="svg"
                             width="25" height="35">
                        <label for="FechaNac" style="color: black;">Fecha de Nacimiento</label><br>
                        <input type="date" class="form-control"
                               value="{{$responsables->fnacimiento}}"
                               name="fnacimiento"
                               id="fnacimiento" min="<?php echo date('Y-m-d', strtotime($fnacimiento . "- 65 year"));?>"
                               max="<?php echo date('Y-m-d', strtotime($fnacimiento . "0 year"));?>"><br>
                    </div>
                    <br>
                    <div class="col-md-5 justify-content-center">
                        <img src="/imagenes/iconos_formulario/ubicacion.svg" style="margin-left: 50px" class="svg"
                             width="25" height="35">
                        <label for="direccion" style="color: black;">Dirección</label>
                        <input type="text" class="form-control" maxlength="100"
                               value="{{$responsables->direccion}}"
                               name="direccion"
                               id="direccion" placeholder="Dirección permanente">
                        <br></div>
                    <br>
                    <div class="col-md-5 justify-content-center">
                        <img src="/imagenes/iconos_formulario/empresario.svg" style="margin-left: 50px" class="svg"
                             width="25" height="35">
                        <label for="trabaja" style="color: black;">Trabaja</label><br>
                        <select class="form-control"
                                name="trabaja">
                            <option value="Si" @if($responsables->trabaja === "Si") selected='selected' @endif>Si</option>
                            <option value="No" @if($responsables->trabaja === "No") selected='selected' @endif>No</option>
                        </select><br>
                    </div>
                    <br>
                    <div class="col-md-5 justify-content-center">
                        <img src="/imagenes/iconos_formulario/empresarios.svg" style="margin-left: 50px" class="svg"
                             width="25" height="35">
                        <label for="profesionOficio" style="color: black;">Profesión u oficio</label><br>
                        <input type="text" class="form-control" maxlength="100"
                               value="{{$responsables->profesionOficio}}"
                               name="profesionOficio"
                               id="profesionOficio" placeholder="Profesión u oficio"><br>
                    </div>
                    <br>
                    <div class="col-md-5 justify-content-center">
                        <img src="/imagenes/iconos_formulario/tarjeta-de-identificacion.svg" style="margin-left: 50px"
                             class="svg" width="25" height="35">
                        <label for="identidad" style="color: black;">Identidad</label><br>

                        <input  type="text" class="form-control"maxlength="13" pattern="[0-9]+" minlength="13"
                                value="{{$responsables->identidad}}"

                                name="identidad"
                                id="identidadMadre" placeholder="Número de identidad"><br>
                    </div>
                    <br>
                    <div class="col-md-5 justify-content-center">
                        <img src="/imagenes/iconos_formulario/pasaporte.svg" style="margin-left: 50px" class="svg"
                             width="25" height="35">
                        <label for="pasaporte" style="color: black;">Pasaporte</label><br>
                        <input  type="text" class="form-control" maxlength="20" minlength="20"

                                value="{{$responsables->pasaporte}}"
                                name="pasaporte"
                                id="pasaporteMadre" placeholder="Número de pasaporte (Opcional)"><br>
                    </div>
                    <br>
                    <div class="col-md-5 justify-content-center">
                        <img src="/imagenes/iconos_formulario/anillos-de-boda.svg" style="margin-left: 50px" class="svg"
                             width="25" height="35">
                        <label for="civil" style="color: black;">Estado Civil</label><br>
                        <select class="form-control" name="civil">
                            <option value="Soltero/a" @if($responsables->trabaja === "Soltero/a") selected='selected' @endif>
                                Soltero/a
                            </option>
                            <option value="Comprometido/a"
                                     @if($responsables->trabaja === "Comprometido/a") selected='selected' @endif>Comprometido/a
                            </option>
                            <option value="Casado/a" @if($responsables->trabaja === "Casado/a") selected='selected' @endif>
                                Casado/a
                            </option>
                            <option value="Unión libre" @if($responsables->trabaja === "Unión libre") selected='selected' @endif>
                                Unión libre
                            </option>
                            <option value="Separado/a"  @if($responsables->trabaja === "Separado/a") selected='selected' @endif>
                                Separado/a
                            </option>
                            <option value="Divorciado/a" @if($responsables->trabaja === "Divorciado/a") selected='selected' @endif>
                                Divorciado/a
                            </option>
                            <option value="Viudo/a" @if($responsables->trabaja === "Viudo/a") selected='selected' @endif>Viudo/a
                            </option>
                        </select><br>
                    </div>
                    <br>
                    <div class="col-md-10 justify-content-center">
                        <img src="/imagenes/iconos_formulario/telefono.svg" style="margin-left: 50px" class="svg"
                             width="25" height="35">
                        <label for="telefono" style="color: black;">Teléfono</label><br>
                        <input  type="text" class="form-control"  name="telefono" maxlength="8" pattern="[0-9]+" minlength="8"
                                value="{{$responsables->telefono}}"
                                id="telefono" placeholder="Número de teléfono, Ej:33568790"><br>

                    </div>
                </div>
                <br>
                <div class="trans text-center">
                    <button type="submit" class="btn btn-outline-success justify-content-center"><i
                                class="fas fa-save"></i> Guardar
                    </button>
                </div>
                <br>
            </form>
                @endforeach
        </div>
        <br>
        <br>
        <script src="/js/jquery-3.2.1.min.js"></script>
        <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
        </body>
    </section>

@endsection
