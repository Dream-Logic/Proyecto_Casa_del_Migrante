@extends ('PlantillaMadre.menu_inicio')
@section('titulo', 'Editar Ficha Médica')
@section('contenido')

    <br><br><br>
    <div class="card-header" style="background-color: #4dc0b5; color:black" >
        <label class="card-title">Editar Datos Personales del paciente</label>
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
            <form method="post" action="{{route('ficha.update',["id"=>$ficha->id])}}">
                @method('PUT')
                @csrf

                <a class="sr-only sr-only-focusable" href="#content">Skip to main content</a>
                <div class="form-row">

                    <div class="col-5"><br>
                        <img src="/imagenes/iconos_formulario/hospital.svg" class="svg" width="35" height="35">
                        <label for="nombre_hospital">Hospital o Clínica Médica</label><br>
                        <input type="text" class="form-control" name="nombre_hospital"
                               id="nombre_hospital" placeholder="Nombre del Hospital o clínica"
                               value="{{$ficha->nombre_hospital}}"><br>
                    </div>
                    <br>

                    <div class="col-5"><br>
                        <img src="/imagenes/iconos_formulario/ubicacion.svg" class="svg" width="35" height="35">
                        <label for="direccion_hospital">Dirección</label><br>
                        <input type="text" class="form-control" name="direccion_hospital"
                               id="dieccion_hospital" placeholder="Direccion del Hospital"
                               value="{{$ficha->direccion_hospital}}">
                    </div>
                    <br>


                    <div class="col-5">
                        <img src="/imagenes/iconos_formulario/map.svg" class="svg" width="35" height="35">
                        <label for="departamento">Departamento</label><br>
                        <input type="text" class="form-control" name="departamento"
                               id="departamento" value="{{$ficha->departamento}}"><br>
                    </div>


                    <div class="col-5">
                        <img src="/imagenes/iconos_formulario/usuario.svg" class="svg" width="35" height="35">
                        <label for="medico">Medico</label><br>
                        <input type="text" class="form-control" name="medico"
                               id="medico" placeholder="Nombre del Médico" value="{{$ficha->medico}}"><br>
                    </div>

                    <div class="col-5">
                        <img src="/imagenes/iconos_formulario/doctor.svg" class="svg" width="35" height="35">
                        <label for="especialista" style="color: #000000">Especialista en</label><br>
                        <input type="text" class="form-control" name="especialista"
                               id="especialista" placeholder="Especialidad del doctor o doctora"
                               value="{{$ficha->especialista}}"><br>
                    </div>


                    <div class="col-5">
                        <img src="/imagenes/iconos_formulario/calendario.svg" class="svg" width="35" height="35">
                        <label style="color: #000000" for="fecha_actual">Fecha Actual</label><br>
                        <input type="date" class="form-control" name="fecha_actual"
                               id="fecha_actual" value="{{$ficha->fecha_actual}}"><br>
                    </div>

                    <div class="col-5">
                        <img src="/imagenes/iconos_formulario/usuario.svg" class="svg" width="35" height="35">
                        <label style="color: #000000" for="nombres_paciente">Nombre del Paciente</label><br>
                        <input type="text" class="form-control" name="nombres_paciente"
                               id="nombres_paciente" placeholder="Nombre completo del paciente"
                               value="{{$ficha->nombres_paciente}}"><br>
                    </div>


                    <div class="col-5">
                        <img src="/imagenes/iconos_formulario/usuario.svg" class="svg" width="50" height="35">
                        <label style="color: #000000" for="apellidos_paciente">Apellidos del Paciente</label><br>
                        <input type="text" class="form-control" name="apellidos_paciente"
                               id="apellidos_paciente" placeholder="Apellido completo del paciente"
                               value="{{$ficha->apellidos_paciente}}"><br>
                    </div>

                    <div class="col-5">
                        <img src="/imagenes/iconos_formulario/calendario.svg" class="svg" width="50" height="35">
                        <label style="color: #000000" for="fecha_paciente">Fecha de nacimiento</label><br>
                        <input type="date" class="form-control" name="fecha_paciente"
                               id="fecha_paciente" value="{{$ficha->fecha_paciente}}"><br>
                    </div>

                    <div class="col-5">
                        <img src="/imagenes/iconos_formulario/grupo-de-edad.svg" class="svg" width="50" height="35">
                        <label style="color: #000000" for="fecha_paciente">Edad del paciente</label><br>
                        <input type="number" class="form-control" name="edad_paciente"
                               id="edad_paciente" value="{{$ficha->edad_paciente}}"><br>
                    </div>

                    <div class="col-5">
                        <img src="/imagenes/iconos_formulario/sexo.svg" class="svg" width="50" height="35">
                        <label for="sexo_paciete">sexo</label><br>
                        <select class="form-control" name="sexo_paciente">
                            <option value="femenino"
                                    @if($ficha->sexo_paciente === "femenino") selected='selected' @endif>
                                Femenino
                            </option>
                            <option value="masculino"
                                    @if($ficha->sexo_paciente === "masculino") selected='selected' @endif>
                                Masculino
                            </option>
                        </select><br>
                    </div>
                    <br>


                    <div class="col-5">
                        <img src="/imagenes/iconos_formulario/map.svg" class="svg" width="50"
                             height="35">
                        <label for="direccion_paciente">Domicilio</label><br>
                        <input type="text" class="form-control" name="direccion_paciente"
                               value="{{$ficha->direccion_paciente}}"
                               id="direccion_paciente" placeholder="Dirección actual del paciente"><br>
                    </div>
                    <br>


                    <div class="col-5">
                        <img src="/imagenes/iconos_formulario/fiebre.svg" class="svg" width="50" height="35">
                        <label for="enfermedad_paciente">Enfermedad</label>
                        <input type="text" class="form-control" name="enfermedad_paciente"
                               value="{{$ficha->enfermedad_paciente}}"
                               id="enfermedad_paciente" placeholder="Describa la enfermedad o padecimiento"><br>
                    </div>
                    <br>

                    <div class="col-11">
                        <img src="/imagenes/iconos_formulario/medicamento.svg" class="svg" width="50" height="35">
                        <label for="tratamiento_paciente">Tratamiento</label>
                        <span class="col-md-5 col-md-offset-10 text-center">
        <textarea class="form-control" id="tratamiento_paciente" name="tratamiento_paciente"
                  placeholder="Describa el tratamiento que necesita o inidcaciones médicas"
                  rows="2">{{$ficha->tratamiento_paciente}}</textarea><br>
                </span></div>
                    <br>


                    <button type="submit" class="btn btn-sm btn-success"><i class="fas fa-save"></i> Guardar</button>

                </div>
            </form>
        </div>
    <script src="/js/jquery-3.2.1.min.js"></script>
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
    </div>








@endsection
