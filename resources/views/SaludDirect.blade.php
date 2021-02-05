@extends ('PlantillaMadre.Plantilla_menu_director')
@section('titulo', 'Listado Salud Director')
@section('contenido')

    <br><br><br>
    @if(session('mensaje'))
        <div class="alert alert-success">
            {{session('mensaje')}}
        </div>

    @endif
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Listado de niños enfermos</a>
        <form class="form-inline my-2 my-lg-0 ml-auto">
            <div class="">
                <label class="card-title">Buscar por tipo </label>
            </div>
            <select name="tipo" class="form-control mr-sm-2" placeholder="Buscar" id="exampleFormControlSelect1">
                <option>nombres</option>
                <option>apellidos</option>
                <option>direccion</option>
                <option>identidad</option>
            </select>
            <input class="form-control mr-sm-2" name="buscarpor" type="search" placeholder="Buscar" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
        </form>
    </nav>
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
    <script src="/js/jquery-3.2.1.min.js"></script>
