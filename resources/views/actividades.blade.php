<!DOCTYPE html>
<html>
<head>
    <title>Actividades Administrador</title>
    <link rel="stylesheet" type="text/css" href="styles/responsive.css">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!--fuente de la letra cursiva-->
    <link  href="http://fonts.googleapis.com/css?family=Reenie+Beanie:regular" rel="stylesheet" type="text/css">
</head>
<style>
    *{
        margin:0;
        padding:0;
    }
    body{
        font-family:arial,sans-serif;
        font-size:100%;

        background:#666;
        color:#fff;
    }
    h2,p{
        font-size:100%;
        font-weight:normal;
    }
    ul,li{
        list-style:none;
    }
    ul{
        overflow:hidden;
        padding:6em;
    }
    ul li a{
        text-decoration:none;
        color:#000;
        background:#ffc;
        display:block;
        height:10em;
        width:10em;
        padding:1em;
        /*Firefox*/
        -moz-box-shadow:5px 5px 7px rgba(33,33,33,1);
        /* Safari+Chrome */
        -webkit-box-shadow: 5px 5px 7px rgba(33,33,33,.7);
        /* Opera */
        box-shadow: 5px 5px 7px rgba(33,33,33,.7);
        -moz-transition:-moz-transform .15s linear;
        -o-transition:-o-transform .15s linear;
        -webkit-transition:-webkit-transform .15s linear;
    }
    ul li a{
        -webkit-transform:rotate(-6deg);
        -o-transform:rotate(-6deg);
        -moz-transform:rotate(-6deg);
    }
    ul li{
        margin:1em;
        float:left;
    }
    ul li h2{
        font-size:140%;
        font-weight:bold;
        padding-bottom:10px;
    }
    ul li p{
        font-family:"Reenie Beanie",arial,sans-serif;
        font-size:180%;
    }
    ul li:nth-child(even) a{
        -o-transform:rotate(4deg);
        -webkit-transform:rotate(4deg);
        -moz-transform:rotate(4deg);
        position:relative;
        top:5px;
        background:#cfc;
    }
    ul li:nth-child(3n) a{
        -o-transform:rotate(-3deg);
        -webkit-transform:rotate(-3deg);
        -moz-transform:rotate(-3deg);
        position:relative;
        top:-5px;
        background:#ccf;
    }
    ul li:nth-child(5n) a{
        -o-transform:rotate(5deg);
        -webkit-transform:rotate(5deg);
        -moz-transform:rotate(5deg);
        position:relative;
        top:-10px;
    }
    ul li a:hover,ul li a:focus{
        -moz-box-shadow:10px 10px 7px rgba(0,0,0,.7);
        -webkit-box-shadow: 10px 10px 7px rgba(0,0,0,.7);
        box-shadow:10px 10px 7px rgba(0,0,0,.7);
        -webkit-transform: scale(1.25);
        -moz-transform: scale(1.25);
        -o-transform: scale(1.25);
        position:relative;
        z-index:5;
    }
</style>
<body>
<div>
    <ul>
        <li>
            <a>
                <h2>Actividad #1</h2>
                <p>Clases de Escritura</p>
                <img src="images/bienvenido/galeria/casa7.jpg" width="50px" height="50" align="right">
            </a>
        </li>
        <li>
            <a href="#">
                <h2>Actividad #2</h2>
                <p>Aprendiendo a leer</p>
            </a>
        </li>
        <li>
            <a href="#">
                <h2>Actividad #3</h2>
                <p>Clases de Canto</p>
            </a>
        </li>
        <li>
            <a href="#">
                <h2>Actividad #4</h2>
                <p></p>
            </a>
        </li>
        <li>
            <a href="#">
                <h2>Actividad #5</h2>
                <p></p>
            </a>
        </li>
        <li>
            <a href="#">
                <h2>Actividad #6</h2>
                <p></p>
            </a>
        </li>
        <li>
            <a href="#">
                <h2>Actividad #7</h2>
                <p></p>
            </a>
        </li>
        <li>
            <a href="#">
                <h2>Actividad #8</h2>
                <p></p>
            </a>
        </li>
        <li>
            <a href="#">
                <h2>Actividad #9</h2>
                <p></p>
            </a>
        </li>
        <li>
            <a href="#">
                <h2>Actividad #10</h2>
                <p></p>
            </a>
        </li>
    </ul>
</div>
</body>
</html>



