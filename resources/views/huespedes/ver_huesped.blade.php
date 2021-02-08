@extends ('PlantillaMadre.menu_inicio')
@section('titulo', 'Datos del huésped')
@section('contenido')
    <br>
    <br>
    <br>

    <div class="card-header">
        <label class="card-title">Datos Personales del Niño, Niña o Adolescente</label>

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

    <div class="card-header">

        <label class="" style="color: #0d95e8"> Detalles de {{$huesped->nombres}}</label>
        <input class="btn btn-warning" type="button" value="Imprimir" onclick="window.print()"
               style="margin-left: 850px">
    </div>

    <center>
        <div class="col-5" ><br>
            <div class="row" >
                <div class="form-group {{ $errors->has('imagen') ? ' has-error' : '' }}"style="width: 90%">
                    <img width="200px"  id="previewImagen" style="max-height:250px"
                         src="{{"/foto/".$huesped->imagen}}"
                         />

                    <label id="labelImagen" for="imagen" class="btn btn-large" ><span style="font-size: 60px">
                                                    </span></label>
                    <input type="file" accept="image/*"
                           onchange="loadFile(event)"
                           @if($errors->has("imagen"))
                           style="display: none"
                           required
                           @endif
                           class="form-control"
                           style="opacity: 0" id="imagen"
                           name="imagen"/>

                </div>


            </div>

        </div>
    </center>


    <div class="ver">
        <table class="table">
            <thead class="">
            <tr>
                <th scope="col"><h6 style="color: #0d95e8">Campo</h6></th>
                <th scope="col"><h6 style="color: #0d95e8">Valor</h6></th>
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


            @foreach($responsables as $responsable)
                <tr>
                    <th><h6 style="color: #0d95e8">Datos Personales de la Madre, Padre y/o Resposable Legal</h6></th>
                    <th></th>
                </tr>

                <tr>
                    <th scope="row">Parentesco</th>
                    <td>{{ $responsable->parentesco}}</td>

                </tr>

                <tr>
                    <th scope="row">Nombres</th>
                    <td>{{ $responsable->nombres}}</td>
                </tr>
                <tr>
                    <th scope="row">Apellidos</th>
                    <td>{{ $responsable->apellidos}}</td>
                </tr>
                <tr>
                    <th scope="row">Fecha de Nacimiento</th>
                    <td>{{ $responsable->fnacimiento}}</td>
                </tr>
                <tr>
                <tr>
                    <th scope="row">Dirección</th>
                    <td>{{ $responsable->direccion }}</td>
                </tr>
                <tr>
                    <th scope="row">Trabaja</th>
                    <td>{{ $responsable->trabaja}}</td>
                </tr>
                <tr>
                    <th scope="row">Profesión u Oficio</th>
                    <td>{{ $responsable->profesionOficio }}</td>
                </tr>
                <tr>
                <tr>
                    <th scope="row">Identidad</th>
                    <td>{{ $responsable->identidad }}</td>
                </tr>
                <tr>
                    <th scope="row">Pasaporte</th>
                    <td>{{ $responsable->pasaporte }}</td>
                </tr>
                <tr>
                    <th scope="row">Estado Civil</th>
                    <td>{{ $responsable->civil }}</td>
                </tr>
                <tr>
                    <th scope="row">Teléfono</th>
                    <td>{{ $responsable->telefono }}</td>
                </tr>


            @endforeach


            @foreach($narracion as $narra)
                <tr>
                    <th><h6 style="color: #0d95e8">Narración de los Hechos</h6></th>
                    <th></th>
                </tr>

                <tr>
                    <th scope="row">Vulneración de derechos</th>
                    <td>{{ $narra->vulneracion}}</td>
                </tr>
                <tr>
                    <th scope="row">Medidas de protección</th>
                    <td>{{ $narra->proteccion}}</td>
                </tr>
                <tr>

                <tr>

            @endforeach

            </tbody>
        </table>
        <script src="/js/jquery-3.2.1.min.js"></script>
    </div>
@endsection
