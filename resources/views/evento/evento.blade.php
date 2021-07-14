<html>
<section class="container">
  <head>
    <title></title>
    <meta content="">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Exo&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
      <head>
          <!-- CSRF Token -->
          <meta charset="utf-8">
          <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximun-scale=1.0,
        minimun-scale=1.0">
          <meta name="csrf-token" content="{{ csrf_token() }}">

          <br><br><br>
    <body>
    <div class="" style="-moz-box-shadow: 0px 5px 3px 3px rgb(194,194,194);
                    box-shadow: 0px 5px 3px 3px rgba(194,194,194,1);">
        <div class="card-header" style="background-color: #4cd213">
            <label class="card-title" style="color: black;"> <strong>Detalle del evento</strong></label>
        </div>

        <table  class="table ruler-vertical table-hover mx-sm-0 table-bordered ">

            <tbody>
            <tr>
                <th scope="row">Detalle</th>
                <td>{{ $event->titulo }}</td>
            </tr>
            <tr>
                <th scope="row">Fecha </th>
                <td>{{ $event->fecha }}</td>
            </tr>

            <tr>
                <th scope="row">Descripción del Evento</th>
                <td> {{ $event->descripcion }}</td>
            </tr>

            </tbody>
        </table>

        <div class="trans text-center">
            <a href="{{ asset('/Evento/index') }}" class="btn btn-warning">
                <img  src="/imagenes/iconos/restaurar.svg" class="svg" width="25" title="Regresar">

            </a>
            <a href="#" onclick="return confirm('Estás seguro que deseas eliminar el registro?');">
                <form method="post" action="{{route('evento.borrar',['id'=>$event->id])}}">
                    @csrf
                    @method('delete')
                    <input  title="Eliminar" src="/imagenes/iconos/eliminar.svg" type="image" height="45" class="btn btn-danger">
                </form>
            </a>
        </div>
    </div>


      <!-- inicio de semana -->


    <!-- /container -->

    <!-- Footer -->
<footer class="page-footer font-small blue pt-4">
  <!-- Copyright -->

  <!-- Copyright -->
</footer>
<!-- Footer -->

  </body>
</section>
</html>
