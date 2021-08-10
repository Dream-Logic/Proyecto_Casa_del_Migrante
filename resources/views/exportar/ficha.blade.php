<html>

<head>
</head>


<body >
@foreach($medica as $ficha)
    <div class="ver">
        <div class="table-responsive" style="-moz-box-shadow: 0px 5px 3px 3px rgba(194,194,194,1);
    box-shadow: 0px 5px 3px 3px rgba(194,194,194,1);">
            <table  class="table ruler-vertical table-hover mx-sm-0 table-bordered ">
                <thead class="mx-4" style="background-color: #0d95e8">



                <tr class="mx-4" >

                    <th scope="col"><h6  style="  font-weight: bold;">Datos personales del Egresado</h6></th>

                </tr>
                </thead>
                <tbody style="">
                <tr>
                    <th scope="row">Hospital o Clínica Médica</th>
                    <td>{{ $ficha->nombre_hospital}}</td>
                </tr>
                <tr>
                    <th scope="row">Dirección </th>
                    <td>{{ $ficha->direccion_hospital}}</td>
                </tr>
                <tr>
                    <th scope="row">Departamento</th>
                    <td>{{ $ficha->departamento }}</td>
                </tr>
                <tr>
                    <th scope="row">Nombre del Doctor o Doctora</th>
                    <td>{{ $ficha->medico }}</td>
                </tr>

                <tr>
                    <th scope="row">Especialista en</th>
                    <td>{{ $ficha->especialista}}</td>
                </tr>
                <tr>
                    <th scope="row">Fecha Actual</th>
                    <td>{{ $ficha->fecha_actual }}</td>
                </tr>
                <tr>
                    <th scope="row">Nombre del paciente</th>
                    <td>{{ $ficha->nombres_paciente}}</td>
                </tr>
                <tr>
                    <th scope="row">Apellidos del Paciente</th>
                    <td>{{ $ficha->apellidos_paciente }}</td>
                </tr>
                <tr>
                    <th scope="row">Fecha de Nacimiento</th>
                    <td>{{ $ficha->fecha_paciente}}</td>
                </tr>
                <tr>
                    <th scope="row">Edad del Paciente</th>
                    <td>{{ $ficha->edad_paciente}}</td>
                </tr>
                <tr>
                    <th scope="row">Sexo</th>
                    <td>{{ $ficha->sexo_paciente }}</td>
                </tr>
                <tr>
                    <th scope="row">Domicilio</th>
                    <td>{{ $ficha->direccion_paciente }}</td>
                </tr>
                <tr>
                    <th scope="row">Enfermedad o padecimiento </th>
                    <td>{{ $ficha->enfermedad_paciente }}</td>
                </tr>
                <tr>
                    <th scope="row">Tratamiento</th>
                    <td>{{ $ficha->tratamiento_paciente }}</td>
                </tr>

                <tr></tr>
                </tbody>
            </table>
        </div>
    </div>
@endforeach
</body>
</html>
