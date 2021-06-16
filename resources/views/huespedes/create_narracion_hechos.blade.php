@extends ('PlantillaMadre.menu_inicio')
@section('titulo','Narración de hechos')
@section('contenido')

    <br><br><br>
    <div class=" ">
        <div class=""  class="table-responsive" style="-moz-box-shadow: 0px 5px 3px 3px rgba(194,194,194,1);
    box-shadow: 0px 5px 3px 3px rgba(194,194,194,1);" >
            <div class="card-header" style="background-color: #4cd213">

            <label class="card-title" style="color: black" >Narración de los Hechos</label>
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

        <form method="Post" action="{{route('narracion.store',['id'=>$id])}}">
            @csrf
            <div class="card-body">


                @csrf
                <div class="col-11">
                    <img src="/imagenes/iconos_formulario/viviendo-con-ninos.svg" style="margin-left: 50px" class="svg" width="50" height="35"  >
                    <label for="vulneracion" style="color: black;">Vulneración de derechos</label>
                    <span class="col-md-5 col-md-offset-10 text-center">
        <textarea style="margin-left: 12px" class="form-control" id="vulneracion" name="vulneracion"
                  placeholder="Describa la vulneración de derechos del niño, niña o adolescente"
                  rows="3"> {{old('vulneracion')}}</textarea><br>
                        </span></div>
                <br>

                <div class="col-11">
                    <img src="/imagenes/iconos_formulario/proteger.svg" style="margin-left: 50px" class="svg" width="50" height="35"  >
                    <label for="proteccion" style="color: black;">Medidas de protección </label>
                    <span class="col-md-5 col-md-offset-10 text-center">
        <textarea style="margin-left: 12px" class="form-control" id="proteccion" name="proteccion"
                  placeholder="Describa las medidas de protección del niño, niña o adolescente"
                  rows="3">{{old('proteccion')}}</textarea><br>
                        </span></div>
                <br>

            </div>
            <div class="trans text-center">
                <button type="submit" class="btn btn-outline-success"><i class="fas fa-save"></i> Guardar</button>
            </div>
        </form>
        <script src="/js/jquery-3.2.1.min.js"></script>
        <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
        </div></div>
@endsection
