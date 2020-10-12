<div class="uno">

    <br><br>
    <h1>Ficha de Ingreso-Descripción de los Hechos.</h1>

    @extends('PlantillaMadre.Plantilla_Madre')
    @section('titulo', 'Ficha de Descripción')
    @section('contenido')



        <form method="post" action="">


            <div class="titulouno">
                <h2>Narración de los Hechos</h2>
            </div><br><br>

            @csrf
            <div class="col-11">
                <label for="vulneracion">Vulneración de derechos</label>
                <span class="col-md-5 col-md-offset-10 text-center">
        <textarea class="form-control" id="vulneracion" name="vulneracion"
                  placeholder="Describa la vulneración de derechos del niño, niña o adolescente"
                  rows="3" ></textarea><br>
            </div><br>


            <div class="col-11">
                <label for="proteccion">Medidas de protección </label>
                <span class="col-md-5 col-md-offset-10 text-center">
        <textarea class="form-control" id="proteccion" name="proteccion"
                  placeholder="Describa las medidas de protección del niño, niña o adolescente"
                  rows="3" ></textarea><br>
            </div><br>

            <div class="botones">
                <a class="btn btn-primary" href="{{route('ficha.fichados')}}">Regresar</a>
                <a class="btn btn-primary" href="{{route('fichaV.vacia')}}">Guardar</a>
                <a class="btn btn-primary" href="{{route('fichasa.fichacuatro')}}">Siguiente</a>
            </div>
            <div class="dos">




        </form>

@endsection
