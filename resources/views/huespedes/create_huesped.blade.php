@extends ('PlantillaMadre.menu_inicio')
@section('contenido')

    <div class="card ">

        <div class="card-header">
            <label class="card-title">Datos Personales del Niño, Niña o Adolescente</label>
        </div>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif


        @if(session("exito"))
            <div class="alert alert-info">
                {{session("exito")}}
            </div>
        @endif
        <div class="card-body">
            <form method="post" action="{{route('huesped.store')}}">

                @csrf

                <a class="sr-only sr-only-focusable" href="#content">Skip to main content</a>
                <div class="form-row">

                    <div class="col-5"><br>
                        <label for="nombre">Nombres</label><br>
                        <input type="text" class="form-control" name="nombres"
                               id="nombres" placeholder="Nombres"><br>
                    </div>
                    <br>

                    <div class="col-5"><br>
                        <label for="apellido">Apellidos</label><br>
                        <input type="text" class="form-control" name="apellidos"
                               id="apellidos" placeholder="Apellidos">
                    </div>
                    <br>


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
                        <select class="form-control" name="sexo">
                            <option value="femenino">Femenino</option>
                            <option value="masculino">Masculino</option>
                        </select><br>
                    </div>
                    <br>


                    <div class="col-5">
                        <label for="cabello">Color de cabello</label><br>
                        <select class="form-control" name="cabello">
                            <option value="negro">Negro</option>
                            <option value="castaño">Castaño</option>
                            <option value="pelirojo">Pelirrojo</option>
                            <option value="rubio">Rubio</option>
                            <option value="canoso">Canoso</option>
                            <option value="blanco">Blanco</option>
                            <option value="otro">Otro</option>
                        </select><br>
                    </div>


                    <div class="col-5">
                        <label for="OjosSelec">Color de ojos</label><br>
                        <select class="form-control" name="ojos">
                            <option value="negros">Negros</option>
                            <option value="azules">Azules</option>
                            <option value="cafes">Cafés</option>
                            <option value="verdes">Verdes</option>
                            <option value="grises">Grises</option>
                        </select><br>
                    </div>


                    <div class="col-5">
                        <label for="pielSelct">Color de piel</label><br>
                        <select class="form-control" name="piel">

                            <option value="blanca">Blanca</option>
                            <option value="trigueña">Trigueña</option>
                            <option value="morena">Morena</option>
                            <option value="negra">Negra</option>
                            <option value="otros">Otros</option>

                        </select>
                    </div>


                    <div class="col-5">
                        <label for="identidad">Identidad </label><br>
                        <input type="text" class="form-control" name="identidad"
                               id="identidad" placeholder="0000-0000-00000"><br>
                    </div>
                    <br>


                    <div class="col-5">
                        <label for="nacionalidad">Nacionalidad</label>
                        <input type="text" class="form-control" name="nacionalidad"
                               id="nacionalidad" placeholder="Nacionalidad">
                    </div>
                    <br>


                    <div class="col-5">
                        <label for="pasaporte">Pasaporte</label><br>
                        <input type="text" class="form-control" name="pasaporte"
                               id="pasaporte" placeholder="Numero de pasaporte">
                    </div>
                    <br>


                    <div class="col-5">
                        <label for="nacimiento">Lugar de nacimiento</label><br>
                        <input type="text" class="form-control" name="nacimiento"
                               id="nacimiento" placeholder="Lugar de nacimiento"><br>
                    </div>


                    <div class="col-11">
                        <label for="direccionProcede">Dirección</label>
                        <span class="col-md-5 col-md-offset-10 text-center">
        <textarea class="form-control" id="direccion" name="direccion"
                  placeholder="Dirección de dónde procede" rows="2"></textarea><br>
                    </span></div>
                    <br>


                    <div class="col-11">
                        <label for="signos">Signos Fisicos</label>
                        <span class="col-md-5 col-md-offset-10 text-center">
        <textarea class="form-control" id="signosFisicos" name="signosFisicos"
                  placeholder="Lunares, cicatrices y otros. Describir" rows="2"></textarea><br>
                    </span></div>
                    <br>


                    <div class="col-11">
                        <label for="enfermedad">Enfermedad o padecimiento </label>
                        <span class="col-md-5 col-md-offset-10 text-center">
        <textarea class="form-control" id="enfermedad" name="enfermedad"
                  placeholder="Describa la enfermedad o padecimiento" rows="2"></textarea><br>
                    </span></div>
                    <br>


                    <div class="col-11">
                        <label for="tratamiento">Tratamiento</label>
                        <span class="col-md-5 col-md-offset-10 text-center">
        <textarea class="form-control" id="tratamiento" name="tratamiento"
                  placeholder="Describa el tratamiento que necesita" rows="2"></textarea><br>
                    </span></div>
                    <br>

                </div>

                <button type="submit" class="btn btn-sm btn-success"><i class="fas fa-save"></i> Guardar</button>

            </form>

        </div>
    </div>







@endsection