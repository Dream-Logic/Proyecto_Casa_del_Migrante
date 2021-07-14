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
    <head>
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta charset="utf-8">
    </head>
    <div class="w3-container w3-teal mx-4" style="font-family: 'Raleway', sans-serif; text-align: center">
        <br>
        <h6 class="mt-3" style="font-size: 30px; color: black;"><b>Listado de Huéspedes</b></h6>
    </div>
    <br>
    <br>

    <form class="form-inline  my-lg-0 ml-auto" >
        <input class="form-control mr-sm-2 col-4" name="name"
               type="search" placeholder="Buscar" aria-label="Search">
        <div class="btn-toolbar" title="Buscar">
        <button class="mr-sm-2 btn btn-success" type="submit">
            <img src="/imagenes/iconos/busque.png" class="svg" width="20" title="Buscar">
        </button>
        </div>
        <div class="btn-toolbar" title="Recargar el listado de huéspedes" >
        <a href="{{url('/proyectos/listado')}}" class="btn btn-warning">
            <img src="/imagenes/iconos/automatic_updates.png" class="svg" width="20">
        </a>
        </div>
        <div class="card-body d-flex justify-content-lg-end align-items-lg-end" title="Agregue un nuevo huéspedes">
            <a class="btn btn-outline-primary "href="{{route('huesped.nuevo')}}">
                <img src="/imagenes/iconos/agregarUsuario.svg" class="svg" width="20" >
            </a>
        </div>
    </form>
    <br>
    <div class="table-responsive" style="-moz-box-shadow: 0px 5px 3px 3px rgba(194,194,194,1);
    box-shadow: 0px 5px 3px 3px rgba(194,194,194,1);">
        <table class="table ruler-vertical table-hover mx-sm-0 table-bordered " >
            <thead class="thead-dark" align="center" >
            <tr align="center">
                <th scope="col">N°</th>
                <th scope="col">Nombres</th>
                <th scope="col">Apellidos</th>
                <th scope="col">Identidad</th>
                <th scope="col">Fecha de Nacimiento</th>
                <th scope="col">Dirección</th>
                <th scope="col">Fecha de ingreso</th>
                <th scope="col">Ver</th>
                <th scope="col">Editar</th>
                <th scope="col">Eliminar</th>
            </tr>
            </thead>
            @forelse($listados as $huesped)
                <tr align="center">
                    <th scope="row">{{ $huesped->id }}</th>
                    <td>{{ $huesped->nombres}} </td>
                    <td> {{ $huesped->apellidos }}</td>
                    <td>{{ $huesped->identidad}}</td>
                    <td>{{ $huesped->fnacimiento }}</td>
                    <td>{{ $huesped->direccion}}</td>
                    <td>{{ $huesped->ingreso}}</td>

                    <td align="center"><a class="btn btn-outline-info"  title="Ver" href="{{route('huesped.mostrar',['id' =>$huesped->id])}}">
                            <img src="/imagenes/iconos/ver.svg" width="25" >
                        </a></td>
                    <td align="center"><a class="btn btn-outline-warning" width="25" title="Editar" href="{{route('huesped.edit',['id' =>$huesped->id])}}" >
                            <img src="/imagenes/iconos/editar.svg" class="svg" >
                        </a>
                    </td>
                    <td align="center">
                        <a href="#" onclick="return confirm('¿Está seguro que desea eliminar el registro?');">
                        <form method="post" action="{{route('huesped.borrar',['id'=>$huesped->id])}}">
                            @csrf
                            @method('delete')

                      <input   src="/imagenes/iconos/eliminar.svg"  title="Eliminar" type="image" height="45" class="btn btn-outline-danger">

                        </form>
                        </a>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="10">No hay Registros</td>
                </tr>
            @endforelse
            </tbody>
        </table>
    </div>
    <br>
    <br>
    {{ $listados->links()}}
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
