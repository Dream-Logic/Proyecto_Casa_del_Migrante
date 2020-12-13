@extends ('PlantillaMadre.menu_inicio')
@section('titulo', 'Listado Huéspedes')
@section('contenido')

    @if(session('mensaje'))
        <div class="alert alert-success">
            {{session('mensaje')}}
        </div>
    @endif
    <br>
    <br>
    <br>
    <div class="card-header">
        <label class="card-title">Listado de Huéspedes</label>
    </div>


    @if(session("exito"))
        <div class="alert alert-info">
            {{session("exito")}}
        </div>
    @endif

    <nav class="navbar navbar-expand-lg navbar-light bg-light">

        <a class="btn btn-success" href="{{route('huesped.nuevo')}}">Nuevo Húesped</a>
        <a class="navbar-brand" href="#"></a>
        <a class="btn btn-primary" href="{{route('index.index')}}">Regresar</a>
        <a class="navbar-brand" href="#"></a>
        <form class="form-inline my-2 my-lg-0 ml-auto">
            <input class="form-control mr-sm-2" name="nombres" type="search" placeholder="Buscar" aria-label="Search">
            <button class="btn btn-success" type="submit">Buscar</button>
            <a class="navbar-brand" href="#"></a>
            <a href="{{url('/proyectos/listado')}}" class="btn btn-warning">Restaurar</a>
        </form>
    </nav>

    <div class="container-fluid">
        <table id="" class="table table-hover text-centered">

            <thead>
            <tr class="w3-hover-green">
                <th scope="col">Id</th>
                <th scope="col">Nombres</th>
                <th scope="col">Apellidos</th>
                <th scope="col">Fecha de Nacimiento</th>
                <th scope="col">Ver</th>
                <th scope="col">Editar</th>
                <th scope="col">Borrar</th>


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
                    <td><a class="btn btn-warning" href="{{route('huesped.edit',['id' =>$huesped->id])}}">Editar</a>
                    </td>

                    <td>
                        <form method="post" action="{{route('huesped.borrar',['id'=>$huesped->id])}}">
                            @csrf
                            @method('delete')
                            <input type="submit" value="Eliminar" class="btn btn-danger">
                        </form>
                    </td>

                </tr>
            @empty
                <tr>
                    <td colspan="4">No hay Registros</td>
                </tr>
            @endforelse


        </table>
    </div>


    </tbody>
    {{ $listados->links()}}
    <script src="/js/jquery-3.2.1.min.js"></script>

@endsection
