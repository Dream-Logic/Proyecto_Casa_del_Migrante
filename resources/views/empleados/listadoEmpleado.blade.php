@extends ('PlantillaMadre.Plantilla_menu_director')
@section('titulo', 'Principal Director')
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
    <div class="w3-container w3-teal mx-4" style="font-family: 'Raleway', sans-serif;">
        <br>
        <h6 class="mt-3" style="font-size: 30px; color: black;"><b>Listado del Personal</b></h6>
    </div>
    <form class="form-inline my-2  my-lg-0 ml-auto">

        <input class="form-control mr-sm-2" name="name" type="search" aria-label="Search" placeholder="Buscar">
        <button class="btn btn-success" type="submit">
            <img src="/imagenes/iconos/buscar.svg" class="svg" width="25">
        </button>
        <a href="{{url('/huesped/listadoDirector')}}" class="btn btn-warning">
            <img src="/imagenes/iconos/restaurar.svg" class="svg" width="25">
        </a>
    </form>
    <br>
    <!--FIN BUSCADOR-->
    <div class="table-responsive" style="-moz-box-shadow: 0px 5px 3px 3px rgba(194,194,194,1);
    box-shadow: 0px 5px 3px 3px rgba(194,194,194,1);">
        <table class="table ruler-vertical table-hover mx-sm-0 table-bordered">
            <thead class="thead-dark">
            <tr>
                <th scope="col">N°</th>
                <th scope="col">Nombres</th>
                <th scope="col">Apellidos</th>
                <th scope="col">Profesión u Oficio</th>
                <th scope="col">Cargo</th>
                <th scope="col">Email</th>
                <th scope="col">Teléfono</th>

                <th scope="col">Acciones</th>


            </tr>
            </thead>
            <tbody>
            @forelse($listas as $personal)
                <tr>
                    <th scope="row">{{ $personal->id }}</th>
                    <td>{{ $personal->nombres_personal}} </td>
                    <td> {{$personal->apellidos_personal}}</td>
                    <td>{{ $personal->profesionPersonal}}</td>
                    <td>{{ $personal->cargo}}</td>
                    <td>{{ $personal->email}}</td>
                    <td>{{ $personal->telefono_personal}}</td>
                    <td><a class="btn btn-info" href="">
                            <img src="/imagenes/iconos/ver.svg" width="25">
                        </a>
                    </td>

                </tr>
            @empty
                <tr>
                    <td colspan="4">No hay Registros</td>
                </tr>
            @endforelse

            </tbody>


        </table>
        {{ $listas->links()}}
        <script src="/js/jquery-3.2.1.min.js"></script>
@endsection


