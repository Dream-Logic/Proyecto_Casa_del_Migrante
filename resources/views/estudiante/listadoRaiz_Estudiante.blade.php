@extends ('PlantillaMadre.menu_inicio')
@section('titulo', 'Listado de Estudiante')
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
        <h6 class="mt-3" style="font-size: 30px; color: black;"><b>Listado del Estudiante</b></h6>
    </div>
    <br>
    <br>
    <div class="unit-4 mx-4" style="float: right">
        <a class="btn btn-outline-warning " href="{{route('estudiante.estudiante')}}">
            <img src="/imagenes/iconos/agregarUsuario.svg" class="svg" width="25">
        </a>
    </div>
    <form class="form-inline my-2  my-lg-0 ml-auto">

        <input class="form-control mr-sm-2 col-3" name="name" type="search" placeholder="Buscar" aria-label="Search">
        <button class="  mr-sm-2 btn btn-success" type="submit">
            <img src="/imagenes/iconos/buscar.svg" class="svg" width="25">
        </button>
        <a href="{{route('listadoEstudiante.index')}}" class="btn btn-warning">
            <img src="/imagenes/iconos/restaurar.svg" class="svg" width="25">
        </a>

    </form>
    <br>

    <div class="table-responsive" style="-moz-box-shadow: 0px 5px 3px 3px rgba(194,194,194,1);
    box-shadow: 0px 5px 3px 3px rgba(194,194,194,1);">
        <table class="table ruler-vertical table-hover mx-sm-0 table-bordered">
            <thead class="thead-dark">
            <tr>
                <th scope="col">N°</th>
                <th scope="col">Nombres</th>
                <th scope="col">Apellidos</th>
                <th scope="col">Grado</th>
                <th scope="col">Carrera</th>
                <th scope="col"></th>
                <th scope="col"></th>
                <th scope="col">Acciones</th>
                <th scope="col"></th>
            </tr>
            </thead>
            <tbody>
            @forelse($listas as $estudiante)
                <tr>
                    <th scope="row">{{ $estudiante->id }}</th>
                    <td>{{ $estudiante->nombres_alumno}} </td>
                    <td> {{$estudiante->apellidos_alumno}}</td>
                    <td>{{ $estudiante->grado}}</td>
                    <td>{{ $estudiante->carrera}}</td>
                    <td align="center"><a class="btn btn-outline-info" href="{{route('estudiante.mostrar',['id' =>$estudiante->id])}}">
                            <img src="/imagenes/iconos/ver.svg" width="25" >
                        </a></td>
                    <td><a class="btn btn-outline-warning" href="{{route('estudiante.edit',['id' =>$estudiante->id])}}" >
                            <img src="/imagenes/iconos/editar.svg" class="svg" width="25" >
                        </a>
                    </td>
                    <td>
                        <a href="#" onclick="return confirm('Estás seguro que deseas eliminar el registro?');">
                            <form method="post" action="{{route('estudiante.borrar',['id'=>$estudiante->id])}}">
                                @csrf
                                @method('delete')
                                <img src="/imagenes/iconos/eliminar.svg">
                                <input type="submit" value="Eliminar" class="btn btn-outline-danger">
                            </form>
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

    </div>
    <br>
    <br>
    {{ $listas->links()}}
    <script src="/js/jquery-3.2.1.min.js"></script>
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/main.js"></script>
    <script src="styles/bootstrap4/popper.js"></script>
    <script src="styles/bootstrap4/bootstrap.min.js"></script>
    <script src="plugins/greensock/TweenMax.min.js"></script>
    <script src="plugins/greensock/TimelineMax.min.js"></script>
    <script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
    <script src="plugins/greensock/animation.gsap.min.js"></script>
    <script src="plugins/greensock/ScrollToPlugin.min.js"></script>
    <script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
    <script src="plugins/scrollTo/jquery.scrollTo.min.js"></script>
    <script src="plugins/easing/easing.js"></script>
    <script src="js/custom.js"></script>
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
@endsection
