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

    <div class="w3-container w3-teal mx-4" style="font-family: 'Raleway', sans-serif; text-align: center">
        <h6 class="mt-3" style="font-size: 30px; color: black;"><b>Listado de Salud</b></h6>
    </div>
    <br>
    <br>
        <form class="form-inline my-3 my-lg-0 ml-auto " >
            <input class="form-control mr-sm-2 col-3"  name="name" type="search" aria-label="Search" placeholder="Buscar">
            <button class="   mr-sm-1 btn btn-success" type="submit">
                <img src="/imagenes/iconos/busque.png" class="svg" width="25">
            </button>
            <a href="{{url('salud')}}" class="btn btn-warning">
                <img src="/imagenes/iconos/automatic_updates.png" class="svg" width="25">
            </a>
        </form>
    <br>
    <div class="table-responsive" style="-moz-box-shadow: 0px 5px 3px 3px rgba(194,194,194,1);
    box-shadow: 0px 5px 3px 3px rgba(194,194,194,1);">
        <table class="table ruler-vertical table-hover mx-sm-0 table-bordered " >

        <thead class="thead-dark" >
        <tr>
            <th  scope="col" >Id</th>
            <th scope="col">Nombres</th>
            <th  scope="col">Apellidos</th>
            <th scope="col">Enfermedad</th>
            <th  scope="col">Tratamiento</th>
            <th  scope="col">Acciones</th>

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
                <td align="center"><a class="btn btn-outline-info" href="{{route('huesped.mostrar',['id' =>$huesped->id])}}">
                        <img src="/imagenes/iconos/ver.svg" width="25" >
                    </a></td>

            </tr>
        @empty
            <tr>
                <td colspan="6">No hay Registros</td>
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
        <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

    </div>

@endsection





















