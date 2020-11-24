@extends('PlantillaMadre.menuEstadisticas')
@section('titulo', 'Estadística paridad de género')
@section('contenido')
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
    <script type="text/javascript" src="Chart/jquery-1.12.0.min.js"></script>
    <script type="text/javascript" src="Chart/dist/Chart.bundle.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){

            var datos = {
                labels : ["Enero", "Febrero", "Marzo", "Abril", "Mayo"],
                datasets : [{
                    label : "Niñas",
                    backgroundColor : "lightgreen",
                    data : [4, 12, 9, 7, 5]
                },
                    {

                        label : "Niños",
                        backgroundColor : "orange",
                        data : [10,7,0,6,5]
                    },
                    {
                        label : "Jovenes",
                        backgroundColor : "lightblue",
                        data : [9,6,15,6,17]
                    }
                ]
            };


            var canvas = document.getElementById('chart').getContext('2d');
            window.bar = new Chart(canvas, {
                type : "bar",
                data : datos,
                options : {
                    elements : {
                        rectangle : {
                            borderWidth : 1,
                            borderColor : "black",
                            borderSkipped : 'bottom'
                        }
                    },
                    responsive : true,
                    title : {
                        display : true,
                    }
                }
            });

            setInterval(function(){
                var newData = [
                    [getRandom(),getRandom(),getRandom(),getRandom(),getRandom()],
                    [getRandom(),getRandom(),getRandom(),getRandom(),getRandom()],
                    [getRandom(),getRandom(),getRandom(),getRandom(),getRandom()],
                ];

                $.each(datos.datasets, function(i, dataset){
                    dataset.data = newData[i];
                });
                window.bar.update();
            }, 20000);




            function getRandom(){
                return Math.round(Math.random() * 100);
            }


        });
    </script>
</head>
<body>
<span style="color: #0b0b0b; font-size: 25px;">Estadística índice paridad de género</span>
<div id="canvas-container" style="width:50%;">
    <canvas id="chart" width="500" height="350"></canvas>
</div>
<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="js/custom.js"></script>
</body>
@endsection
