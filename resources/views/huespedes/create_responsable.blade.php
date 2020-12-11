@extends ('PlantillaMadre.menu_inicio')
@section('contenido')

    <div class="card ">

        <div class="card-header">
            <label class="card-title">Datos Personales de la Madre y/o Resposable Legal</label>
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

        <form method="Post" action="{{route('responsable.store',['id'=>$id])}}">
            @csrf
            <div class="card-body">


                <a class="sr-only sr-only-focusable" href="#content">Skip to main content</a>
                <div class="form-row">


                    <div class="col-5">
                        <label for="parentesco">Parentesco</label>
                        <select class="form-control" name="parentesco">
                            <option value="Madre">Madre</option>
                            <option value="Padre">Padre</option>
                            <option value="Responsable Legal">Responsable Legal</option>
                        </select>
                    </div>
                    <div class="col-5">
                        <label for="nombre">Nombres </label>
                        <input type="text" class="form-control"
                               value="{{old('nombres')}}"
                               name="nombres"
                               id="nombres" placeholder="Nombre completo de la madre y/o resprentante legal."><br>
                    </div>
                    <br>

                    <div class="col-5">
                        <label for="apellido">Apellidos </label><br>
                        <input type="text" class="form-control"
                               value="{{old('apellidos')}}"
                               name="apellidos"
                               id="apellidos" placeholder="Apellido completo de la madre y/o resprentante legal.">
                    </div>
                    <br>

                    <div class="col-5">
                        <label for="FechaNac">Fecha de Nacimiento</label><br>
                        <input type="date" class="form-control"
                               value="{{old('fnacimiento')}}"
                               name="fnacimiento"
                               id="fnacimiento"><br>
                    </div>


                    <div class="col-5">
                        <label for="direccion">Dirección</label>
                        <input type="text" class="form-control"
                               value="{{old('direccion')}}"
                               name="direccion"
                               id="direccion" placeholder="Dirección permanente">
                    </div>
                    <br>


                    <div class="col-5">
                        <label for="trabaja">Trabaja</label><br>
                        <select class="form-control"

                                name="trabaja">
                            <option value="Si" @if(old('trabaja') === "Si") selected='selected' @endif>Si</option>
                            <option value="No" @if(old('trabaja')=== "No") selected='selected' @endif>No</option>
                        </select><br>
                    </div>
                    <br>

                    <div class="col-5">
                        <label for="profesionOficio">Profesión u oficio</label><br>
                        <input type="text" class="form-control"
                               value="{{old('profesionOficio')}}"
                               name="profesionOficio"
                               id="profesionOficio" placeholder="Profesión u oficio"><br>
                    </div>
                    <br>


                    <div class="col-5">
                        <label for="identidad">Identidad</label><br>
                        <input type="text" class="form-control"
                               value="{{old('identidad')}}"
                               name="identidad"
                               id="identidadMadre" placeholder="Número de identidad"><br>
                    </div>
                    <br>


                    <div class="col-5">
                        <label for="pasaporte">Pasaporte</label><br>
                        <input type="text" class="form-control"
                               value="{{old('pasaporte')}}"
                               name="pasaporte"
                               id="pasaporteMadre" placeholder="Número de pasaporte"><br>
                    </div>
                    <br><br>


                    <div class="col-5">
                        <label for="civil">Estado Civil</label><br>
                        <select class="form-control" name="civil">
                            <option value="Soltero/a" @if(old('civil') === "Soltero/a") selected='selected' @endif>
                                Soltero/a
                            </option>
                            <option value="Comprometido/a"
                                    @if(old('civil') === "Comprometido/a") selected='selected' @endif>Comprometido/a
                            </option>
                            <option value="Casado/a" @if(old('civil')=== "Casado/a") selected='selected' @endif>
                                Casado/a
                            </option>
                            <option value="Unión libre" @if(old('civil') === "Unión libre") selected='selected' @endif>
                                Unión libre
                            </option>
                            <option value="Separado/a" @if(old('civil') === "Separado/a") selected='selected' @endif>
                                Separado/a
                            </option>
                            <option value="Divorciado/a" @if(old('civil')=== "Divorciado/a") selected='selected' @endif>
                                Divorciado/a
                            </option>
                            <option value="Viudo/a" @if(old('civil')=== "Viudo/a") selected='selected' @endif>Viudo/a
                            </option>
                        </select><br>
                    </div>

                    <div class="col-5">
                        <label for="telefono">Teléfono</label><br>
                        <input type="text" class="form-control" name="telefono"
                               id="telefono" placeholder="Número de teléfono"><br>
                    </div>
                    <br><br>


                </div>

                <div class="">
                    <a class="btn btn-primary" href="{{route('narracion.nuevo', ['id'=>$id])}}">Siguiente</a>
                    <button type="submit" class="btn btn-sm btn-success"><i class="fas fa-save"></i> Guardar</button>
                </div>
            </div>
        </form>
    </div>



@endsection
