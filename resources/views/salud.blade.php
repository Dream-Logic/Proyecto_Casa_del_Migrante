@extends ('PlantillaMadre.menu_inicio')
@section('titulo', 'Listado Salud')
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
    </head>
    <div class="w3-container w3-teal mx-4" style="font-family: 'Raleway', sans-serif;">
        <h6 class="mt-3" style="font-size: 30px; color: black;"><b>Listado de Enfermos</b></h6>
    </div>
    <form class="form-inline my-2 my-lg-0 ml-auto">
        <div class="mx-4">
            <label class="card-title">Buscar por tipo</label>
        </div>
        <select name="tipo" class="form-control mr-sm-2" id="exampleFormControlSelect1">
            <option>nombres</option>
            <option>apellidos</option>
            <option>direccion</option>
            <option>identidad</option>
        </select>
        <input class="form-control mr-sm-2" name="buscarpor" type="search" aria-label="Search" placeholder="Buscar">
        <button class="btn btn-success" type="submit">
            <img src="/imagenes/iconos/buscar.svg" class="svg" width="25">
        </button>
        <a class="btn btn-warning" href="{{route('index.index')}}">
            <img src="/imagenes/iconos/restaurar.svg" class="svg" width="30">
        </a>
    </form>
    <br>

    <div class="table-responsive" style="-moz-box-shadow: 0px 5px 3px 3px rgba(194,194,194,1);
    box-shadow: 0px 5px 3px 3px rgba(194,194,194,1);">
        <table class="table ruler-vertical table-hover mx-sm-0 ">
            <thead class="thead-dark">
            <tr>
                <th scope="col">N°</th>
                <th scope="col">Nombres</th>
                <th scope="col">Apellidos</th>
                <th scope="col">Identidad</th>
                <th scope="col">Dirección</th>
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
                    <td> {{ $huesped->identidad }}</td>
                    <td> {{ $huesped->direccion }}</td>
                    <td>{{ $huesped->enfermedad }}</td>
                    <td>{{ $huesped->tratamiento}}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="4">No hay Registros</td>
                </tr>
            @endforelse
            </tbody>
        </table>

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


























