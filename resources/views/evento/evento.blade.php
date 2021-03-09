<html>
  <head>
    <title></title>
    <meta content="">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Exo&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
    body{
      font-family: 'Exo', sans-serif;
    }
    .header-col{
      background: #E3E9E5;
      color:#536170;
      text-align: center;
      font-size: 20px;
      font-weight: bold;
    }
    .header-calendar{
      background: #E2D;color:white;
    }
    .box-day{
      border:1px solid #E3E9E5;
      height:150px;
    }
    .box-dayoff{
      border:1px solid #E3E9E5;
      height:150px;
      background-color: #ccd1ce;
    }
    </style>

  </head>
  <body>

    <div class="container">
      <div style="height:50px"></div>

      <p class="lead">
        <div class="card-header" style="background-color: #ccde2e">
            <label class="card-title" style="color: black;">Detalle del evento</label>
        </div>

      <hr>


      <div class="col-md-6">
        <form action="{{ asset('/Evento/create/') }}" method="post">

          <div class="fomr-group">

            <h4><strong>Título</strong></h4>
            {{ $event->titulo }}
          </div>

          <div class="fomr-group">
            <h4><strong>Descripción del Evento</strong></h4>
            {{ $event->descripcion }}
          </div>
          <div class="fomr-group">
            <h4><strong>Fecha</strong></h4>
            {{ $event->fecha }}
          </div>
          <br>
            <!-- <input type="submit" class="btn btn-info" value="Guardar"> -->

            <a href="{{ asset('/Evento/index') }}" class="btn btn-warning">
                <img src="/imagenes/iconos/restaurar.svg" class="svg" width="25">
            </a>
        </form>
      </div>


      <!-- inicio de semana -->


    </div> <!-- /container -->

    <!-- Footer -->
<footer class="page-footer font-small blue pt-4">
  <!-- Copyright -->

  <!-- Copyright -->
</footer>
<!-- Footer -->

  </body>
</html>
