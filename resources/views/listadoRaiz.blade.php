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
    <div class="w3-container w3-teal mx-4" style="font-family: 'Raleway', sans-serif;">
        <h6 class="mt-3" style="font-size: 30px; color: black;"><b>Listado de Huéspedes</b></h6>
    </div>

    @if(session("exito"))
        <div class="alert alert-info">
            {{session("exito")}}
        </div>
    @endif
    <div class="unit-4 mx-4" style="float: right">
        <a class="btn btn-outline-warning "href="{{route('huesped.nuevo')}}">
            <img src="/imagenes/iconos/agregarUsuario.svg" class="svg" width="25" >
        </a>
    </div>

    <form class="form-inline my-lg-0 ml-auto">
        <div class="mx-4">
            <label class="card-title">Buscar por tipo</label>
        </div>
            <select name="tipo" class="form-control mr-sm-2" id="exampleFormControlSelect1">
                <option>nombres</option>
                <option>apellidos</option>
                <option>direccion</option>
                <option>identidad</option>

            </select>
            <input class="form-control mr-sm-2" name="buscarpor" type="search" placeholder="Buscar" aria-label="Search">
            <button class="btn btn-success" type="submit">
                <img src="/imagenes/iconos/buscar.svg" class="svg" width="25">
            </button>
            <a class="navbar-brand" href="#"></a>
            <a href="{{url('/proyectos/listado')}}" class="btn btn-warning">
                <img src="/imagenes/iconos/restaurar.svg" class="svg" width="25">
            </a>
        </form>
    <br>

    <div class="table-responsive" style="-moz-box-shadow: 0px 5px 3px 3px rgba(194,194,194,1);
    box-shadow: 0px 5px 3px 3px rgba(194,194,194,1);">
        <table class="table ruler-vertical table-hover mx-sm-0 ">
            <thead class="thead-dark">
            <tr >
                <th scope="col">N°</th>
                <th scope="col">Nombres</th>
                <th scope="col">Apellidos</th>
                <th scope="col">Identidad</th>
                <th scope="col">Fecha de Nacimiento</th>
                <th scope="col">Dirección</th>
                <th scope="col"></th>
                <th scope="col">Acciones</th>
                <th scope="col"></th>
            </tr>
            </thead>
            <tbody>
            @forelse($listados as $huesped)
                <tr>
                    <th scope="row">{{ $huesped->id }}</th>
                    <td>{{ $huesped->nombres}} </td>
                    <td> {{ $huesped->apellidos }}</td>
                    <td>{{ $huesped->identidad}}</td>
                    <td>{{ $huesped->fnacimiento }}</td>
                    <td>{{ $huesped->direccion}}</td>
                    <td><a class="btn btn-outline-info" href="{{route('huesped.mostrar',['id' =>$huesped->id])}}">
                            <img src="/imagenes/iconos/ver.svg" width="25" >
                        </a></td>
                    <td><a class="btn btn-outline-warning" href="{{route('huesped.edit',['id' =>$huesped->id])}}" >
                            <img src="/imagenes/iconos/editar.svg" class="svg" width="25" >
                        </a>
                    </td>
                    <td>
                        <form method="post" action="{{route('huesped.borrar',['id'=>$huesped->id])}}">
                            @csrf
                            @method('delete')
                            <img src="/imagenes/iconos/eliminar.svg" type="submit" value="Eliminar" class="btn btn-outline-danger">
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
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
@endsection
