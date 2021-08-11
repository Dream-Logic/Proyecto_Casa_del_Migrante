@extends ('PlantillaMadre.menu_inicio')
@section('titulo', 'Datos del empleado')
@section('contenido')
    <br><br><br>
    <section class="container">
        <head>
            <!-- CSRF Token -->
            <meta name="csrf-token" content="{{ csrf_token() }}">
            <meta charset="utf-8">
        </head>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
        <br>
    <form class="col-md-12" style="background-color:  #0d95e8; height: 60px; font-weight: bold; text-align: justify">
    <label class="j" style="color: black; padding: 3px; margin-top: 12px;">Información de {{$personal->nombres_personal}} {{$personal->apellidos_personal}} </label>
        <button  class="mr-sm-2 btn btn-warning float-right"  title="Imprimir"
                 style="margin-top: 4px"
                 type="button"   onclick="window.print()" >
            <img src="/imagenes/iconos/imprimir.svg" class="svg" width="25px"  title="Imprimir">
        </button>
    </form>
    <center>
        <div class="col-md-12 justify justify-content-center"><br>
            <div class="col-md-12 justify-content-center">
                <div class="form-group {{ $errors->has('imagen') ? ' has-error' : '' }}"style="width: 90%">
                    <img width="200px"  id="previewImagen" style="max-height:250px; margin-left: 35px"
                         src="{{"/foto/".$personal->imagen}}"/>

                    <label id="labelImagen" for="imagen" class="btn btn-large" >
                        <span style="font-size: 60px">
                        </span></label>
                    <input type="file" accept="image/*"
                           onchange="loadFile(event)"
                           @if($errors->has("imagen"))
                           style="display: none"
                           required
                           @endif
                           class="form-control"
                           style="opacity: 0" id="imagen"
                           name="imagen"
                    />
                </div>
            </div>
        </div>
    </center>
    <div class="ver">
       <div class="table-responsive" style="-moz-box-shadow: 0px 5px 3px 3px rgba(194,194,194,1);
    box-shadow: 0px 5px 3px 3px rgba(194,194,194,1);">
        <table  class="table ruler-vertical table-hover mx-sm-0 table-bordered ">
            <thead class="mx-2" style="background-color: #0d95e8">
            <tr class="mx-4">
                <th scope="col"><h6 style="  font-weight: bold;">Datos personales del Empleado</h6></th>
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





            </tbody>
        </table>
       </div>
        <br>
        <br>
        <script src="/js/jquery-3.2.1.min.js"></script>
    </div>
    <div class="footer-copyright text-center py-3" style="color: #0d95e8">
        Proyecto Casa del Migrante
    </div>
    </section>
@endsection
