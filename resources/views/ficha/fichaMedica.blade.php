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

    <body>
    <div class="" class="table-responsive" style="-moz-box-shadow: 0px 5px 3px 3px rgba(194,194,194,1);
    box-shadow: 0px 5px 3px 3px rgba(194,194,194,1);">
        <div class="card-header" style="background-color: #4cd213">
            <label class="card-title" style="color: black;">Registro de Expediente Médico</label>
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
        <form method="post" action="{{route('fichaMedica.store')}}" enctype="multipart/form-data">

            @csrf
            <div class="form-row justify-content-center"><br>

                <div class="col-md-5 justify-content-center"><br>
                    <img src="/imagenes/iconos_formulario/hospital.svg" style="margin-left: 50px" class="svg"
                         width="25" height="35">
                    <label for="nombre_hspital" style="color: #000000">Hospital o clínica médica</label>
                    <input type="text" class="form-control" name="nombre_hospital"
                          value="{{old('nombre_hospital')}}"
                           id="nombre_hospital" placeholder="Nombre del hospital o clínica médica" ><br>
                    </input>
                </div>
                <br>

                <div class="col-md-5 justify-content-center"><br>
                    <img src="/imagenes/iconos_formulario/ubicacion.svg" style="margin-left: 50px" class="svg"
                         width="25" height="35">
                    <label for="direccion_hospital" style="color: #000000">Dirección </label>
                    <input  type="text" class="form-control" name="direccion_hospital"
                            value="{{old('direccion_hospital')}}"
                           id="direccion_hospital" placeholder="Dirección exacta del hospital o clínica médica"><br>
                </div>
                <br>

                <div class="col-md-5 justify-content-center"><br>
                    <img src="/imagenes/iconos_formulario/map.svg" style="margin-left: 50px" class="svg" width="25"
                         height="35">
                    <label for="departamento" style="color: #000000">Departamento</label>
                    <select class="form-control" name="departamento">
                        <option value="colon" @if(old('departamento') === "colon") selected='selected' @endif>Colón</option>
                        <option value="comayagua" @if(old('departamento') === "comayagua") selected='selected' @endif>Comayagua</option>
                        <option value="copan" @if(old('departamento') === "copan") selected='selected' @endif>Copán</option>
                        <option value="cortes" @if(old('departamento') === "cortes") selected='selected' @endif>Cortés</option>
                        <option value="choluteca" @if(old('departamento') === "choluteca") selected='selected' @endif>Choluteca</option>
                        <option value="paraiso" @if(old('departamento') === "paraiso") selected='selected' @endif>El Paraíso</option>
                        <option value="morazan" @if(old('departamento') === "morazan") selected='selected' @endif>Francisco Morazán</option>
                        <option value="isla" @if(old('departamento') === "isla") selected='selected' @endif>Islas de la Bahía</option>
                        <option value="gracias" @if(old('departamento') === "gracias") selected='selected' @endif>Gracias a Dios</option>
                        <option value="yoro" @if(old('departamento') === "yoro") selected='selected' @endif>Yoro</option >
                        <option value="olancho" @if(old('departamento') === "olancho") selected='selected' @endif>Olancho</option>
                        <option value="ocotepeque" @if(old('departamento') === "ocotepeque") selected='selected' @endif>Ocotepeque</option>
                        <option value="lempira" @if(old('departamento') === "lempira") selected='selected' @endif>Lempira</option>
                        <option value="intibuca" @if(old('departamento') === "intibuca") selected='selected' @endif @if(old('departamento') === "intibuca") selected='selected' @endif>Intibucá</option>
                        <option value="paz" @if(old('departamento') === "paz") selected='selected' @endif>La Paz</option>
                        <option value="valle" @if(old('departamento') === "valle") selected='selected' @endif>Valle</option>
                    </select><br>
                </div><br>
                <div class="col-md-5 justify-content-center"><br>
                    <img src="/imagenes/iconos_formulario/usuario.svg" style="margin-left: 50px" class="svg" width="25"
                         height="35">
                    <label for="Medico" style="color: #000000">Nombre del Doctor o Doctora</label>
                    <input type="text" class="form-control" name="medico"
                           value="{{old('medico')}}"
                           id="medico" placeholder="Nombre completo del o la Médico"><br>
                </div><br>

                <div class="col-md-5 justify-content-center"><br>
                    <img src="/imagenes/iconos_formulario/doctor.svg" style="margin-left: 50px" class="svg" width="25"
                         height="35">
                    <label for="especialista" style="color: #000000">Especialista en</label>
                    <input  type="text" class="form-control" name="especialista"
                            value="{{old('especialista')}}"
                           id="especialista" placeholder="Especialidad del doctor o doctora"><br>
                </div><br>

                <?php $actual = date("d-m-Y");?>
                <div class="col-md-5 justify-content-center"><br>
                    <img src="/imagenes/iconos_formulario/calendario.svg" style="margin-left: 50px" class="svg"
                         width="25" height="35">
                    <label style="color: #000000" for="fecha_actual">Fecha Actual</label>
                    <input type="date"  value="{{old('fecha_actual')}}"
                           min="<?php echo date('Y-m-d', strtotime($actual . "- 21 year"));?>"
                           max="<?php echo date('Y-m-d', strtotime($actual .``. " 0 year"));?>"
                           class="form-control" name="fecha_actual"><br>
                </div><br>

                <div class="col-md-5 justify-content-center"><br>
                    <img src="/imagenes/iconos_formulario/usuario.svg" style="margin-left: 50px" class="svg" width="25"
                         height="35">
                    <label for="nombres_paciente" style="color: #000000">Nombre del paciente</label><br>
                    <input  type="text" class="form-control" name="nombres_paciente"
                            value="{{old('nombres_paciente')}}"
                           id="nombres_paciente" placeholder="Nombres del paciente"><br>
                </div>
                <br>

                <div class="col-md-5 justify-content-center"><br>
                    <img src="/imagenes/iconos_formulario/usuario.svg" style="margin-left: 50px" class="svg" width="25"
                         height="35">
                    <label for="apellidos_paciente" style="color: #000000">Apellidos del Paciente</label>
                    <input type="text" class="form-control" name="apellidos_paciente"
                           value="{{old('apellidos paciente')}}"
                           id="apellidos_paciente" placeholder="Apellidos del paciente"><br>
                </div>
                <br>

                <?php $fechap = date("d-m-Y");?>
                <div class="col-md-5 justify-content-center"><br>
                    <img src="/imagenes/iconos_formulario/calendario.svg" style="margin-left: 50px" class="svg"
                         width="25" height="35">
                    <label for="fecha_paciente" style="color: #000000">Fecha de Nacimiento</label>
                    <input  type="date" class="form-control"
                            value="{{old('fecha_paciente')}}" name="fecha_paciente"
                            min="<?php echo date('Y-m-d', strtotime($fechap . "- 21 year"));?>"
                            max="<?php echo date('Y-m-d', strtotime($fechap .``. " 0 year"));?>"
                           id="fecha_paciente"><br>
                </div><br>

                <div class="col-md-5 justify-content-center"><br>
                    <img src="/imagenes/iconos_formulario/grupo-de-edad.svg" style="margin-left: 50px" class="svg"
                         width="25" height="35">
                    <label for="edad_paciente" style="color: #000000">Edad del Paciente</label>
                    <input   class="form-control" name="edad_paciente"
                            type="number" min="0" pattern="^[0-9]+"
                            value="{{old('edad_paciente')}}"
                           id="edad_paciente" placeholder="Edad del paciente"><br>
                </div>
                    <br>
                <div class="col-md-10 justify-content-center"><br>
                    <img src="/imagenes/iconos_formulario/sexo.svg" style="margin-left: 50px" class="svg" width="25"
                         height="35">
                    <label for="sexo_paciente" style="color: #000000">Sexo</label>
                    <select style="" class="form-control" name="sexo_paciente">
                        <option value="femenino" @if(old('sexo') === "femenino") selected='selected' @endif>Femenino</option>
                        <option  value="masculino"
                                 @if(old('sexo') === "masculino") selected='selected' @endif>Masculino</option>
                    </select><br>
                </div>
                <br>


                <div class="col-md-10 justify-content-center" ><br>
                    <img src="/imagenes/iconos_formulario/map.svg" style="margin-left: 50px" class="svg" width="25"
                         height="35">
                    <label for="direccion_paciente" style="color: #000000">Domicilio</label>
                    <span class="col-md-10 col-md-offset-10 text-center">
        <textarea class="form-control" id="direccion_paciente" name="direccion_paciente"
                  placeholder="Dirección actual del paciente"
                  rows="2">{{old('direccion_paciente')}}</textarea><br>
                    </span></div>
                <br>


                <div class="col-md-10 justify-content-center"><br>
                    <img src="/imagenes/iconos_formulario/fiebre.svg" style="margin-left: 50px" class="svg" width="25"
                         height="35">
                    <label for="enfermedad_paciente" style="color: #000000">Enfermedad o padecimiento </label>
                    <span class="col-md-10 col-md-offset-10 text-center">
        <textarea class="form-control" id="enfermedad_paciente" name="enfermedad_paciente"

                  placeholder="Describa la enfermedad o padecimiento"
                  srows="2">{{old('enfermedad_paciente')}}</textarea><br>
                    </span></div>
                <br>

                <div class="col-md-10 justify-content-center"><br>
                    <img src="/imagenes/iconos_formulario/medicamento.svg" style="margin-left: 50px" class="svg"
                         width="25" height="35">
                    <label for="tratamiento_paciente" style="color: #000000">Tratamiento</label>
                    <span class="col-md-10 col-md-offset-10 text-center">
        <textarea class="form-control" id="tratamiento_paciente" name="tratamiento_paciente"
                  placeholder="Describa el tratamiento que necesita o indicaciones médicas" rows="2">{{old('tratamiento_paciente')}}</textarea><br>
                    </span></div>
                <br>
            </div>
                <div class="trans text-center">
                <button type="submit" class="btn btn-outline-success"><i class="fas fa-save"></i>Guardar</button>
            </div>
            <br>
            <br>
            <script src="/js/jquery-3.2.1.min.js"></script>
            <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

        </form>
    </div>
    </body>
    <br>
    <br>
    </section>
@endsection
