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
        <h6 class="mt-3" style="font-size: 30px; color: black;"><b>Listado de Estudiantes</b></h6>
    </div>
    <br>
    <br>

    <form class="form-inline  my-lg-0 ml-auto">

        <input class="form-control mr-sm-2 col-4" name="name" type="search"
               placeholder="Buscar" aria-label="Search">
        <div class="btn-toolbar" title="Buscar">
        <button class="  mr-sm-2 btn btn-success" type="submit">
            <img src="/imagenes/iconos/buscar.svg" class="svg" width="25">
        </button>
        </div>
        <div class="btn-toolbar"  >
        <a href="{{route('listadoEstudiante.index')}}" class="btn btn-warning"  title="Recargar el listado de estudiantes">
            <img src="/imagenes/iconos/automatic_updates.png" class="svg" width="25"  title="Recargar el listado de estudiantes">
        </a>
        </div>
        <div class="card-body d-flex justify-content-lg-end align-items-lg-end" >
            <a class="btn btn-outline-primary" href="{{route('estudiante.estudiante')}}"  title="Agregue nuevo estudiante">
                <img src="/imagenes/iconos/agregarUsuario.svg" class="svg" width="25"  title="Agregue nuevo estudiante">
            </a>
        </div>

    </form>
    <br>

    <div class="table-responsive" style="-moz-box-shadow: 0px 5px 3px 3px rgba(194,194,194,1);
    box-shadow: 0px 5px 3px 3px rgba(194,194,194,1);">
        <table class="table ruler-vertical table-hover mx-sm-0 table-bordered">
            <thead class="thead-dark">
            <tr class="w3-hover-green" align="center">
                <th scope="col">N°</th>
                <th scope="col">Nombres</th>
                <th scope="col">Apellidos</th>
                <th scope="col">Grado</th>
                <th scope="col">Carrera</th>
                <th scope="col">Ver</th>
                <th scope="col">Editar</th>
                <th scope="col">Eliminar</th>
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

                    <td align="center"><a class="btn btn-outline-info" title="Ver" href="{{route('estudiante.mostrar',['id' =>$estudiante->id])}}">
                            <img src="/imagenes/iconos/ver.svg" width="25" title="Ver" >
                        </a></td>
                    <td align="center"><a title="Editar" class="btn btn-outline-warning" href="{{route('estudiante.edit',['id' =>$estudiante->id])}}" >
                            <img title="Editar" src="/imagenes/iconos/editar.svg" class="svg" width="25" >
                        </a>
                    </td>
                    <td align="center">
                        <a href="#" title="Eliminar" onclick="return confirm('¿Está seguro que desea eliminar el registro?');">
                            <form method="post" action="{{route('estudiante.borrar',['id'=>$estudiante->id])}}">
                                @csrf
                                 @method('delete')

                                <input title="Eliminar"  src="/imagenes/iconos/eliminar.svg" type="image" height="45" value="Eliminar" class="btn btn-outline-danger">
                            </form>
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
