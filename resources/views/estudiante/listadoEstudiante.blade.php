@extends ('PlantillaMadre.Plantilla_menu_director')
@section('titulo', 'Listado del Estudiante')
@section('contenido')

    @if(session('mensaje'))
        <div class="alert alert-success">
            {{session('mensaje')}}
        </div>
    @endif
    <br>
    <br>
    <br>
    <head>
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
    </head>
    <div class="w3-container w3-teal mx-4" style="font-family: 'Raleway', sans-serif; text-align: center">
        <br>
        <h6 class="mt-3" style="font-size: 30px; color: black;"><b>Listado de Estudiantes</b></h6>
    </div>
    <br>
    <br>


    <form class="form-inline my-2  my-lg-0 ml-auto">
        <input class="form-control mr-sm-2 col-4" name="name" type="search" aria-label="Search" placeholder="Buscar">
        <button class="mr-sm-2 btn btn-success" type="submit" title="Buscar">
            <img src="/imagenes/iconos/busque.png" class="svg" width="20" title="Buscar">
        </button>
        <a href="{{url('/estudiante/lista')}}" class="btn btn-warning" title="Recargar listado de estudiantes">
            <img src="/imagenes/iconos/automatic_updates.png" class="svg" width="20" title="Recargar listado de estudiantes">
        </a>
    </form>
    <br>

    <div class="table-responsive" style="-moz-box-shadow: 0px 5px 3px 3px rgba(194,194,194,1);
    box-shadow: 0px 5px 3px 3px rgba(194,194,194,1);">
        <table class="table ruler-vertical table-hover mx-sm-0 table-bordered">
            <thead class="thead-dark">
            <tr class="w3-hover-green" align="center">
                <th scope="col">N°</th>
                <th scope="col">Nombres</th>
                <th scope="col">Apellidos</th>
                <th scope="col">Grado</th>
                <th scope="col">Carrera</th>
                <th scope="col">Nivel de Escritura</th>
                <th scope="col">Nivel de Lectura</th>
                <th scope="col">Ver</th>


            </tr>
            </thead>
            <tbody>
            @forelse($listas as $estudiante)
                <tr>
                    <th scope="row">{{ $estudiante->id }}</th>
                    <td>{{ $estudiante->nombres_alumno}} </td>
                    <td> {{$estudiante->apellidos_alumno}}</td>
                    <td>{{ $estudiante->grado}}</td>
                    <td>{{ $estudiante->carrera}}</td>
                    <td>{{ $estudiante->escritura}}</td>
                    <td>{{ $estudiante->lectura}}</td>
                    <td align="center"><a class="btn btn-info" title="Ver" href="{{route('estudiante.mostrar',['id' =>$estudiante->id])}}">
                            <img src="/imagenes/iconos/ver.svg" title="Ver" width="25">
                        </a>
                    </td>

                </tr>
            @empty
                <tr>
                    <td colspan="8">No hay Registros</td>
                </tr>
            @endforelse

            </tbody>


        </table>
    </div>
    <br>
    <br>

    {{ $listas->links()}}

    <script src="/js/jquery-3.2.1.min.js"></script>
@endsection


