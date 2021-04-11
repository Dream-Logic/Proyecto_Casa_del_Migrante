@extends ('PlantillaMadre.menu_inicio')
@section('titulo', 'Ficha de Ingreso Huésped')
@section('contenido')
    <br>
    <br>
    <br>
    <head>
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
    </head>
    <body>
    <div class="card">
        <div class="card-header" style="background-color: #4dc0b5">
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
        <div class="form-row">

            <div class="col-5"><br>
                <img src="/imagenes/iconos_formulario/hospital.svg" class="svg" width="35" height="35">
                <label for="nombre_hspital" style="color: #000000">Hospital o Clínica Médica</label><br>
                <input type="text" class="form-control" name="nombre_hospital"
                       id="nombre_hospital" placeholder="Nombres del hospital o clínica médica"><br>
            </div>
            <br>

            <div class="col-5"><br>
                <img src="/imagenes/iconos_formulario/ubicacion.svg" class="svg" width="35" height="35">
                <label for="direccion_hospital" style="color: #000000">Dirección </label><br>
                <input type="text" class="form-control" name="direccion_hospital"
                       id="direccion_hospital" placeholder="Dirección exacta del Hospital o clínica médica">
            </div>
            <br>


            <div class="col-5">
                <img src="/imagenes/iconos_formulario/map.svg" class="svg" width="35"
                     height="35">
                <label for="departamento" style="color: #000000">Departamento</label><br>
                <select class="form-control" name="departamento">
                    <option value="atlantida">Atlántida</option>
                    <option value="colon">Colón</option>
                    <option value="comayagua">Comayagua</option>
                    <option value="copan">Copán</option>
                    <option value="cortes">Cortés</option>
                    <option value="choluteca">Choluteca</option>
                    <option value="paraiso">El Paraíso</option>
                    <option value="cortes">Francisco Morazán</option>
                    <option value="isla">Islas de la Bahía</option>
                    <option value="gracias">Gracias a Dios</option>
                    <option value="yoro">Yoro</option>
                    <option value="olancho">Olancho</option>
                    <option value="ocotepeque">Ocotepeque</option>
                    <option value="lempira">Lempira</option>
                    <option value="intibuca">Intibucá</option>
                    <option value="paz">La Paz</option>
                    <option value="paz">Valle</option>
                </select><br>
            </div>
            <div class="col-5">
                <img src="/imagenes/iconos_formulario/usuario.svg" class="svg" width="35" height="35">
                <label for="Medico" style="color: #000000">Nombre del Doctor o Doctora</label><br>
                <input type="text" class="form-control" name="medico"
                       id="medico" placeholder="Nombre completo del o la Médico"><br>
            </div>
            <div class="col-5">
                <img src="/imagenes/iconos_formulario/doctor.svg" class="svg" width="35" height="35">
                <label for="especialista" style="color: #000000">Especialista en</label><br>
                <input type="text" class="form-control" name="especialista"
                       id="especialista" placeholder="Especialidad del doctor o doctora"><br>
            </div>


            <div class="col-5">
                <img src="/imagenes/iconos_formulario/calendario.svg" class="svg" width="35" height="35">
                <label style="color: #000000" for="fecha_actual">Fecha Actual</label><br>
                <input type="date" class="form-control" name="fecha_actual">
                <br>
            </div>
            <div class="col-5"><br>
                <img src="/imagenes/iconos_formulario/usuario.svg" class="svg" width="35" height="35">
                <label for="nombres_paciente" style="color: #000000">Nombre del paciente</label><br>
                <input type="text" class="form-control" name="nombres_paciente"
                       id="nombres_paciente" placeholder="Nombres del paciente"><br>
            </div>
            <br>

            <div class="col-5"><br>
                <img src="/imagenes/iconos_formulario/usuario.svg" class="svg" width="35" height="35">
                <label for="apellidos_paciente" style="color: #000000">Apellidos del Paciente</label><br>
                <input type="text" class="form-control" name="apellidos_paciente"
                       id="apellidos_paciente" placeholder="Apellidos del paciente">
            </div>
            <br>


            <div class="col-5">
                <img src="/imagenes/iconos_formulario/calendario.svg" class="svg" width="35" height="35">
                <label for="fecha_paciente" style="color: #000000">Fecha de Nacimiento</label><br>
                <input type="date" class="form-control" name="fecha_paciente"
                       id="fecha_paciente"><br>
            </div>

            <div class="col-5">
                <img src="/imagenes/iconos_formulario/grupo-de-edad.svg" class="svg" width="35" height="35">
                <label for="edad_paciente" style="color: #000000">Edad del Paciente</label><br>
                <input type="number" class="form-control" name="edad_paciente"
                       id="edad_paciente" placeholder="Edad del paciente"><br>
            </div>

            <div class="col-5">
                <img src="/imagenes/iconos_formulario/sexo.svg" class="svg" width="35" height="35">
                <label for="sexo_paciente" style="color: #000000">Sexo</label><br>
                <select class="form-control" name="sexo_paciente">
                    <option value="femenino">Femenino</option>
                    <option value="masculino">Masculino</option>
                </select><br>
            </div>
            <br>


            <div class="col-11">
                <img src="/imagenes/iconos_formulario/map.svg" class="svg" width="35" height="35">
                <label for="direccion_paciente" style="color: #000000">Domicilio</label>
                <span class="col-md-5 col-md-offset-10 text-center">
        <textarea class="form-control" id="direccion_paciente" name="direccion_paciente"
                  placeholder="Dirección actual del paciente" rows="2"></textarea><br>
                    </span></div>
            <br>


            <div class="col-11">
                <img src="/imagenes/iconos_formulario/fiebre.svg" class="svg" width="35" height="35">
                <label for="enfermedad_paciente" style="color: #000000">Enfermedad o padecimiento </label>
                <span class="col-md-5 col-md-offset-10 text-center">
        <textarea class="form-control" id="enfermedad_paciente" name="enfermedad_paciente"

                  placeholder="Describa la enfermedad o padecimiento" rows="2"></textarea><br>
                    </span></div>
            <br>


            <div class="col-11">
                <img src="/imagenes/iconos_formulario/medicamento.svg" class="svg" width="35" height="35">
                <label for="tratamiento_paciente" style="color: #000000">Tratamiento</label>
                <span class="col-md-5 col-md-offset-10 text-center">
        <textarea class="form-control" id="tratamiento_paciente" name="tratamiento_paciente"
                  placeholder="Describa el tratamiento que necesita o inidcaciones médicas" rows="2"></textarea><br>
                    </span></div>
            <br>

        </div>
        <div class="botones">
            <button type="submit" class="btn btn-sm btn-success"><i class="fas fa-save"></i>Guardar</button>
        </div>
        <br>
        <br>


    <br>
    <div class="card">
        <script src="/js/jquery-3.2.1.min.js"></script>
        <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
    </div>
    </body>


@endsection
