@extends ('PlantillaMadre.menu_inicio')
@section('titulo', 'Listado del Personal')
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
        <h6 class="mt-3" style="font-size: 30px; color: black;"><b>Descarga de Contenido</b></h6>
    </div>
    <br>
    <br>
    <div class="unit-4 mx-4" style="float: right">


    </div>
    <form class="form-inline my-2  my-lg-0 ml-auto">



    </form>
    <br>

    <div class="table-responsive" style="-moz-box-shadow: 0px 5px 3px 3px rgba(194,194,194,1);
    box-shadow: 0px 5px 3px 3px rgba(194,194,194,1);">
        <table class="table ruler-vertical table-hover mx-sm-0 table-bordered">
            <thead class="thead-dark">
            <tr>

                <th scope="col">Descarga de Archivos</th>
                <th scope="col">Execel</th>
                <th scope="col">Pdf</th>

            </tr>
            </thead>
            <tbody>

                <tr>

                    <td>Listado de Huesped</td>


                    <td align="center">  <a href="{{ asset('/huesped/export') }}"class="btn btn-success" style="color: white">  Descargar

                        </a>



                    <td> <a href="{{ asset('/pruebas/pdf') }}"class="btn btn-danger">  Descargar

                        </a>
                    </td>
                    <tr>
                    <td>Listado de Personal</td>


                    <td align="center">  <a href="{{ asset('/empleado/export') }}"class="btn btn-success" style="color: white">  Descargar

                        </a>



                    <td> <a href="{{ asset('/pruebaemple/pdf') }}"class="btn btn-danger">  Descargar

                        </a>
                    </td>
                </tr>
                <tr>
                    <td>Listado de Escolaridad</td>


                    <td align="center">  <a href="{{ asset('/estudiante/export') }}"class="btn btn-success" style="color: white">  Descargar

                        </a>



                    <td> <a href="{{ asset('/pruebaestule/pdf') }}"class="btn btn-danger">  Descargar

                        </a>
                    </td>
                </tr>
                <tr>
                    <td>Listado de Ficha Medica</td>


                    <td align="center">  <a href="{{ asset('/fichamedic/export') }}"class="btn btn-success" style="color: white">  Descargar

                        </a>



                    <td> <a href="{{ asset('/pruebafichame/pdf') }}"class="btn btn-danger">  Descargar

                        </a>
                    </td>
                </tr>
                <tr>
                    <td>Listado de Salud</td>


                    <td align="center">  <a href="{{ asset('/empleado/export') }}"class="btn btn-success" style="color: white">  Descargar

                        </a>



                    <td> <a href="{{ asset('/pruebaemple/pdf') }}"class="btn btn-danger">  Descargar

                        </a>
                    </td>
                </tr>

                <tr>
                    <td>Listado de Egresos</td>


                    <td align="center">  <a href="{{ asset('/empleado/export') }}"class="btn btn-success" style="color: white">  Descargar

                        </a>



                    <td> <a href="{{ asset('/pruebaemple/pdf') }}"class="btn btn-danger">  Descargar

                        </a>
                    </td>
                </tr>

            </tbody>
        </table>

    </div>
    <br>
    <br>

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
