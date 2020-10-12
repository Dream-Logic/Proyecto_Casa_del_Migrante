<div class="uno">

    <br><br>

    <h1>Ficha de Ingreso-Datos del Huésped</h1>


    @extends('PlantillaMadre.Plantilla_Madre')

    @section('titulo', 'Ficha de Huésped')
    @section('contenido')


        <form method="post" action="">

            @csrf
            <div class="titulouno">
                <h2>Datos Personales del Niño, Niña o Adolescente</h2>
            </div><br>

            <a class="sr-only sr-only-focusable" href="#content">Skip to main content</a>
            <div class="form-row">

                <div class="col-5"><br>
                    <label for="nombre">Nombres</label><br>
                    <input type="text" class="form-control" name="nombre"
                           id="nombre" placeholder="Nombres"><br>
                </div><br>

                <div class="col-5"><br>
                    <label for="apellido">Apellidos</label><br>
                    <input type="text" class="form-control" name="apellidos"
                           id="apellidos" placeholder="Apellidos">
                </div><br>


                <div class="col-5">
                    <label for="FechaNac">Fecha de Nacimiento</label><br>
                    <input type="date" class="form-control" name="fnacimiento"
                           id="fnacimiento"><br>
                </div>



                <div class="col-5">
                    <label for="edad">Edad</label><br>
                    <input type="number" class="form-control" name="edad"
                           id="edad" placeholder="Edad"><br>
                </div>

                <div class="col-5">
                    <label for="sexo">sexo</label><br>
                    <select class="form-control" id="Sexo">
                        <option>Femenino</option>
                        <option>Masculino</option>
                    </select><br>
                </div><br>


                <div class="col-5">
                    <label for="cabello">Color de cabello</label><br>
                    <select class="form-control" id="cabello">
                        <option>Cataño</option>
                        <option>Negro</option>
                        <option>Pelirrojo</option>
                        <option>Rubio</option>
                        <option>Canoso</option>
                        <option>Blanco</option>
                        <option>Otro</option>
                    </select><br>
                </div>


                <div class="col-5">
                    <label for="OjosSelec">Color de ojos</label><br>
                    <select class="form-control" id="ojoselect">
                        <option>Negros</option>
                        <option>Azules</option>
                        <option>Cafés</option>
                        <option>Verdes</option>
                        <option>Grises</option>
                    </select><br>
                </div>



                <div class="col-5">
                    <label for="pielSelct">Color de piel</label><br>
                    <select class="form-control" id="ojoselect">
                        <option>Blanca</option>
                        <option>Trigueña</option>
                        <option>Morena</option>
                        <option>Negra</option>
                        <option>Otros</option>
                    </select><br>
                </div>


                <div class="col-5">
                    <label for="identidad">Identidad </label><br>
                    <input type="text" class="form-control" name="identidad"
                           id="identidad" placeholder="0000-0000-00000"><br>
                </div><br>


                <div class="col-5">
                    <label for="nacionalidad">Nacionalidad</label>
                    <input type="text" class="form-control" name="nacionalidad"
                           id="nacionalidad" placeholder="Nacionalidad">
                </div><br>



                <div class="col-5">
                    <label for="pasaporte">Pasaporte</label><br>
                    <input type="text" class="form-control" name="pasaporte"
                           id="pasaporte" placeholder="Numero de pasaporte">
                </div><br>




                <div class="col-5">
                    <label for="nacimiento">Lugar de nacimiento</label><br>
                    <input type="text" class="form-control" name="nacimiento"
                           id="nacimiento" placeholder="Lugar de nacimiento"><br>
                </div>


                <div class="col-11">
                    <label for="direccionProcede">Dirección</label>
                    <span class="col-md-5 col-md-offset-10 text-center">
        <textarea class="form-control" id="signos" name="direccionProcede"
                  placeholder="Dirección de dónde procede" rows="2" ></textarea><br>
                </div><br>





                <div class="col-11">
                    <label for="signos">Signos Fisicos</label>
                    <span class="col-md-5 col-md-offset-10 text-center">
        <textarea class="form-control" id="signos" name="signos"
                  placeholder="Lunares, cicatrices y otros. Describir" rows="2" ></textarea><br>
                </div><br>


                <div class="col-11">
                    <label for="enfermedad">Enfermedad o padecimiento </label>
                    <span class="col-md-5 col-md-offset-10 text-center">
        <textarea class="form-control" id="enfermedad" name="enfermedad"
                  placeholder="Describa la enfermedad o padecimiento" rows="2" ></textarea><br>
                </div><br>


                <div class="col-11">
                    <label for="tratamiento">Tratamiento</label>
                    <span class="col-md-5 col-md-offset-10 text-center">
        <textarea class="form-control" id="tratamiento" name="tratamiento"
                  placeholder="Describa el tratamiento que necesita" rows="2" ></textarea><br>
                </div><br>



                <div class="botones">
                    <button type="button" class="btn btn-primary active"> Regresar </button>
                    <a class="btn btn-primary" href="{{route('fichaV.vacia')}}">Guardar</a>
                    <a class="btn btn-primary" href="{{route('ficha.fichados')}}">Siguiente</a>
                </div><br>

                <div class="dos">

        </form>

@endsection