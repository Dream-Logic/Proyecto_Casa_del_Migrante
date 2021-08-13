@extends ('PlantillaMadre.menu_inicio')
@section('titulo', 'Editar Ficha Médica')
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

        <div class="" class="table-responsive" style="-moz-box-shadow: 0px 5px 3px 3px rgba(194,194,194,1);
    box-shadow: 0px 5px 3px 3px rgba(194,194,194,1);">
            <div class="card-header" style="background-color: #4cd213">
        <label class="card-title">Editar Datos Personales del Paciente</label>
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

            <form method="post" action="{{route('ficha.update',["id"=>$ficha->id])}}">
                @method('PUT')
                @csrf
                    <br>
                <a class="sr-only sr-only-focusable" href="#content">Skip to main content</a>
                <div class="form-row justify-content-center">
                    <div class="col-md-5 justify-content-center"><br>
                        <img src="/imagenes/iconos_formulario/hospital.svg" style="margin-left: 50px" class="svg" width="25" height="35">
                        <label for="nombre_hospital">Hospital o Clínica Médica</label>
                        <input type="text" class="form-control" name="nombre_hospital" maxlength="100"
                               id="nombre_hospital" placeholder="Nombre del Hospital o clínica"
                               value="{{$ficha->nombre_hospital}}"><br>
                    </div>
                    <br>

                    <div class="col-md-5 justify-content-center"><br>
                        <img src="/imagenes/iconos_formulario/ubicacion.svg" class="svg" style="margin-left: 50px" width="25" height="35">
                        <label for="direccion_hospital">Dirección</label>
                        <input type="text" class="form-control" name="direccion_hospital" maxlength="100"
                               id="dieccion_hospital" placeholder="Direccion del Hospital"
                               value="{{$ficha->direccion_hospital}}"><br>
                    </div>
                    <br>


                    <div class="col-md-5 justify-content-center"><br>
                        <img src="/imagenes/iconos_formulario/map.svg" class="svg"  style="margin-left: 50px" width="25" height="35">
                        <label for="departamento">Departamento</label><br>
                        <select class="form-control" name="departamento">
                            <option value="colon" @if($ficha->departamento === "colon") selected='selected' @endif>
                                Colón
                            </option>
                            <option value="comayagua" @if($ficha->departamento === "comayagua") selected='selected' @endif>
                                Comayagua
                            </option>
                            <option value="copan" @if($ficha->departamento === "copan") selected='selected' @endif>
                                Copán
                            </option>
                            <option value="cortes" @if($ficha->departamento === "cortes") selected='selected' @endif>
                                Cortés
                            </option>
                            <option value="choluteca" @if($ficha->departamento === "choluteca") selected='selected' @endif>
                                Choluteca
                            </option>
                            <option value="paraiso" @if($ficha->departamento === "paraiso") selected='selected' @endif>
                                El Paraíso
                            </option>
                            <option value="morazan" @if($ficha->departamento === "morazan") selected='selected' @endif>
                                Francisco Morazán
                            </option>
                            <option value="isla" @if($ficha->departamento === "isla") selected='selected' @endif>
                                Islas de la Bahía
                            </option>
                            <option value="gracias" @if($ficha->departamento === "gracias") selected='selected' @endif>
                                Gracias a Dios
                            </option>
                            <option value="yoro" @if($ficha->departamento === "yoro") selected='selected' @endif>
                                Yoro
                            </option>
                            <option value="olancho" @if($ficha->departamento === "olancho") selected='selected' @endif>
                                Olancho
                            </option>
                            <option value="ocotepeque" @if($ficha->departamento === "ocotepeque") selected='selected' @endif>
                                Ocotepeue
                            </option>
                            <option value="lempira" @if($ficha->departamento === "lempira") selected='selected' @endif>
                                Lempira
                            </option>
                            <option value="intibuca" @if($ficha->departamento === "intibuca") selected='selected' @endif>
                                Intibucá
                            </option>
                            <option value="paz" @if($ficha->departamento === "paz") selected='selected' @endif>
                                La Paz
                            </option>
                            <option value="valle" @if($ficha->departamento === "valle") selected='selected' @endif>
                                Valle
                            </option>
                        </select><br>
                    </div><br>


                    <div class="col-md-5 justify-content-center"><br>
                        <img src="/imagenes/iconos_formulario/usuario.svg" class="svg"
                             style="margin-left: 50px"  width="25" height="35">
                        <label for="medico">Medico</label>
                        <input type="text" class="form-control" name="medico" maxlength="100"
                               id="medico" placeholder="Nombre del Médico" value="{{$ficha->medico}}"><br>
                    </div><br>

                    <div class="col-md-5 justify-content-center"><br>
                        <img src="/imagenes/iconos_formulario/doctor.svg" class="svg"  style="margin-left: 50px" width="25" height="35">
                        <label for="especialista" style="color: #000000">Especialista en</label><br>
                        <input type="text" class="form-control" name="especialista" maxlength="100"
                               id="especialista" placeholder="Especialidad del doctor o doctora"
                               value="{{$ficha->especialista}}"><br>
                    </div><br>

                    <?php $actuals = date("d-m-Y");?>
                    <div class="col-md-5 justify-content-center"><br>
                        <img src="/imagenes/iconos_formulario/calendario.svg"
                             class="svg" style="margin-left: 50px"  width="25" height="35">
                        <label style="color: #000000" for="fecha_actual">Fecha Actual</label>
                        <input type="date" class="form-control" name="fecha_actual"
                               id="fecha_actual" value="{{$ficha->fecha_actual}}"
                               min="<?php echo date('Y-m-d', strtotime($actuals . "- 21 year"));?>"
                               max="<?php echo date('Y-m-d', strtotime($actuals .``. " 0 year"));?>"><br>
                    </div><br>

                    <div class="col-md-5 justify-content-center"><br>
                        <img src="/imagenes/iconos_formulario/usuario.svg" style="margin-left: 50px"  class="svg" width="25" height="35">
                        <label style="color: #000000" for="nombres_paciente">Nombre del Paciente</label>
                        <input type="text" class="form-control" name="nombres_paciente" maxlength="100"
                               id="nombres_paciente" placeholder="Nombre completo del paciente"
                               value="{{$ficha->nombres_paciente}}"><br>
                    </div><br>


                    <div class="col-md-5 justify-content-center"><br>
                        <img src="/imagenes/iconos_formulario/usuario.svg" class="svg" style="margin-left: 50px"  width="25" height="35">
                        <label style="color: #000000" for="apellidos_paciente">Apellidos del Paciente</label>
                        <input type="text" class="form-control" name="apellidos_paciente" maxlength="100"
                               id="apellidos_paciente" placeholder="Apellido completo del paciente"
                               value="{{$ficha->apellidos_paciente}}"><br>
                    </div><br>

                    <?php $fechan = date("d-m-Y");?>
                    <div class="col-md-5 justify-content-center"><br>
                        <img src="/imagenes/iconos_formulario/calendario.svg" class="svg"
                             style="margin-left: 50px"  width="25" height="35">
                        <label style="color: #000000" for="fecha_paciente">Fecha de nacimiento</label>
                        <input type="date" class="form-control" name="fecha_paciente"
                               id="fecha_paciente" value="{{$ficha->fecha_paciente}}"
                               min="<?php echo date('Y-m-d', strtotime($fechan . "- 21 year"));?>"
                               max="<?php echo date('Y-m-d', strtotime($fechan . " 0 year"));?>">><br>
                    </div><br>

                    <div class="col-md-5 justify-content-center"><br>
                        <img src="/imagenes/iconos_formulario/grupo-de-edad.svg"style="margin-left: 50px"
                             class="svg" width="25" height="35">
                        <label style="color: #000000" for="fecha_paciente">Edad del paciente</label>
                        <input  type="number" type="number" min="0" pattern="^[0-9]+"
                                class="form-control" name="edad_paciente"
                               id="edad_paciente" value="{{$ficha->edad_paciente}}"><br>
                    </div><br>

                    <div class="col-md-5 justify-content-center"><br>
                        <img src="/imagenes/iconos_formulario/sexo.svg" class="svg" style="margin-left: 50px"
                             width="25" height="35">
                        <label for="sexo_paciete">sexo</label>
                        <select class="form-control" name="sexo_paciente">
                            <option value="femenino"
                                    @if($ficha->sexo_paciente === "femenino") selected='selected' @endif>
                                Femenino
                            </option>
                            <option value="masculino"
                                    @if($ficha->sexo_paciente === "masculino") selected='selected' @endif>
                                Masculino
                            </option><br>
                        </select><br>
                    </div>
                    <br>


                    <div class="col-md-5 justify-content-center"><br>
                        <img src="/imagenes/iconos_formulario/map.svg" class="svg" style="margin-left: 50px"
                             width="25" height="35">
                        <label for="direccion_paciente">Domicilio</label>
                        <input type="text" class="form-control" name="direccion_paciente" maxlength="100"
                               value="{{$ficha->direccion_paciente}}"
                               id="direccion_paciente" placeholder="Dirección actual del paciente"><br>
                    </div>
                    <br>

                    <div class="col-md-10 justify-content-center"><br>
                        <img src="/imagenes/iconos_formulario/fiebre.svg" class="svg"
                             style="margin-left: 50px" width="50" height="35">
                        <label for="enfermedad_paciente">Enfermedad</label>
                        <span class="col-md-10 col-md-offset-10 text-center">
                       <textarea class="form-control" id="enfermedad_paciente" name="enfermedad_paciente" maxlength="150"
                                 placeholder="Describa la enfermedad o padecimiento">{{$ficha->enfermedad_paciente}}</textarea><br>
                        </span>
                    </div><br>

                    <div class="col-md-10 justify-content-center"><br>
                        <img src="/imagenes/iconos_formulario/medicamento.svg" class="svg"
                             style="margin-left: 50px" width="25" height="35">
                        <label for="tratamiento_paciente">Tratamiento</label>
                        <span class="col-md-10 col-md-offset-10 text-center">
                      <textarea class="form-control" id="tratamiento_paciente" name="tratamiento_paciente" maxlength="150"
                  placeholder="Describa el tratamiento que necesita o inidcaciones médicas"
                  rows="2">{{$ficha->tratamiento_paciente}}</textarea><br>
                </span></div>
                    <br>
                </div>

                        <div class="trans text-center">
                    <button type="submit" class="btn btn-sm btn-outline-success"><i class="fas fa-save"></i> Guardar</button>
                        </div><br>

            </form>
        </div><br>

    <script src="/js/jquery-3.2.1.min.js"></script>
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
    </div>




</body><br>


</section>
@endsection
