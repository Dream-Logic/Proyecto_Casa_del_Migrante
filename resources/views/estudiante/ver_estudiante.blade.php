@extends ('PlantillaMadre.menu_inicio')
@section('titulo', 'Datos del estudiante')
@section('contenido')
    <br>
    <br>
    <br>
    <section class="container">

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
        <form class="form-inline  my-lg-0 ml-auto"  style="background-color:
         #0d95e8;" >
            <label class="j" style="color: black; margin-top: 0px">
        Informacion de {{$estudiante->nombres_alumno}} {{$estudiante->apellidos_alumno}} </label>
        <div class="card-body d-flex justify-content-lg-end align-items-lg-end" >
            <a class="btn btn-warning "
               onclick="window.print()" >
                <img src="/imagenes/iconos/impre.png" class="svg" width="25px" title="Imprimir">
            </a>
        </div>
        </form>
    <br>
    <br>
    <div class="ver">
        <div class="table-responsive" style="-moz-box-shadow: 0px 5px 3px 3px rgba(194,194,194,1);
    box-shadow: 0px 5px 3px 3px rgba(194,194,194,1);">
            <table  class="table ruler-vertical table-hover mx-sm-0 table-bordered ">
                <thead class="mx-2" style="background-color: #0d95e8">
                <tr class="mx-4">
                    <th scope="col"><h6 style="  font-weight: bold;">Datos de escolaridad del huesped</h6></th>
                    <th scope="col"><h6 style="  font-weight: bold;">Detalles</h6></th>

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
