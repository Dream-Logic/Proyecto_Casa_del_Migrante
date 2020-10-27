@extends('PlantillaMadre.Plantilla_Madre')
@section('contenido')
    <br>
    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>
                        {{$error}}
                    </li>
                @endforeach
            </ul>
        </div>
    @endif


    <form method="post" action="{{route('listado.edit',['id'=>$huesped->id])}}">
        @method('put')
        @csrf
        <div class="titulouno">
            <h2>Datos Personales del Niño, Niña o Adolescente</h2>
        </div><br>

        <a class="sr-only sr-only-focusable" href="#content">Skip to main content</a>
        <div class="form-row">

            <div class="col-5"><br>
                <label for="nombre">Nombres</label><br>
                <input type="text" class="form-control" name="nombres"
                       id="nombres" placeholder="Nombres" value="{{$huesped->nombres}}"><br>
            </div><br>

            <div class="col-5"><br>
                <label for="apellido">Apellidos</label><br>
                <input type="text" class="form-control" name="apellidos"
                       id="apellidos" placeholder="Apellidos"  value="{{$huesped->apellidos}}">
            </div><br>


            <div class="col-5">
                <label for="FechaNac">Fecha de Nacimiento</label><br>
                <input type="date" class="form-control" name="fnacimiento"
                       id="fnacimiento"  value="{{$huesped->fnacimiento}}"><br>
            </div>



            <div class="col-5">
                <label for="edad">Edad</label><br>
                <input type="number" class="form-control" name="edad"
                       id="edad" placeholder="Edad"  value="{{$huesped->edad}}"><br>
            </div>

            <div class="col-5">
                <label for="sexo">sexo</label><br>
                <select class="form-control" name="sexo"  >
                    <option value="femenina" @if($huesped->sexo === "femenino") selected='selected' @endif>Femenino</option>
                    <option value="masculino"  @if($huesped->sexo === "masculino") selected='selected' @endif>Masculino</option>
                </select><br>
            </div><br>


            <div class="col-5">
                <label for="cabello">Color de cabello</label><br>
                <select class="form-control" name="cabello"  >
                    <option value="negro" @if($huesped->cabello === "negro") selected='selected' @endif >Negro</option>
                    <option value="castaño" @if($huesped->cabello === "castaño") selected='selected' @endif >Castaño</option>
                    <option value="pelirojo"  @if($huesped->cabello === "pelirojo") selected='selected' @endif>Pelirrojo</option>
                    <option value="rubio"  @if($huesped->cabello === "rubio") selected='selected' @endif>Rubio</option>
                    <option value="canoso"  @if($huesped->cabello === "canoso") selected='selected' @endif>Canoso</option>
                    <option value="blanco"  @if($huesped->cabello === "blanco") selected='selected' @endif>Blanco</option>
                    <option value="otro"  @if($huesped->cabello === "otro") selected='selected' @endif>Otro</option>
                </select><br>
            </div>


            <div class="col-5">
                <label for="OjosSelec">Color de ojos</label><br>
                <select class="form-control" name="ojos">
                    <option value="negros"  @if($huesped->ojos === "negros") selected='selected' @endif>Negros</option>
                    <option value="azules" @if($huesped->ojos === "azules") selected='selected' @endif>Azules</option>
                    <option value="cafes" @if($huesped->ojos === "cafes") selected='selected' @endif>Cafés</option>
                    <option value="verdes" @if($huesped->ojos === "verdes") selected='selected' @endif>Verdes</option>
                    <option value="grises" @if($huesped->ojos === "grises") selected='selected' @endif>Grises</option>
                </select><br>
            </div>



            <div class="col-5">
                <label for="pielSelct">Color de piel</label><br>
                <select class="form-control"  name="piel">

                    <option value="blanca" @if($huesped->piel === "blanca") selected='selected' @endif>Blanca</option>
                    <option value="trigueña" @if($huesped->piel === "trigueña") selected='selected' @endif>Trigueña</option>
                    <option value="morena" @if($huesped->piel === "morena") selected='selected' @endif>Morena</option>
                    <option value="negra" @if($huesped->piel === "negra") selected='selected' @endif>Negra</option>
                    <option value="otros" @if($huesped->piel === "otros") selected='selected' @endif>Otros</option>

                </select>
            </div>




            <div class="col-5">
                <label for="identidad">Identidad </label><br>
                <input type="text" class="form-control" name="identidad" value="{{$huesped->identidad}}"
                       id="identidad" placeholder="0000-0000-00000"><br>
            </div><br>


            <div class="col-5">
                <label for="nacionalidad">Nacionalidad</label>
                <input type="text" class="form-control" name="nacionalidad" value="{{$huesped->nacionalidad}}"
                       id="nacionalidad" placeholder="Nacionalidad">
            </div><br>



            <div class="col-5">
                <label for="pasaporte">Pasaporte</label><br>
                <input type="text" class="form-control" name="pasaporte" value="{{$huesped->pasaporte}}"
                       id="pasaporte" placeholder="Numero de pasaporte">
            </div><br>




            <div class="col-5">
                <label for="nacimiento">Lugar de nacimiento</label><br>
                <input type="text" class="form-control" name="nacimiento"
                       id="nacimiento" placeholder="Lugar de nacimiento" value="{{$huesped->nacimiento}}"><br>
            </div>


            <div class="col-11">
                <label for="direccionProcede">Dirección</label>
                <span class="col-md-5 col-md-offset-10 text-center">
        <textarea class="form-control" id="direccion" name="direccion"
                  placeholder="Dirección de dónde procede" rows="2" >{{$huesped->direccion}}</textarea><br>
                </span> </div><br>





            <div class="col-11">
                <label for="signos">Signos Fisicos</label>
                <span class="col-md-5 col-md-offset-10 text-center">
        <textarea class="form-control" id="signosFisicos" name="signosFisicos"
                  placeholder="Lunares, cicatrices y otros. Describir" rows="2" >{{$huesped->signosFisicos}}</textarea><br>
                </span></div><br>


            <div class="col-11">
                <label for="enfermedad">Enfermedad o padecimiento </label>
                <span class="col-md-5 col-md-offset-10 text-center">
        <textarea class="form-control" id="enfermedad" name="enfermedad"
                  placeholder="Describa la enfermedad o padecimiento" rows="2" >{{$huesped->enfermedad}}</textarea><br>
                </span></div><br>


            <div class="col-11">
                <label for="tratamiento">Tratamiento</label>
                <span class="col-md-5 col-md-offset-10 text-center">
        <textarea class="form-control" id="tratamiento" name="tratamiento"
                  placeholder="Describa el tratamiento que necesita" rows="2" >{{$huesped->tratamiento}}</textarea><br>
                </span></div><br>



            <div class="titulouno">
                <h2>Datos Personales de la Madre y/o Resposable Legal</h2>
            </div><br>


            <a class="sr-only sr-only-focusable" href="#content">Skip to main content</a>
            <div class="form-row">

                <div class="col-5"><br>
                    <label for="nombre">Nombres </label><br>
                    <input type="text" class="form-control" name="nombresMadre" value="{{$huesped->nombresMadre}}"
                           id="nombresMadre" placeholder="Nombre completo de la madre y/o resprentante legal."><br>
                </div><br>

                <div class="col-5"><br>
                    <label for="apellido" >Apellidos </label><br>
                    <input type="text" class="form-control" name="apellidosMadre" value="{{$huesped->apellidosMadre}}"
                           id="apellidosMadre" placeholder="Apellido completo de la madre y/o resprentante legal.">
                </div><br>

                <div class="col-5">
                    <label for="FechaNac">Fecha de Nacimiento</label><br>
                    <input type="date" class="form-control" name="fnacimientoMadre" value="{{$huesped->fnacimientoMadre}}"
                           id="fnacimientoMadre"><br>
                </div>


                <div class="col-5">
                    <label for="direccion">Dirección</label>
                    <input type="text" class="form-control" name="direccionMadre" value="{{$huesped->direccionMadre}}"
                           id="direccionMadre" placeholder="Dirección permanente">
                </div><br>


                <div class="col-5">
                    <label for="trabaja">Trabaja</label><br>
                    <select class="form-control" name="trabajaMadre">
                        <option value="Si" @if($huesped->trabajaMadre === "Si") selected='selected' @endif>Si</option>
                        <option value="No" @if($huesped->trabajaMadre === "No") selected='selected' @endif>No</option>
                    </select><br>
                </div><br>

                <div class="col-5">
                    <label for="profesionOficio">Profesión u oficio</label><br>
                    <input type="text" class="form-control" name="profesionOficio" value="{{$huesped->profesionOficio}}"
                           id="profesionOficio" placeholder="Profesión u oficio"><br>
                </div><br>



                <div class="col-5">
                    <label for="identidad">Identidad</label><br>
                    <input type="text" class="form-control" name="identidadMadre" value="{{$huesped->identidadMadre}}"
                           id="identidadMadre" placeholder="Número de identidad"><br>
                </div><br>


                <div class="col-5">
                    <label for="pasaporte">Pasaporte</label><br>
                    <input type="text" class="form-control" name="pasaporteMadre" value="{{$huesped->pasaporteMadre}}"
                           id="pasaporteMadre" placeholder="Número de pasaporte"><br>
                </div><br><br>


                <div class="col-5">
                    <label for="civil">Estado Civil</label><br>
                    <select class="form-control" name="civil">
                        <option value="Soltero/a"  @if($huesped->civil === "Soltero/a") selected='selected' @endif>Soltero/a</option>
                        <option value="Comprometido/a" @if($huesped->civil === "Comprometido/a") selected='selected' @endif>Comprometido/a</option>
                        <option value="Casado/a" @if($huesped->civil === "Casado/a") selected='selected' @endif>Casado/a</option>
                        <option value="Unión libre" @if($huesped->civil === "Unión libre") selected='selected' @endif>Unión libre</option>
                        <option value="Separado/a" @if($huesped->civil === "Separado/a") selected='selected' @endif>Separado/a</option>
                        <option value="Divorciado/a" @if($huesped->civil === "Divorciado/a") selected='selected' @endif>Divorciado/a</option>
                        <option value="Viudo/a" @if($huesped->civil === "Viudo/a") selected='selected' @endif>Viudo/a</option>
                    </select><br>
                </div>

                <div class="col-5">
                    <label for="telefono">Teléfono</label><br>
                    <input type="text" class="form-control" name="telefono" value="{{$huesped->telefono}}"
                           id="telefono" placeholder="Número de teléfono"><br>
                </div><br><br>





                <div class="titulodos">
                    <h2>Datos Personales del Padre</h2>
                </div><br>


                <div class="col-5"><br>
                    <label for="nombrePadre">Nombres </label><br>
                    <input type="text" class="form-control" name="nombresPadre" value="{{$huesped->nombresPadre}}"
                           id="nombresPadre" placeholder="Nombre completo del padre."><br>
                </div><br>

                <div class="col-5"><br>
                    <label for="apellidosPadre">Apellidos </label><br>
                    <input type="text" class="form-control" name="apellidosPadre" value="{{$huesped->apellidosPadre}}"
                           id="apellidosPadre" placeholder="Apellido completo del padre.">
                </div><br>

                <div class="col-5">
                    <label for="FechaNacPadre">Fecha de Nacimiento</label><br>
                    <input type="date" class="form-control" name="fnacimientoPadre" value="{{$huesped->fnacimientoPadre}}"
                           id="fnacimientoPadre"><br>
                </div>


                <div class="col-5">
                    <label for="direccionPadre">Dirección</label>
                    <input type="text" class="form-control" name="direccionPadre" value="{{$huesped->direccionPadre}}"
                           id="direccionPadre" placeholder="Dirección permanente">
                </div><br>

                <div class="col-5">
                    <label for="trabajaPadre">Trabaja</label><br>
                    <select class="form-control" name="trabajaPadre">
                        <option value="Si" @if($huesped->trabajaPadre === "Si") selected='selected' @endif>Si</option>
                        <option value="No" @if($huesped->trabajaPadre === "No") selected='selected' @endif>No</option>
                    </select><br>
                </div><br>



                <div class="col-5">
                    <label for="profesionOficioPadre">Profesión u oficio </label><br>
                    <input type="text" class="form-control" name="profesionOficioPadre" value="{{$huesped->profesionOficioPadre}}"
                           id="profesionOficioPadre" placeholder="Profesión u oficio"><br>
                </div><br>



                <div class="col-5">
                    <label for="identidadPadre">Identidad</label><br>
                    <input type="text" class="form-control" name="identidadPadre" value="{{$huesped->identidadPadre}}"
                           id="identidadPadre" placeholder="Número de identidad"><br>
                </div><br>


                <div class="col-5">
                    <label for="pasaportePadre">Pasaporte</label><br>
                    <input type="text" class="form-control" name="pasaportePadre" value="{{$huesped->pasaportePadre}}"
                           id="pasaportePadre" placeholder="Número de pasaporte"><br>
                </div><br><br>


                <div class="col-5">
                    <label for="civilPadre">Estado Civil</label><br>
                    <select class="form-control" name="civilPadre">
                        <option value="Soltero/a"  @if($huesped->civilPadre === "Soltero/a") selected='selected' @endif>Soltero/a</option>
                        <option value="Comprometido/a" @if($huesped->civilPadre === "Comprometido/a") selected='selected' @endif>Comprometido/a</option>
                        <option value="Casado/a" @if($huesped->civilPadre === "Casado/a") selected='selected' @endif>Casado/a</option>
                        <option value="Unión libre" @if($huesped->civilPadre === "Unión libre") selected='selected' @endif>Unión libre</option>
                        <option value="Separado/a" @if($huesped->civilPadre === "Separado/a") selected='selected' @endif>Separado/a</option>
                        <option value="Divorciado/a" @if($huesped->civilPadre === "Divorciado/a") selected='selected' @endif>Divorciado/a</option>
                        <option value="Viudo/a" @if($huesped->civilPadre === "Viudo/a") selected='selected' @endif>Viudo/a</option>
                    </select><br>
                </div>

                <div class="col-5">
                    <label for="telefonoPadre">Teléfono</label><br>
                    <input type="text" class="form-control" name="telefonoPadre" value="{{$huesped->telefonoPadre}}"
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
                  rows="3" >{{$huesped->vulneracion}}</textarea><br>
                    </span></div><br>


                <div class="col-11">
                    <label for="proteccion">Medidas de protección </label>
                    <span class="col-md-5 col-md-offset-10 text-center">
        <textarea class="form-control" id="proteccion" name="proteccion"
                  placeholder="Describa las medidas de protección del niño, niña o adolescente"
                  rows="3" >{{$huesped->proteccion}}</textarea><br>
                    </span> </div><br>


                <div class="titulouno">
                    <h2>Personal Técnico Responsable</h2>
                </div><br>

                <a class="sr-only sr-only-focusable" href="#content">Skip to main content</a>
                <div class="form-row">

                    <div class="col-5"><br>
                        <label for="nombretecnico">Nombres</label><br>
                        <input type="text" class="form-control" name="nombretecnico" value="{{$huesped->nombretecnico}}"
                               id="nombretecnico" placeholder="Nombre completo del personal téncio responsable"><br>
                    </div><br>



                    <div class="col-5"><br>
                        <label for="apellidotecnico">Apellidos </label><br>
                        <input type="text" class="form-control" name="apellidotecnico" value="{{$huesped->apellidotecnico}}"
                               id="apellidotecnico" placeholder="Apellido completo del personal téncio responsable">
                    </div><br>

                    <div class="col-5">
                        <label for="Fecha">Fecha</label><br>
                        <input type="date" class="form-control" name="fecha" value="{{$huesped->fecha}}"
                               id="fecha"><br>
                    </div>



                    <div class="col-5">
                        <label for="hora">Hora</label><br>
                        <input type="time" class="form-control" name="hora" value="{{$huesped->hora}}"
                               id="hora"><br>
                    </div>





                </div>
                    <div class="botones">
                    <button type="submit" class="btn btn-primary">Guardar</button>
                    <button type="reset" class="btn btn-danger">Restablecer</button>
                    <a class="btn btn-primary" href="{{route('listado.index')}}">Volver</a>

                    </div><br>

                    <div class="dos">
                    </div>
            </div>
        </div>
    </form>
@endsection


