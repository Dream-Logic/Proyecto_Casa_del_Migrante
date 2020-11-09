@extends('PlantillaMadre.Plantilla_Madre_Listado')
@section('titulo','Listado de niños enfermos')
@section('contenido')

    @if(session('mensaje'))
        <div class="alert alert-success">
            {{session('mensaje')}}
        </div>
    @endif
    <table class="table">
        <thead>
        <tr class="w3-hover-green">
            <th scope="col">Id</th>
            <th scope="col">Nombres</th>
            <th scope="col">Apellidos</th>
            <th scope="col">Enfermedad</th>
            <th scope="col">Tratamiento</th>



        </tr>

        </thead>
        <tbody>
        @forelse($listados as $huesped)
            <tr>
                <th scope="row">{{ $huesped->id }}</th>
                <td>{{ $huesped->nombres}} </td>
                <td> {{ $huesped->apellidos }}</td>
                <td>{{ $huesped->enfermedad }}</td>
                <td>{{ $huesped->tratamiento}}</td>



            </tr>
        @empty
            <tr>
                <td colspan="4">No hay Registros</td>
            </tr>
        @endforelse

        </tbody>



        @endsection


    </table>
