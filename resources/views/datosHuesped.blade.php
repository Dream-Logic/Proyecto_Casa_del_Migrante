<div class="uno">
</div>
    <br><br>
    <h1>Ficha de Ingreso-Datos del Huésped</h1>

    @extends('PlantillaMadre.Plantilla_Madre')
    @section('titulo', 'Ficha de Huésped')
    @section('contenido')


        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif



        <form method="post" action="">

            @csrf
            <div class="titulouno">
                <h2>Datos Personales del Niño, Niña o Adolescente</h2>
            </div><br>

            <a class="sr-only sr-only-focusable" href="#content">Skip to main content</a>
            <div class="form-row">

                <div class="col-5"><br>
                    <label for="nombre">Nombres</label><br>
                    <input type="text" class="form-control" name="nombres"
                           id="nombres" placeholder="Nombres"><br>
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
                    <select class="form-control" name="sexo">
                        <option value="femenino">Femenino</option>
                        <option value="masculino">Masculino</option>
                    </select><br>
                </div><br>


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
                    <select class="form-control"  name="piel">

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
        <textarea class="form-control" id="direccion" name="direccion"
                  placeholder="Dirección de dónde procede" rows="2" ></textarea><br>
                    </span></div><br>





                <div class="col-11">
                    <label for="signos">Signos Fisicos</label>
                    <span class="col-md-5 col-md-offset-10 text-center">
        <textarea class="form-control" id="signosFisicos" name="signosFisicos"
                  placeholder="Lunares, cicatrices y otros. Describir" rows="2" ></textarea><br>
                    </span>  </div><br>


                <div class="col-11">
                    <label for="enfermedad">Enfermedad o padecimiento </label>
                    <span class="col-md-5 col-md-offset-10 text-center">
        <textarea class="form-control" id="enfermedad" name="enfermedad"
                  placeholder="Describa la enfermedad o padecimiento" rows="2" ></textarea><br>
                    </span></div><br>


                <div class="col-11">
                    <label for="tratamiento">Tratamiento</label>
                    <span class="col-md-5 col-md-offset-10 text-center">
        <textarea class="form-control" id="tratamiento" name="tratamiento"
                  placeholder="Describa el tratamiento que necesita" rows="2" ></textarea><br>
                    </span></div><br>



                <div class="titulouno">
                    <h2>Datos Personales de la Madre y/o Resposable Legal</h2>
                </div><br>


                <a class="sr-only sr-only-focusable" href="#content">Skip to main content</a>
                <div class="form-row">

                    <div class="col-5"><br>
                        <label for="nombre">Nombres </label><br>
                        <input type="text" class="form-control" name="nombresMadre"
                               id="nombresMadre" placeholder="Nombre completo de la madre y/o resprentante legal."><br>
                    </div><br>

                    <div class="col-5"><br>
                        <label for="apellido">Apellidos </label><br>
                        <input type="text" class="form-control" name="apellidosMadre"
                               id="apellidosMadre" placeholder="Apellido completo de la madre y/o resprentante legal.">
                    </div><br>

                    <div class="col-5">
                        <label for="FechaNac">Fecha de Nacimiento</label><br>
                        <input type="date" class="form-control" name="fnacimientoMadre"
                               id="fnacimientoMadre"><br>
                    </div>


                    <div class="col-5">
                        <label for="direccion">Dirección</label>
                        <input type="text" class="form-control" name="direccionMadre"
                               id="direccionMadre" placeholder="Dirección permanente">
                    </div><br>


                    <div class="col-5">
                        <label for="trabaja">Trabaja</label><br>
                        <select class="form-control" name="trabajaMadre">
                            <option value="Si">Si</option>
                            <option value="No">No</option>
                        </select><br>
                    </div><br>

                    <div class="col-5">
                        <label for="profesionOficio">Profesión u oficio</label><br>
                        <input type="text" class="form-control" name="profesionOficio"
                               id="profesionOficio" placeholder="Profesión u oficio"><br>
                    </div><br>



                    <div class="col-5">
                        <label for="identidad">Identidad</label><br>
                        <input type="text" class="form-control" name="identidadMadre"
                               id="identidadMadre" placeholder="Número de identidad"><br>
                    </div><br>


                    <div class="col-5">
                        <label for="pasaporte">Pasaporte</label><br>
                        <input type="text" class="form-control" name="pasaporteMadre"
                               id="pasaporteMadre" placeholder="Número de pasaporte"><br>
                    </div><br><br>


                    <div class="col-5">
                        <label for="civil">Estado Civil</label><br>
                        <select class="form-control" name="civil">
                            <option value="Soltero/a">Soltero/a</option>
                            <option value="Comprometido/a">Comprometido/a</option>
                            <option value="Casado/a">Casado/a</option>
                            <option value="Unión libre">Unión libre</option>
                            <option value="Separado/a">Separado/a</option>
                            <option value="Divorciado/a">Divorciado/a</option>
                            <option value="Viudo/a">Viudo/a</option>
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
                        <input type="text" class="form-control" name="nombresPadre"
                               id="nombresPadre" placeholder="Nombre completo del padre."><br>
                    </div><br>

                    <div class="col-5"><br>
                        <label for="apellidosPadre">Apellidos </label><br>
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
                        <label for="trabajaPadre">Trabaja</label><br>
                        <select class="form-control" name="trabajaPadre">
                            <option value="Si">Si</option>
                            <option value="No">No</option>
                        </select><br>
                    </div><br>



                    <div class="col-5">
                        <label for="profesionOficioPadre">Profesión u oficio </label><br>
                        <input type="text" class="form-control" name="profesionOficioPadre"
                               id="profesionOficioPadre" placeholder="Profesión u oficio"><br>
                    </div><br>



                    <div class="col-5">
                        <label for="identidadPadre">Identidad</label><br>
                        <input type="text" class="form-control" name="identidadPadre"
                               id="identidadPadre" placeholder="Número de identidad"><br>
                    </div><br>


                    <div class="col-5">
                        <label for="pasaportePadre">Pasaporte</label><br>
                        <input type="text" class="form-control" name="pasaportePadre"
                               id="pasaportePadre" placeholder="Número de pasaporte"><br>
                    </div><br><br>


                    <div class="col-5">
                        <label for="civilPadre">Estado Civil</label><br>
                        <select class="form-control" name="civilPadre">
                            <option value="Soltero/a">Soltero/a</option>
                            <option value="Comprometido/a">Comprometido/a</option>
                            <option value="Casado/a">Casado/a</option>
                            <option value="Unión libre">Unión libre</option>
                            <option value="Separado/a">Separado/a</option>
                            <option value="Divorciado/a">Divorciado/a</option>
                            <option value="Viudo/a">Viudo/a</option>
                        </select><br>
                    </div>

                    <div class="col-5">
                        <label for="telefonoPadre">Teléfono</label><br>
                        <input type="text" class="form-control" name="telefonoPadre"
                               id="telefonoPadre" placeholder="Número de teléfono"><br>
                    </div><br><br>



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
                        </span></div><br>


                    <div class="col-11">
                        <label for="proteccion">Medidas de protección </label>
                        <span class="col-md-5 col-md-offset-10 text-center">
        <textarea class="form-control" id="proteccion" name="proteccion"
                  placeholder="Describa las medidas de protección del niño, niña o adolescente"
                  rows="3" ></textarea><br>
                        </span></div><br>


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
                            <a class="btn btn-primary" href="{{route('index.index')}}">Volver</a>
                            <button type="submit" class="btn btn-primary">Guardar</button>
                </div><br>

                <div class="dos">

                </div>
                    </div>
                </div>
            </div>
        </form>

@endsection
