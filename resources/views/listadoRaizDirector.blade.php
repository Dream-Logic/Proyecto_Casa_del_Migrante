@extends ('PlantillaMadre.Plantilla_menu_director')

@section('titulo', 'Listado Huéspedes Director')
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
        <h6 class="mt-3" style="font-size: 30px; color: black; text-align: center"><b>Listado de Huéspedes</b></h6>
    </div>
    <br>
    <br>
        <form class="form-inline my-2 my-lg-0 ml-auto" >
            <input class="form-control mr-sm-2 col-4" name="name"
                   type="search" placeholder="Buscar" aria-label="Search">
            <button class=" mr-sm-2 btn btn-success" type="submit">
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
                <th scope="col">Identidad</th>
                <th scope="col">Fecha de Nacimiento</th>
                <th scope="col">Dirección</th>
                <th scope="col">Fecha de Ingreso</th>
                <th scope="col">Fecha de Egreso</th>
                <th scope="col">Acciones</th>
            </tr>
            </thead>
            <tbody>
            @forelse($listados as $huesped)
                <tr >
                    <th scope="row">{{ $huesped->id }}</th>
                    <td>{{ $huesped->nombres}} </td>
                    <td> {{ $huesped->apellidos }}</td>
                    <td>{{ $huesped->identidad}}</td>
                    <td>{{ $huesped->fnacimiento }}</td>
                    <td>{{ $huesped->direccion}}</td>
                    <td>{{ $huesped->ingreso}}</td>
                    <td>{{ $huesped->egreso}}</td>
                    <td align="center"><a class="btn btn-info" href="{{route('huesped.mostrar',['id' =>$huesped->id])}}">
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
        {{ $listados->links()}}
        <script src="/js/jquery-3.2.1.min.js"></script>
@endsection


