@extends('PlantillaMadre.Plantilla_Madre_Listado')
@section('titulo','Lista de Huespedes')
@section('contenido')

    @if(session('mensaje'))
        <div class="alert alert-success">
            {{session('mensaje')}}
        </div>
    @endif


        <h2>Listado de Huéspedes</h2>


    <nav class="navbar navbar-expand-lg navbar-light bg-light">

        <a  class="btn btn-success" href="{{route('ficha.create')}}">Nuevo Húesped</a>
        <a class="navbar-brand" href="#"></a>
        <a  class="btn btn-primary"  href="{{route('index.index')}}">Regresar</a>
        <a class="navbar-brand" href="#"></a>
        <form class="form-inline my-2 my-lg-0 ml-auto">
            <input class="form-control mr-sm-2" name="nombres" type="search" placeholder="Buscar" aria-label="Search">
            <button class="btn btn-success" type="submit">Buscar</button>
            <a class="navbar-brand" href="#"></a>
            <a href="{{url('/proyectos/listado')}}" class="btn btn-warning">Restaurar</a>
        </form>
    </nav>

    <table class="table">
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
                <td><a class="btn btn-info" href="{{route('detalles.mostrar',['id' =>$huesped->id])}}">Ver</a></td>
                <td><a class="btn btn-warning" href="{{route('listado.edit',['id' =>$huesped->id])}}">Editar</a></td>

                <td>
                    <form method="post" action="{{route('listado.borrar',['id'=>$huesped->id])}}">
                        @csrf
                        @method('delete')
                        <input type="submit" value="Eliminar" class="btn btn-danger">
                    </form>

            </tr>
        @empty
            <tr>
                <td colspan="4">No hay Registros</td>
            </tr>
        @endforelse


    </table>


    </tbody>
    {{ $listados->links()}}
@endsection
