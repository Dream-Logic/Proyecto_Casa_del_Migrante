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
    <a class="btn btn-success" href="{{route('index.index')}}">Regresar</a>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">

        <a class="navbar-brand" href="#">LISTADO DE NIÑOS ENFERMOS</a>
        <form class="form-inline my-2 my-lg-0 ml-auto">

            <div class="">
                <label class="card-title">Buscar por tipo </label>
            </div>

            <select name="tipo" class="form-control mr-sm-2" id="exampleFormControlSelect1">
                <option>nombres</option>
                <option>apellidos</option>
                <option>direccion</option>
                <option>identidad</option>

            </select>
            <input class="form-control mr-sm-2" name="buscarpor" type="search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
        </form>
    </nav>
    <table class="table" >
        <thead>
        <tr class="w3-hover-green">
            <th class="bg-warning" scope="col">Id</th>
            <th class="bg-warning" scope="col">Nombres</th>
            <th class="bg-warning"  scope="col">Apellidos</th>
            <th class="bg-warning"  scope="col">Enfermedad</th>
            <th class="bg-warning"  scope="col">Tratamiento</th>


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


























