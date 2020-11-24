@extends('PlantillaMadre.Plantilla_Madre_Listado')
@section('titulo','Lista de Huespedes')
@section('contenido')

    <div class="botonesD">
    <input class="btn btn-warning" type="button" value="Imprimir" onclick="window.print()">

    </div><br>

         <h1>
             Detalles de {{$huesped->nombres}}
         </h1>

    <table class="table">
        <thead class="">
        <tr >
            <th scope="col" ><h3>Campo</h3></th>
            <th scope="col"><h3>Valor</h3></th>
        </tr>
        </thead>
        <tbody>
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

        <th scope="row">Pasaporte</th>
        <td>{{ $huesped->pasaporte }}</td>
        </tr>
        <tr>
            <th scope="row">Lugar de Nacimiento</th>
            <td>{{ $huesped->nacimiento}}</td>
        </tr>

        <th scope="row">Dirección</th>
        <td>{{ $huesped->direccion }}</td>
        </tr>
        <tr>
            <th scope="row">Signos Físicos</th>
            <td>{{ $huesped->signosFisicos }}</td>
        </tr>
        <th scope="row">Enfermedad o Padecimiento</th>
        <td>{{ $huesped->enfermedad }}</td>
        </tr>
        <tr>
            <th scope="row">Tratamiento</th>
            <td>{{ $huesped->tratamiento }}</td>
        </tr>


        <tr>
              <th> <h3>Datos Personales de la Madre y/o Resposable Legal</h3></th>
             <th>  </th>
          </tr>

                <tr>
                    <th scope="row">Nombres</th>
                    <td>{{ $huesped->nombresMadre}}</td>
                </tr>
                <tr>
                    <th scope="row">Apellidos</th>
                    <td>{{ $huesped->apellidosMadre}}</td>
                </tr>
                <tr>
                    <th scope="row">Fecha de Nacimiento</th>
                    <td>{{ $huesped->fnacimientoMadre }}</td>
                </tr>
            <tr>
        <tr>
            <th scope="row">Dirección</th>
            <td>{{ $huesped->direccionMadre }}</td>
        </tr>
        <tr>
            <th scope="row">Trabaja</th>
            <td>{{ $huesped->trabajaMadre}}</td>
        </tr>
        <tr>
            <th scope="row">Profesión u Oficio</th>
            <td>{{ $huesped->profesionOficio }}</td>
        </tr>
        <tr>
        <tr>
            <th scope="row">Identidad</th>
            <td>{{ $huesped->identidadMadre }}</td>
        </tr>
        <tr>
            <th scope="row">Pasaporte</th>
            <td>{{ $huesped->pasaporteMadre }}</td>
        </tr>
        <tr>
        <th scope="row">Estado Civil</th>
        <td>{{ $huesped->civil }}</td>
        </tr>
        <tr>
        <th scope="row">Teléfono</th>
        <td>{{ $huesped->telefono }}</td>
        </tr>

        <tr>
            <th> <h3>Datos Personales del Padre</h3></th>
            <th>  </th>
        </tr>

        <tr>
            <th scope="row">Nombres</th>
            <td>{{ $huesped->nombresPadre}}</td>
        </tr>
        <tr>
            <th scope="row">Apellidos</th>
            <td>{{ $huesped->apellidosPadre}}</td>
        </tr>
        <tr>
            <th scope="row">Fecha de Nacimiento</th>
            <td>{{ $huesped->fnacimientoPadre }}</td>
        </tr>
        <tr>
        <tr>
            <th scope="row">Dirección</th>
            <td>{{ $huesped->direccionPadre }}</td>
        </tr>
        <tr>
            <th scope="row">Trabaja</th>
            <td>{{ $huesped->trabajaPadre}}</td>
        </tr>
        <tr>
            <th scope="row">Profesión u Oficio</th>
            <td>{{ $huesped->profesionOficioPadre }}</td>
        </tr>
        <tr>
        <tr>
            <th scope="row">Identidad</th>
            <td>{{ $huesped->identidadPadre }}</td>
        </tr>
        <tr>
            <th scope="row">Pasaporte</th>
            <td>{{ $huesped->pasaportePadre }}</td>
        </tr>
        <tr>
            <th scope="row">Estado Civil</th>
            <td>{{ $huesped->civilPadre }}</td>
        </tr>
        <tr>
            <th scope="row">Teléfono</th>
            <td>{{ $huesped->telefonoPadre }}</td>
        </tr>



        <tr>
            <th> <h3>Narración de los Hechos</h3></th>
            <th>  </th>
        </tr>

        <tr>
            <th scope="row">Vulneración de derechos</th>
            <td>{{ $huesped->vulneracion}}</td>
        </tr>
        <tr>
            <th scope="row">Medidas de protección</th>
            <td>{{ $huesped->proteccion}}</td>
        </tr>
        <tr>

        <tr>
            <th> <h3>Personal Técnico Responsable</h3></th>
            <th>  </th>
        </tr>

        <tr>
            <th scope="row">Nombres</th>
            <td>{{ $huesped->nombretecnico}}</td>
        </tr>
        <tr>
            <th scope="row">Apellidos</th>
            <td>{{ $huesped->apellidotecnico}}</td>
        </tr>
        <tr>
            <th scope="row">Fecha</th>
            <td>{{ $huesped->fecha}}</td>
        </tr>
        <tr>
            <th scope="row">Hora</th>
            <td>{{ $huesped->hora}}</td>
        </tr>


        </tbody>
    </table>
    </h1>
@endsection
