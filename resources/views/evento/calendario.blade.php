<html>
<section class="container">
  <head>
    <title>Calendario de Eventos</title>
    <meta content="">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Exo&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  </head>
    <style>

    body{
      font-family: 'Exo', sans-serif;
    }
    .header-col{
      background: #9FD5EC;
      color:#0b0b0b;
     width: 150%;
      text-align: left;
      font-weight: bold;
      overflow: hidden;


    }
    .header-calendar{
      background: #0A77AE;color:white;
    }
    .box-day{
      border:1px solid #0b0b0b ;
      height:100px;background-color: #DCF3FD;
      overflow: hidden;


    }
    .box-dayoff{
      border:1px solid #04A3E8;
      height:100px;
      background-color: #E6F6FC;
      width: 100px;

    }
    </style>


  <body class="">


    <div class="container">
      <div class=""></div>
      <p class="lead">
        <div class="w3-container w3-teal mx-4" style="font-family: 'Raleway', sans-serif; text-align: center;height: 100px" >
            <h6 class="mt-3" style="font-size: 40px; color: black; height: 30px; "><b>Calendario de Eventos</b></h6>
        </div>

      <form class="form-inline  my-lg-0 ml-auto" >

        <a class="btn btn-success btn-warning" title="Regresar a la pagina principal del director" href="{{route('index.index')}}">Regresar</a>

        <div class="card-body d-flex justify-content-lg-end align-items-lg-end" title="Agregue un nuevo evento">
        <a class="btn btn-default"  href="{{ asset('/Evento/form') }}">Crear un evento
        <img src="/images\eventocalendario.svg" class="svg" width="40" ></a>
        </div>


      </form>

      <div class="row header-calendar "  >

        <div class="col" style="display: flex; justify-content: space-between; padding: 10px;">
          <a  href="{{ asset('/Evento/index/') }}/<?= $data['last']; ?>" style="margin:10px;">
            <i class="fas fa-chevron-circle-left" style="font-size:30px;color:white;"></i>
          </a>
          <h2 style="font-weight:bold;margin:10px;"><?= $mespanish; ?> <small><?= $data['year']; ?></small></h2>
          <a  href="{{ asset('/Evento/index/') }}/<?= $data['next']; ?>" style="margin:10px;">
            <i class="fas fa-chevron-circle-right" style="font-size:30px; color:white;"></i>
          </a>
        </div>

      </div>

      <div class="row " >
        <div class="col header-col">Lunes</div>
        <div class="col header-col">Martes</div>
        <div class="col header-col">Miércoles</div>
        <div class="col header-col">Jueves</div>
        <div class="col header-col">Viernes</div>
        <div class="col header-col">Sábado</div>
        <div class="col header-col">Domingo</div>
      </div>
      <!-- inicio de semana -->
      @foreach ($data['calendar'] as $weekdata)
        <div class="row">
          <!-- ciclo de dia por semana -->
          @foreach  ($weekdata['datos'] as $dayweek)

          @if  ($dayweek['mes']==$mes)
            <div class="col box-day">
              {{ $dayweek['dia']  }}
              <!-- evento -->
              @foreach  ($dayweek['evento'] as $event)
                  <a class="" title="Ver detalle del Evento" href="{{ asset('/Evento/details/') }}/{{ $event->id }}">
                    {{ $event->titulo }}
                  </a>
              @endforeach
            </div>
          @else
          <div class="col box-dayoff">
          </div>
          @endif
          @endforeach
        </div>
      @endforeach

    </div> <!-- /container -->
    <!-- Footer -->
<footer class="page-footer font-small blue pt-4">
  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">
    Proyecto Casa del Migrante

  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->

  </body>
</section>
</html>

