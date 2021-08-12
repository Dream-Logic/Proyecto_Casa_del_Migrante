<body >
@foreach($empleado as $personal)
    <div class="ver">
        <div class="table-responsive" style="-moz-box-shadow: 0px 5px 3px 3px rgba(194,194,194,1);
    box-shadow: 0px 5px 3px 3px rgba(194,194,194,1);">
            <table  class="table ruler-vertical table-hover mx-sm-0 table-bordered ">
                <thead class="mx-2" style="background-color: #0d95e8">
                <tr class="mx-4">
                    <th scope="col"><h6 style="  font-weight: bold;">Datos del Personal </h6></th>
                    <th scope="col"><h6 style="  font-weight: bold;">Detalles</h6></th>

                </tr>
                </thead>
                <tbody>
                <tr>
                    <th scope="row">Nombres</th>
                    <td>{{ $personal->nombres_personal}}</td>
                </tr>
                <tr>
                    <th scope="row">Apellidos</th>
                    <td>{{ $personal->apellidos_personal}}</td>
                </tr>
                <tr>
                    <th scope="row">Fecha de Nacimiento</th>
                    <td>{{ $personal->fnacimiento_personal }}</td>
                </tr>
                <tr>
                    <th scope="row">Edad</th>
                    <td>{{ $personal->edad_personal }}</td>
                </tr>

                <tr>
                    <th scope="row">Sexo</th>
                    <td>{{ $personal->sexo_personal}}</td>
                </tr>
                <tr>
                    <th scope="row">Identidad</th>
                    <td>{{ $personal->identidad_personal }}</td>
                </tr>
                <tr>
                    <th scope="row">Dirección</th>
                    <td>{{ $personal->direccion_personal}}</td>
                </tr>
                <tr>
                    <th scope="row">Profesión u Oficio</th>
                    <td>{{ $personal->profesionPersonal }}</td>
                </tr>
                <tr>
                    <th scope="row">Cargo</th>
                    <td>{{ $personal->cargo}}</td>
                </tr>
                <tr>
                    <th scope="row">Correo Electrónico</th>
                    <td>{{ $personal->email}}</td>
                </tr>
                <tr>
                    <th scope="row">Teléfono</th>
                    <td>{{ $personal->telefono_personal }}</td>
                </tr>



                <tr></tr>
                </tbody>
            </table>
        </div>
    </div>
@endforeach
</body>
</html>
