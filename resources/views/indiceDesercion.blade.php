@extends('PlantillaMadre.menuEstadisticas')
@section('titulo', 'Estadística índice de deserción')
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
                type: "pie",
                data : {
                    datasets :[{
                        data : [
                            5,
                            10,
                            40,
                            12,
                            23,
                        ],
                        backgroundColor: [
                            "#F7464A",
                            "#46BFBD",
                            "#FDB45C",
                            "#949FB1",
                            "#fed525",
                        ],
                    }],
                    labels : [
                        "Entre 5 a 10",
                        "Entre 10 a 15",
                        "Entre 15 a 20",
                        "Entre 20 a 25",
                        "Mayor de 25 ",
                    ]
                },
                options : {
                    responsive : true,
                }
            };

            var canvas = document.getElementById('chart').getContext('2d');
            window.pie = new Chart(canvas, datos);

            setInterval(function(){
                datos.data.datasets.splice(0);
                var newData = {
                    backgroundColor : [
                        "#F7464A",
                        "#46BFBD",
                        "#FDB45C",
                        "#949FB1",
                        "#fed525",
                    ],
                    data : [getRandom(), getRandom(), getRandom(), getRandom(), getRandom()]
                };

                datos.data.datasets.push(newData);

                window.pie.update();

            }, 8000);



            function getRandom(){
                return Math.round(Math.random() * 100);
            }


        });
    </script>
</head>
<body>
<span style="color: #0b0b0b; font-size: 25px;">Estadística de índice de deserción</span>
<div id="canvas-container" style="width:50%;">
    <canvas id="chart" width="500" height="350"></canvas>
</div>
<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="js/custom.js"></script>
</body>
@endsection


