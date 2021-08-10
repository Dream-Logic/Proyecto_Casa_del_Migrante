<html>

    <head>
    </head>


    <body >
    @foreach($egresado as $huesped)
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
                    <th scope="row">Nombres</th>
                    <td>{{ $huesped->nombres}}</td>
                </tr>
                <tr>
                    <th scope="row">Apellidos</th>
                    <td>{{ $huesped->apellidos}}</td>
                </tr>
                <tr>
                    <th scope="row">Fecha de Nacimiento</th>
                    <td>{{ $huesped->fnacimiento }}</td>
                </tr>
                <tr>
                    <th scope="row">Edad</th>
                    <td>{{ $huesped->edad }}</td>
                </tr>
                <tr>
                    <th scope="row">Fecha de Ingreso</th>
                    <td>{{ $huesped->ingreso }}</td>
                </tr>
                <tr>
                    <th scope="row">Fecha de Egreso</th>
                    <td>{{ $huesped->egreso }}</td>
                </tr>
                <tr>
                    <th scope="row">Sexo</th>
                    <td>{{ $huesped->sexo }}</td>
                </tr>
                <tr>
                    <th scope="row">Color de Cabello</th>
                    <td>{{ $huesped->cabello}}</td>
                </tr>
                <tr>
                    <th scope="row">Color de Ojos</th>
                    <td>{{ $huesped->ojos }}</td>
                </tr>
                <tr>
                    <th scope="row">Color de piel</th>
                    <td>{{ $huesped->piel }}</td>
                </tr>
                <tr>
                    <th scope="row">Identidad</th>
                    <td>{{ $huesped->identidad }}</td>
                </tr>
                <tr>
                    <th scope="row">Nacionalidad</th>
                    <td>{{ $huesped->nacionalidad }}</td>
                </tr>
                <tr>
                    <th scope="row">Pasaporte</th>
                    <td>{{ $huesped->pasaporte }}</td>
                </tr>
                <tr>
                    <th scope="row">Lugar de Nacimiento</th>
                    <td>{{ $huesped->nacimiento}}</td>
                </tr>
                <tr>
                    <th scope="row">Dirección</th>
                    <td>{{ $huesped->direccion }}</td>
                </tr>
                <tr>
                    <th scope="row">Signos Físicos</th>
                    <td>{{ $huesped->signosFisicos }}</td>
                </tr>
                <tr>
                    <th scope="row">Enfermedad o Padecimiento</th>
                    <td>{{ $huesped->enfermedad }}</td>
                </tr>
                <tr>
                    <th scope="row">Tratamiento</th>
                    <td>{{ $huesped->tratamiento }}</td>
                </tr>
<tr></tr>
                </tbody>
            </table>
        </div>
    </div>
    @endforeach
    </body>
</html>

