@extends('PlantillaMadre.menuEstadisticas')
@section('contenido')

    @if(session('mensaje'))
        <div class="alert alert-success">
            {{session('mensaje')}}
        </div>
    @endif
    <br><br><br>
    <br><br>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
        <link href="plugins/fontawesome-free-5.0.1/css/fontawesome-all.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" type="text/css" href="styles/stylesAdmin/main_styles.css">
        <link rel="stylesheet" type="text/css" href="styles/responsive.css">
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
    </head>
    <body>
        <em style="color: #0b0b0b; font-size: 30px; align-items: center" >Listado de niños, niñas y jovenes</em><br>
        <?php
        $datos = array (
            'Estefany'=>87,
            'daniela'=>66,
            'oscar'=>78,
            'danilo'=>45,
            'hector'=>76,
            'skarleth'=>50,
            'gabriel'=>64,
            'luz'=>98,
            'gisselle'=>54,
            'armando'=>56);

        $calcu = count($datos);
        $niños = 0;
        $jovenes = 0;
        foreach ($datos as $valor){
            if($valor >= 65){
                $jovenes++;
            }else{
                $niños++;
            }
        }

        echo "Total alumnos es: ". $calcu;
        echo "<br>"."Total de niños es: ".$niños;
        echo "<br>"."Total jovenes es: ".$jovenes;
        $promniños = ($niños/$calcu)*100;
        $promjovenes = ($jovenes/$calcu)*100;
        echo"<br>". "Promedio de niños: ".$promniños."%";
        echo"<br>". "Promedio de jovenes: ".$promjovenes."%";

        ?>
        <h6>Alumnos reprobados</h6>
        <table border='1'>
            <tr>
                <th>Estudiante</th>
                <th>Notas</th>
                <th>Estado</th>
            </tr>

            <?php
            $clave=0;
            foreach ($datos as $clave=> $valor ) {
                if($valor<=64){
                    echo "<tr >
        <td >$clave </td >
        <td > ".$valor."</td >
        <td >Reprobados</td >
    </tr >";}
            }?>
        </table>
        <h6>Alumnos aprobados</h6>
        <table border='1'>
            <tr>
                <th>Estudiante</th>
                <th>Notas</th>
                <th>Estado</th>
            </tr>

            <?php
            foreach ($datos as $clave=> $valor ) {
                if($valor>=65){
                    echo "<tr >
        <td >$clave </td >
        <td > ".$valor."</td >
        <td >Aprobados</td >
    </tr >";}
            }?>
        </table>

    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="styles/bootstrap4/popper.js"></script>
    <script src="styles/bootstrap4/bootstrap.min.js"></script>
    <script src="js/custom.js"></script>
    </body>
@endsection


