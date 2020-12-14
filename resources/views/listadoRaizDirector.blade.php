@extends ('PlantillaMadre.Plantilla_menu_director')
@section('titulo', 'Listado Huéspedes Director')
@section('contenido')

    <br><br><br>

    @if(session('mensaje'))
        <div class="alert alert-success">
            {{session('mensaje')}}
        </div>
    @endif



    <!--BUSCADOR-->
    <div class="card-header">
        <label class="card-title">Listado de Huéspedes</label>
    </div>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="btn btn-primary" href="{{route('dire.access')}}">Regresar</a>
        <a class="navbar-brand" href="#"></a>
        <form class="form-inline my-2 my-lg-0 ml-auto">
            <input class="form-control mr-sm-2" name="nombres" type="search" placeholder="Buscar" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
            <a class="navbar-brand" href="#"></a>
            <a href="{{url('/huesped/listadoDirector')}}" class="btn btn-warning">Restaurar</a>
        </form>
    </nav>

    <!--FIN BUSCADOR-->







    <table class="table">
        <thead>
        <tr class="w3-hover-green">
            <th scope="col">Id</th>
            <th scope="col">Nombres</th>
            <th scope="col">Apellidos</th>
            <th scope="col">Fecha de Nacimiento</th>
            <th scope="col">Ver</th>


        </tr>

        </thead>
        <tbody>
        @forelse($listados as $huesped)
            <tr>
                <th scope="row">{{ $huesped->id }}</th>
                <td>{{ $huesped->nombres}} </td>
                <td> {{ $huesped->apellidos }}</td>
                <td>{{ $huesped->fnacimiento }}</td>
                <td><a class="btn btn-info" href="{{route('huesped.mostrar',['id' =>$huesped->id])}}">Ver</a></td>

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


