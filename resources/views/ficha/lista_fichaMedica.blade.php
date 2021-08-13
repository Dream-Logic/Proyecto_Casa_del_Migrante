@extends ('PlantillaMadre.menu_inicio')
@section('titulo', 'Listado de Expedientes Médicos')
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

    <div class="w3-container w3-teal mx-4" style="font-family: 'Raleway', sans-serif; text-align: center">
        <h6 class="mt-3" style="font-size: 30px; color: black;"><b>Listado de Expedientes Médicos</b></h6>
    </div>
    <br>
    <br>


    <form class="form-inline  my-lg-0 ml-auto" >
        <input class="form-control mr-sm-2 col-4" name="name"
               type="search" placeholder="Buscar" aria-label="Search">
        <div class="btn-toolbar" title="Buscar">
        <button class=" mr-sm-2 btn btn-success" type="submit">
            <img src="/imagenes/iconos/buscar.svg" class="svg" width="25" title="Buscar">
        </button>
        </div>
        <div class="btn-toolbar" title="Recargar el listado de huéspedes" >
        <a href="{{url('/fichaMedica/listados')}}" class="btn btn-warning">
            <img src="/imagenes/iconos/automatic_updates.png" class="svg" width="25" title="Recargar el listado de ficha médica">
        </a>
        </div>
        <div class="card-body d-flex justify-content-lg-end align-items-lg-end" title="">
            <a class="btn btn-outline-primary "href="{{route('ficha.index')}}">
                <img src="/imagenes/iconos/agregarUsuario.svg" class="svg" width="25" title="Agregar Nuevo" >
            </a>
        </div>

    </form>
    <br>

    <div class="table-responsive" style="-moz-box-shadow: 0px 5px 3px 3px rgba(194,194,194,1);
    box-shadow: 0px 5px 3px 3px rgba(194,194,194,1);">
        <table class="table ruler-vertical table-hover mx-sm-0 table-bordered " >

            <thead class="thead-dark" >
            <tr align="center">
                <th scope="col">N°</th>
                <th scope="col">Hospital o Clínica</th>
                <th scope="col">Médico</th>
                <th scope="col">Nombres del Paciente</th>
                <th scope="col">Apellidos del Paciente</th>
                <th scope="col">Enfermedad</th>
                <th scope="col">Tratamiento</th>
                <th scope="col">Ver</th>
                <th scope="col">Editar</th>
                <th scope="col">Borrar</th>
            </tr>
            </thead>
            <tbody>
            @forelse($pacientes as $ficha)
                <tr >
                    <th scope="row">{{ $ficha->id }}</th>
                    <td>{{ $ficha->nombre_hospital}} </td>
                    <td> {{ $ficha->medico }}</td>
                    <td>{{ $ficha->nombres_paciente}}</td>
                    <td>{{ $ficha->apellidos_paciente}}</td>
                    <td>{{ $ficha->enfermedad_paciente}}</td>
                    <td>{{ $ficha->tratamiento_paciente}}</td>

                    <td><a class="btn btn-outline-info" title="Ver" href="{{route('fichas.mostrar', ['id' =>$ficha->id])}}">
                            <img src="/imagenes/iconos/ver.svg" width="25" title="Ver" >
                        </a></td>
                    <td><a class="btn btn-outline-warning" title="Editar" href="{{route('ficha.edit',['id' =>$ficha->id])}}" >
                            <img src="/imagenes/iconos/editar.svg"  title="Editar" class="svg" width="25" >
                        </a>
                    </td>
                    <td>
                        <a href="#" title="Borrar" onclick="return confirm('¿Está seguro que desea eliminar el registro?');">
                            <form method="post" action="{{route('ficha.borrar',['id'=>$ficha->id])}}">
                                @csrf
                                @method('delete')

                                <input title="Borrar" src="/imagenes/iconos/eliminar.svg" type="image" height="45" class="btn btn-outline-danger">
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
    {{ $pacientes->links()}}
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
