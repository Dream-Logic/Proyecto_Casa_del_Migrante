@extends('PlantillaMadre.Plantilla_Madre_Listado')
@section('titulo','Lista de Huespedes')
@section('contenido')

    @if(session('mensaje'))
        <div class="alert alert-success">
            {{session('mensaje')}}
        </div>
    @endif


    <!--BUSCADOR-->


    <form  action="" method="get" onsubmit="return showLoad()">
        <a class="sr-only sr-only-focusable" href="#content">Skip to main content</a>
        <div class="form-row">


            <div class="btn1">
                <input type="text" name="nombres" class="caja"
                       placeholder="Busca el nombre del húesped" required="required">


                <button type="submit" class="btn btn-success">buscar</button>
                <a href="{{url('/proyectos/listado')}}" class="btn btn-warning">Restaurar</a>

            </div>
        </div>
    </form>
    <br>


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
                <td><a class="btn btn-info" href="{{route('detalles.mostrar',['id' =>$huesped->id])}}">Ver</a></td>

            </tr>
        @empty
            <tr>
                <td colspan="4">No hay Registros</td>
            </tr>
        @endforelse

        </tbody>


        {{ $listados->links()}}
        @endsection


    </table>


    </div>
    </div>