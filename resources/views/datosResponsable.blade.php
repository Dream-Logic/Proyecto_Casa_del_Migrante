<div class="uno">

    <br><br>
    <h1>Ficha de Ingreso-Datos de la Persona Responsable</h1>



    @extends('PlantillaMadre.Plantilla_Madre')
    @section('titulo', 'Ficha de persona responsable')
    @section('contenido')


        <form method="post" action="">

            @csrf
            <div class="titulouno">
                <h2>Datos Personales de la Madre y/o Resposable Legal</h2>
            </div><br>


            <a class="sr-only sr-only-focusable" href="#content">Skip to main content</a>
            <div class="form-row">

                <div class="col-5"><br>
                    <label for="nombre">Nombres </label><br>
                    <input type="text" class="form-control" name="nombre"
                           id="nombre" placeholder="Nombre completo de la madre y/o resprentante legal."><br>
                </div><br>

                <div class="col-5"><br>
                    <label for="apellido">Apellidos </label><br>
                    <input type="text" class="form-control" name="apellidos"
                           id="apellidos" placeholder="Apellido completo de la madre y/o resprentante legal.">
                </div><br>

                <div class="col-5">
                    <label for="FechaNac">Fecha de Nacimiento</label><br>
                    <input type="date" class="form-control" name="fnacimiento"
                           id="fnacimiento"><br>
                </div>


                <div class="col-5">
                    <label for="direccion">Dirección</label>
                    <input type="text" class="form-control" name="direccion"
                           id="direccion" placeholder="Dirección permanente">
                </div><br>

                <div class="col-5">
                    <label for="profesionOficio">Profesión u oficio</label><br>
                    <input type="text" class="form-control" name="profesionOficio"
                           id="profesionOficio" placeholder="Profesión u oficio"><br>
                </div><br>

                <div class="col-5">
                    <label for="trabaja">Trabaja</label><br>
                    <select class="form-control" id="trabaja">
                        <option>Si</option>
                        <option>No</option>
                    </select><br>
                </div><br>


                <div class="col-5">
                    <label for="identidad">Identidad</label><br>
                    <input type="text" class="form-control" name="identidad"
                           id="identidad" placeholder="Número de identidad"><br>
                </div><br>


                <div class="col-5">
                    <label for="pasaporte">Pasaporte</label><br>
                    <input type="text" class="form-control" name="pasaporte"
                           id="pasaporte" placeholder="Número de pasaporte"><br>
                </div><br><br>


                <div class="col-5">
                    <label for="civil">Estado Civil</label><br>
                    <select class="form-control" id="civil">
                        <option>Soltero/a</option>
                        <option>Comprometido/a</option>
                        <option>Casado/a</option>
                        <option>Unión libre o unión de hecho</option>
                        <option>Separado/a</option>
                        <option>Divorciado/a</option>
                        <option>Viudo/a</option>
                    </select><br>
                </div>

                <div class="col-5">
                    <label for="telefono">Teléfono</label><br>
                    <input type="text" class="form-control" name="telefono"
                           id="telefono" placeholder="Número de teléfono"><br>
                </div><br><br>





                <div class="titulodos">
                    <h2>Datos Personales del Padre</h2>
                </div><br>


                <div class="col-5"><br>
                    <label for="nombrePadre">Nombres </label><br>
                    <input type="text" class="form-control" name="nombrePadre"
                           id="nombrePadre" placeholder="Nombre completo del padre."><br>
                </div><br>

                <div class="col-5"><br>
                    <label for="apellidoPadre">Apellidos </label><br>
                    <input type="text" class="form-control" name="apellidosPadre"
                           id="apellidosPadre" placeholder="Apellido completo del padre.">
                </div><br>

                <div class="col-5">
                    <label for="FechaNacPadre">Fecha de Nacimiento</label><br>
                    <input type="date" class="form-control" name="fnacimientoPadre"
                           id="fnacimientoPadre"><br>
                </div>


                <div class="col-5">
                    <label for="direccionPadre">Dirección</label>
                    <input type="text" class="form-control" name="direccionPadre"
                           id="direccionPadre" placeholder="Dirección permanente">
                </div><br>

                <div class="col-5">
                    <label for="profesionOficioPadre">Profesión u oficio </label><br>
                    <input type="text" class="form-control" name="profesionOficioPadre"
                           id="profesionOficioPadre" placeholder="Profesión u oficio"><br>
                </div><br>

                <div class="col-5">
                    <label for="trabajaPadre">Trabaja</label><br>
                    <select class="form-control" id="trabajaPadre">
                        <option>Si</option>
                        <option>No</option>
                    </select><br>
                </div><br>


                <div class="col-5">
                    <label for="identidadPadre">Identidad</label><br>
                    <input type="text" class="form-control" name="identidaPadre"
                           id="identidadPadre" placeholder="Número de identidad"><br>
                </div><br>


                <div class="col-5">
                    <label for="pasaportePadre">Pasaporte</label><br>
                    <input type="text" class="form-control" name="pasaportePadre"
                           id="pasaportePadre" placeholder="Número de pasaporte"><br>
                </div><br><br>


                <div class="col-5">
                    <label for="civilPadre">Estado Civil</label><br>
                    <select class="form-control" id="civilPadre">
                        <option>Soltero/a</option>
                        <option>Comprometido/a</option>
                        <option>Casado/a</option>
                        <option>Unión libre o unión de hecho</option>
                        <option>Separado/a</option>
                        <option>Divorciado/a</option>
                        <option>Viudo/a</option>
                    </select><br>
                </div>

                <div class="col-5">
                    <label for="telefonoPadre">Teléfono</label><br>
                    <input type="text" class="form-control" name="telefonoPadre"
                           id="telefonoPadre" placeholder="Número de teléfono"><br>
                </div><br><br>






                <div class="botones">
                    <a class="btn btn-primary" href="{{route('ficha.indice')}}">Regresar</a>
                    <a class="btn btn-primary" href="{{route('fichaV.vacia')}}">Guardar</a>
                    <a class="btn btn-primary" href="{{route('fichas.fichatres')}}">Siguiente</a>
                </div><br><br><br>

                <div class="dos">

        </form>

@endsection