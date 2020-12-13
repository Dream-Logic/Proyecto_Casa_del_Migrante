@extends ('PlantillaMadre.menu_inicio')
@section('titulo','Narración de hechos')
@section('contenido')

    <br><br>
    <div class="card ">

        <div class="card-header">
            <label class="card-title">Narración de los Hechos</label>
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
                    <label for="vulneracion">Vulneración de derechos</label>
                    <span class="col-md-5 col-md-offset-10 text-center">
        <textarea class="form-control" id="vulneracion"

                  name="vulneracion"
                  placeholder="Describa la vulneración de derechos del niño, niña o adolescente"
                  rows="3"> {{old('vulneracion')}}</textarea><br>
                        </span></div>
                <br>


                <div class="col-11">
                    <label for="proteccion">Medidas de protección </label>
                    <span class="col-md-5 col-md-offset-10 text-center">
        <textarea class="form-control" id="proteccion" name="proteccion"
                  placeholder="Describa las medidas de protección del niño, niña o adolescente"
                  rows="3">{{old('proteccion')}}</textarea><br>
                        </span></div>
                <br>


            </div>
            <div class="botones">
                <button type="submit" class="btn btn-sm btn-success"><i class="fas fa-save"></i> Guardar</button>
            </div>
        </form>
        <script src="/js/jquery-3.2.1.min.js"></script>
    </div>
@endsection
