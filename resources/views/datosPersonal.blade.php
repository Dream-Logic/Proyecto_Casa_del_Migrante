<div class="uno">
    <br><br>
    <h1>Ficha de Ingreso-Personal Técnico Responsable</h1>
    @extends('PlantillaMadre.Plantilla_Madre')
    @section('titulo', 'Ficha de Huésped')
    @section('contenido')


        <form method="post" action="">

            @csrf

            <div class="titulouno">
                <h2>Personal Técnico Responsable</h2>
            </div><br>

            <a class="sr-only sr-only-focusable" href="#content">Skip to main content</a>
            <div class="form-row">

                <div class="col-5"><br>
                    <label for="nombretecnico">Nombres</label><br>
                    <input type="text" class="form-control" name="nombretecnico"
                           id="nombretecnico" placeholder="Nombre completo del personal téncio responsable"><br>
                </div><br>



                <div class="col-5"><br>
                    <label for="apellidotecnico">Apellidos </label><br>
                    <input type="text" class="form-control" name="apellidotecnico"
                           id="apellidotecnico" placeholder="Apellido completo del personal téncio responsable">
                </div><br>

                <div class="col-5">
                    <label for="Fecha">Fecha</label><br>
                    <input type="date" class="form-control" name="fecha"
                           id="fecha"><br>
                </div>



                <div class="col-5">
                    <label for="hora">Hora</label><br>
                    <input type="time" class="form-control" name="hora"
                           id="hora"><br>
                </div>

                <div class="botones">

                    <a class="btn btn-primary" href="{{route('fichas.fichatres')}}">Regresar</a>
                    <a class="btn btn-primary" href="{{route('fichaV.vacia')}}">Guardar</a>
                </div><br><br><br>


                <div class="dos">

        </form>

@endsection
