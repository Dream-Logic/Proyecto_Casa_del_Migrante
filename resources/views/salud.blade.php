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
    <br>
    <head>
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
    </head>
    <a class="btn btn-success btn-warning" href="{{route('index.index')}}">Regresar</a>
    <br>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">


        <a class="navbar-brand text-warning" href="#">LISTADO DE NIÑOS ENFERMOS</a>
        <form class="form-inline my-2 my-lg-0 ml-auto">
            <input class="form-control mr-sm-2" name="name" type="search" aria-label="Search" placeholder="Buscar">
            <button class="btn btn-success" type="submit">
                <img src="/imagenes/iconos/buscar.svg" class="svg" width="25">
            </button>
        </form>
    </nav>
    <table class="table" >
        <thead>
        <tr class="w3-hover-green">
            <th class="bg-dark text-white" style="font-family: 'Times New Roman'" scope="col">Id</th>
            <th class="bg-dark text-white"style="font-family: 'Times New Roman'"  scope="col">Nombres</th>
            <th class="bg-dark text-white" style="font-family: 'Times New Roman'"  scope="col">Apellidos</th>
            <th class="bg-dark text-white"style="font-family: 'Times New Roman'"   scope="col">Enfermedad</th>
            <th class="bg-dark text-white" style="font-family: 'Times New Roman'"  scope="col">Tratamiento</th>
            <th class="bg-dark text-white"style="font-family: 'Times New Roman'"   scope="col">Acciones</th>

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
                <td><a class="btn btn-outline-info" href="{{route('huesped.mostrar',['id' =>$huesped->id])}}">
                        <img src="/imagenes/iconos/ver.svg" width="25" >
                    </a></td>

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


























