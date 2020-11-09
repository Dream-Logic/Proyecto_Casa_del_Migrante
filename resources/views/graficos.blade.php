<!doctype html>
<html>

<head>
    <title>Gráficos</title>
    <script src="Chart/Chart.min.js"></script>
    <script src="Chart/utils.js"></script>
    <style>
        canvas{
            -moz-user-select: none;
            -webkit-user-select: none;
            -ms-user-select: none;
        }
        .chart-container {
            width: 500px;
            margin-left: 40px;
            margin-right: 40px;
            margin-bottom: 40px;
        }
        .container {
            display: flex;
            flex-direction: row;
            flex-wrap: wrap;
            justify-content: center;
        }
    </style>
</head>

<body>
<div class="container"></div>
<script>
    function createConfig(gridlines, title) {
        return {
            type: 'line',
            data: {
                labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
                datasets: [{
                    label: 'Entre 5 a 10',
                    backgroundColor: window.chartColors.red,
                    borderColor: window.chartColors.red,
                    data: [10, 30, 39, 20, 25, 34, 0],
                    fill: false,
                }, {
                    label: 'Entre 10 a 15',
                    fill: false,
                    backgroundColor: window.chartColors.blue,
                    borderColor: window.chartColors.blue,
                    data: [18, 33, 22, 19, 11, 39, 30],
                }, {
                    label: 'Entre 15 a 20',
                    backgroundColor: window.chartColors.green,
                    borderColor: window.chartColors.green,
                    data: [28, 39, 19, 10, 15, 44, 40],
                    fill: false,
                }, {
                    label: 'Entre 20 a 25',
                    backgroundColor: window.chartColors.yellow,
                    borderColor: window.chartColors.yellow,
                    data: [10, 30, 39, 20, 25, 34, 0],
                    fill: false,
                }, {
                    label: 'Mayor a 25',
                    backgroundColor: window.chartColors.purple,
                    borderColor: window.chartColors.purple,
                    data: [60, 35, 63, 50, 85, 34, 0],
                    fill: false,
                }]
            },
            options: {
                responsive: true,
                title: {
                    display: true,
                    text: title
                },
                scales: {
                    xAxes: [{
                        gridLines: gridlines
                    }],
                    yAxes: [{
                        gridLines: gridlines,
                        ticks: {
                            min: 0,
                            max: 100,
                            stepSize: 10
                        }
                    }]
                }
            }
        };
    }

    window.onload = function() {
        var container = document.querySelector('.container');

        [{
            title: 'Índice de edades',
            gridLines: {
                display: true
            }
        }, {
            title: 'Índice de deserción',
            gridLines: {
            }
        }, {
            title: 'Índice de vulnerabilidad de derechos',
            gridLines: {
                display: false,
                drawBorder: false
            }
        }, {
            title: 'índice de paridad de género',
            gridLines: {
                display: true,
                drawBorder: true,
                drawOnChartArea: false,
            }
        }].forEach(function(details) {
            var div = document.createElement('div');
            div.classList.add('chart-container');

            var canvas = document.createElement('canvas');
            div.appendChild(canvas);
            container.appendChild(div);

            var ctx = canvas.getContext('2d');
            var config = createConfig(details.gridLines, details.title);
            new Chart(ctx, config);
        });
    };
</script>
</body>

</html>
