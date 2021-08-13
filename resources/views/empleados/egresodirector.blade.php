@extends ('PlantillaMadre.Plantilla_menu_director')
@section('titulo', 'Listado de Egresados')
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
        <h6 class="mt-3" style="font-size: 30px; color: black;"><b>Listado de Egresados</b></h6>
    </div>
    <br>
    <br>

    <form class="form-inline my-2 my-lg-0 ml-auto ">
        <input class="form-control mr-sm-2 col-4" style="margin-right: 20px"
               name="name" type="search" aria-label="Search" placeholder="Buscar">
        <div class="btn-toolbar" title="Buscar">
        <button class=" mr-sm-1 btn btn-success" type="submit" title="Buscar">
            <img src="/imagenes/iconos/busque.png" class="svg" width="20" title="Buscat">
        </button>
        </div>
        <div class="btn-toolbar"  >
        <a href="{{url('/egresosdirec')}}" class="btn btn-warning" title="Recargar el listado de egresados">
            <img src="/imagenes/iconos/automatic_updates.png" class="svg" width="20" title="Recargar el listado de egresados">
        </a>
        </div>
    </form>
    <br>
    <br>
    <div class="table-responsive" style="-moz-box-shadow: 0px 5px 3px 3px rgba(194,194,194,1);
    box-shadow: 0px 5px 3px 3px rgba(194,194,194,1);">
        <table class="table ruler-vertical table-hover mx-sm-0 table-bordered" >
            <thead class="thead-dark" align="center" >
            <tr align="center">
                <th scope="col">Id</th>
                <th  scope="col">Nombres</th>
                <th  scope="col">Apellidos</th>
                <th scope="col">Fecha de Ingreso</th>
                <th  scope="col">Fecha de Egreso</th>
                <th  scope="col">Ver</th>
            </tr>

            </thead>
            <tbody>
            @forelse($listados as $huesped)

                <tr align="center">
                    <th scope="row">{{ $huesped->id }}</th>
                    <td>{{ $huesped->nombres}} </td>
                    <td> {{ $huesped->apellidos }}</td>
                    <td>{{ $huesped->ingreso }}</td>
                    <td>{{ $huesped->egreso}}</td>
                    <td align="center"><a class="btn btn-outline-info" title="Ver" href="{{route('huesped.mostrar',['id' =>$huesped->id])}}">
                            <img src="/imagenes/iconos/ver.svg" width="25" title="Ver">
                        </a></td>
                </tr>
            @empty
                <tr>
                    <td colspan="6">No hay Registros</td>
                </tr>
            @endforelse

            </tbody>
        </table>
    </div>
        <script src="/js/jquery-3.2.1.min.js"></script>
        <script src="js/jquery-3.2.1.min.js"></script>
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


@endsection
