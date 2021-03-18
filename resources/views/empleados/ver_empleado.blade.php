@extends ('PlantillaMadre.menu_inicio')
@section('titulo', 'Datos del huésped')
@section('contenido')
    <br>
    <br>
    <br>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <label class="card-title" style="color: black; height: 75px">Detalles de {{$personal->nombres_personal}} {{$personal->apellidos_personal}} </label>
    <input  class="btn btn-warning "  width="25" type="button" value="Imprimir" onclick="window.print()"
            style="margin-left: 850px" >
    <img src="/imagenes/iconos_formulario/imprimir.svg" class="svg"  style="margin-left: 1010px;border: 25px;height: 40px ;margin-top: -176px" >

    <div class="ver">
        <table class="table">
            <thead class="mx-4" style="background-color: #90bf23">
            <tr class="mx-4">
                <th scope="col"><h6>Datos personales del Empleado</h6></th>
                <th scope="col"><h6></h6></th>

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
        <script src="/js/jquery-3.2.1.min.js"></script>
    </div>
@endsection
