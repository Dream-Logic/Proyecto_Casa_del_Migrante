@extends ('PlantillaMadre.menu_inicio')
@section('titulo', 'Listado de Salud')
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
    <tbody class="embed-responsive">
    <div class="w3-container w3-teal mx-4" style="font-family: 'Raleway', sans-serif; text-align: center">
        <h6 class="mt-3" style="font-size: 30px; color: black;"><b>Listado de Salud</b></h6>
    </div>
    <br>
    <br>
        <form class="form-inline my-3 my-lg-0 ml-auto " >
            <input class="form-control mr-sm-2 col-3"  name="name" type="search" aria-label="Search" placeholder="Buscar">
            <button class="   mr-sm-1 btn btn-success" title="Buscar" type="submit">
                <img src="/imagenes/iconos/busque.png" class="svg" title="Buscar" width="20">
            </button>
            <a href="{{url('salud')}}" class="btn btn-warning" title="Recargar listado de salud">
                <img src="/imagenes/iconos/automatic_updates.png" class="svg" width="20" title="Recargar listado de salud">
            </a>
        </form>
    <br>
    <div class="table-responsive" >
        <table class="table ruler-vertical table-hover mx-sm-0 table-bordered align-text-top" >
        <thead class="thead-dark" >
        <tr class="w3-hover-green" align="center">
            <th scope="col" class="align-text-center" >Id</th>
            <th scope="col">Nombres</th>
            <th  scope="col">Apellidos</th>
            <th scope="col">Enfermedad</th>
            <th  scope="col">Tratamiento</th>
            <th  scope="col">Ver</th>
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
                <td align="center"><a title="Ver" class="btn btn-outline-info" href="{{route('huesped.mostrar',['id' =>$huesped->id])}}">
                        <img title="Ver" src="/imagenes/iconos/ver.svg" width="25" >
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
    <br>
    <br>
    {{ $listados->links()}}

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
        <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

    </div>

@endsection





















