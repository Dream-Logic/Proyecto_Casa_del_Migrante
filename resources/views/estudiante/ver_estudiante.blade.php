@extends ('PlantillaMadre.menu_inicio')
@section('titulo', 'Datos del estudiante')
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
    <label class="card-title" style="color: black; height: 75px">Detalles de {{$estudiante->nombres_alumno}} {{$estudiante->apellidos_alumno}} </label>
    <input  class="btn btn-warning "  width="25" type="button" value="Imprimir" onclick="window.print()"
            style="margin-left: 850px" >
    <img src="/imagenes/iconos_formulario/imprimir.svg" class="svg"  style="margin-left: 1010px;border: 25px;height: 40px ;margin-top: -176px" >

    <div class="ver">
        <table class="table">
            <thead class="mx-4" style="background-color: #90bf23">
            <tr class="mx-4">
                <th scope="col"><h6>Detalles de escolaridad del Niño o Niña</h6></th>
                <th scope="col"><h6></h6></th>

            </tr>
            </thead>
            <tbody>
            <tr>
                <th scope="row">Nombres</th>
                <td>{{ $estudiante->nombres_alumno}}</td>
            </tr>
            <tr>
                <th scope="row">Apellidos</th>
                <td>{{ $estudiante->apellidos_alumno}}</td>
            </tr>
            <tr>
                <th scope="row">Grado</th>
                <td>{{ $estudiante->grado }}</td>
            </tr>
            <tr>
                <th scope="row">Carrera</th>
                <td>{{ $estudiante->carrera }}</td>
            </tr>

            <tr>
                <th scope="row">Nivel de escritura</th>
                <td>{{ $estudiante->escritura}}</td>
            </tr>
            <tr>
                <th scope="row">Nivel de lectura</th>
                <td>{{ $estudiante->lectura }}</td>
            </tr>
            <tr>
                <th scope="row">Habilidades Artisticas</th>
                <td>{{ $estudiante->habilidades}}</td>
            </tr>
            <tr>
                <th scope="row">Ejecuta algun instrumento</th>
                <td>{{ $estudiante->instrumento }}</td>
            </tr>



            </tbody>
        </table>
        <script src="/js/jquery-3.2.1.min.js"></script>
    </div>
@endsection
