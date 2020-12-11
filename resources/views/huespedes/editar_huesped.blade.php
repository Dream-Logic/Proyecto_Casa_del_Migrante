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
            <form method="post" action="{{route('huesped.update',["id"=>$huesped->id])}}">
                @method('PUT')
                @csrf

                <a class="sr-only sr-only-focusable" href="#content">Skip to main content</a>
                <div class="form-row">

                    <div class="col-5"><br>
                        <label for="nombre">Nombres</label><br>
                        <input type="text" class="form-control" name="nombres"
                               id="nombres" placeholder="Nombres" value="{{$huesped->nombres}}"><br>
                    </div>
                    <br>

                    <div class="col-5"><br>
                        <label for="apellido">Apellidos</label><br>
                        <input type="text" class="form-control" name="apellidos"
                               id="apellidos" placeholder="Apellidos" value="{{$huesped->apellidos}}">
                    </div>
                    <br>


                    <div class="col-5">
                        <label for="FechaNac">Fecha de Nacimiento</label><br>
                        <input type="date" class="form-control" name="fnacimiento"
                               id="fnacimiento" value="{{$huesped->fnacimiento}}"><br>
                    </div>


                    <div class="col-5">
                        <label for="edad">Edad</label><br>
                        <input type="number" class="form-control" name="edad"
                               id="edad" placeholder="Edad" value="{{$huesped->edad}}"><br>
                    </div>

                    <div class="col-5">
                        <label for="sexo">sexo</label><br>
                        <select class="form-control" name="sexo">
                            <option value="femenina" @if($huesped->sexo === "femenino") selected='selected' @endif>
                                Femenino
                            </option>
                            <option value="masculino" @if($huesped->sexo === "masculino") selected='selected' @endif>
                                Masculino
                            </option>
                        </select><br>
                    </div>
                    <br>


                    <div class="col-5">
                        <label for="cabello">Color de cabello</label><br>
                        <select class="form-control" name="cabello">
                            <option value="negro" @if($huesped->cabello === "negro") selected='selected' @endif >Negro
                            </option>
                            <option value="castaño" @if($huesped->cabello === "castaño") selected='selected' @endif >
                                Castaño
                            </option>
                            <option value="pelirojo" @if($huesped->cabello === "pelirojo") selected='selected' @endif>
                                Pelirrojo
                            </option>
                            <option value="rubio" @if($huesped->cabello === "rubio") selected='selected' @endif>Rubio
                            </option>
                            <option value="canoso" @if($huesped->cabello === "canoso") selected='selected' @endif>
                                Canoso
                            </option>
                            <option value="blanco" @if($huesped->cabello === "blanco") selected='selected' @endif>
                                Blanco
                            </option>
                            <option value="otro" @if($huesped->cabello === "otro") selected='selected' @endif>Otro
                            </option>
                        </select><br>
                    </div>


                    <div class="col-5">
                        <label for="OjosSelec">Color de ojos</label><br>
                        <select class="form-control" name="ojos">
                            <option value="negros" @if($huesped->ojos === "negros") selected='selected' @endif>Negros
                            </option>
                            <option value="azules" @if($huesped->ojos === "azules") selected='selected' @endif>Azules
                            </option>
                            <option value="cafes" @if($huesped->ojos === "cafes") selected='selected' @endif>Cafés
                            </option>
                            <option value="verdes" @if($huesped->ojos === "verdes") selected='selected' @endif>Verdes
                            </option>
                            <option value="grises" @if($huesped->ojos === "grises") selected='selected' @endif>Grises
                            </option>
                        </select><br>
                    </div>


                    <div class="col-5">
                        <label for="pielSelct">Color de piel</label><br>
                        <select class="form-control" name="piel">

                            <option value="blanca" @if($huesped->piel === "blanca") selected='selected' @endif>Blanca
                            </option>
                            <option value="trigueña" @if($huesped->piel === "trigueña") selected='selected' @endif>
                                Trigueña
                            </option>
                            <option value="morena" @if($huesped->piel === "morena") selected='selected' @endif>Morena
                            </option>
                            <option value="negra" @if($huesped->piel === "negra") selected='selected' @endif>Negra
                            </option>
                            <option value="otros" @if($huesped->piel === "otros") selected='selected' @endif>Otros
                            </option>

                        </select>
                    </div>


                    <div class="col-5">
                        <label for="identidad">Identidad </label><br>
                        <input type="text" class="form-control" name="identidad" value="{{$huesped->identidad}}"
                               id="identidad" placeholder="0000-0000-00000"><br>
                    </div>
                    <br>


                    <div class="col-5">
                        <label for="nacionalidad">Nacionalidad</label>
                        <input type="text" class="form-control" name="nacionalidad" value="{{$huesped->nacionalidad}}"
                               id="nacionalidad" placeholder="Nacionalidad">
                    </div>
                    <br>


                    <div class="col-5">
                        <label for="pasaporte">Pasaporte</label><br>
                        <input type="text" class="form-control" name="pasaporte" value="{{$huesped->pasaporte}}"
                               id="pasaporte" placeholder="Numero de pasaporte">
                    </div>
                    <br>


                    <div class="col-5">
                        <label for="nacimiento">Lugar de nacimiento</label><br>
                        <input type="text" class="form-control" name="nacimiento"
                               id="nacimiento" placeholder="Lugar de nacimiento" value="{{$huesped->nacimiento}}"><br>
                    </div>


                    <div class="col-11">
                        <label for="direccionProcede">Dirección</label>
                        <span class="col-md-5 col-md-offset-10 text-center">
        <textarea class="form-control" id="direccion" name="direccion"
                  placeholder="Dirección de dónde procede" rows="2">{{$huesped->direccion}}</textarea><br>
                </span></div>
                    <br>


                    <div class="col-11">
                        <label for="signos">Signos Fisicos</label>
                        <span class="col-md-5 col-md-offset-10 text-center">
        <textarea class="form-control" id="signosFisicos" name="signosFisicos"
                  placeholder="Lunares, cicatrices y otros. Describir"
                  rows="2">{{$huesped->signosFisicos}}</textarea><br>
                </span></div>
                    <br>


                    <div class="col-11">
                        <label for="enfermedad">Enfermedad o padecimiento </label>
                        <span class="col-md-5 col-md-offset-10 text-center">
        <textarea class="form-control" id="enfermedad" name="enfermedad"
                  placeholder="Describa la enfermedad o padecimiento" rows="2">{{$huesped->enfermedad}}</textarea><br>
                </span></div>
                    <br>


                    <div class="col-11">
                        <label for="tratamiento">Tratamiento</label>
                        <span class="col-md-5 col-md-offset-10 text-center">
        <textarea class="form-control" id="tratamiento" name="tratamiento"
                  placeholder="Describa el tratamiento que necesita" rows="2">{{$huesped->tratamiento}}</textarea><br>
                </span></div>
                    <br>


                    <button type="submit" class="btn btn-sm btn-success"><i class="fas fa-save"></i> Guardar</button>

                </div>
            </form>
        </div>
    </div>

    </div>
    </div>







@endsection