@extends ('PlantillaMadre.Plantilla_menu_director')
@section('titulo', 'Listado del Pesonal')
@section('contenido')

    @if(session('mensaje'))
        <div class="alert alert-success">
            {{session('mensaje')}}
        </div>
    @endif
    <br>
    <br>

    <head>
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
    </head>
    <div class="w3-container w3-teal mx-4" style="font-family: 'Raleway', sans-serif; text-align: center">
        <br>
        <h6 class="mt-3" style="font-size: 30px; color: black;"><b>Listado del Personal</b></h6>
    </div>
    <br>
    <br>
    <form class="form-inline  my-lg-0 ml-auto" >
        <input class="form-control mr-sm-2 col-4" name="name" type="search"
               aria-label="Search" placeholder="Buscar">
        <div class="btn-toolbar" title="Buscar">
        <button class="mr-sm-2 btn btn-success" type="submit" title="Buscar">
            <img src="/imagenes/iconos/busque.png" class="svg" width="20" title="Buscar">
        </button>
        </div>
        <div class="btn-toolbar" title="Recargar el listado de huéspedes" >
        <a href="{{url('/empleado/lista')}}" class="btn btn-warning" title="Recargar listado de empleados">
            <img src="/imagenes/iconos/automatic_updates.png" class="svg" width="20" title="Recagar listado de emppleados">
        </a>
        </div>
    </form>
    <br>

    <div class="table-responsive" style="-moz-box-shadow: 0px 5px 3px 3px rgba(194,194,194,1);
    box-shadow: 0px 5px 3px 3px rgba(194,194,194,1);">
        <table class="table ruler-vertical table-hover mx-sm-0 table-bordered">
            <thead class="thead-dark">
            <tr align="center">

            <th scope="col">N°</th>
                <th scope="col">Nombres</th>
                <th scope="col">Apellidos</th>
                <th scope="col">Profesión u Oficio</th>
                <th scope="col">Cargo</th>
                <th scope="col">Email</th>
                <th scope="col">Teléfono</th>

                <th scope="col">ver</th>


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
                    <td align="center"><a class="btn btn-info" href="{{route('empleado.mostrar',['id' =>$personal->id])}}">
                            <img src="/imagenes/iconos/ver.svg" width="25">
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


