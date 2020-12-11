<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">

    <title>
        @yield('titulo')
    </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
<style>


    h1 {
        text-align: center;
        /*font-family: 'Verdana', Geneva, Tahoma, sans-serif;*/
        font-size: 55px;
        font-family: 'Times New Roman', Times, serif;
        padding: 10px 10px;
        text-align: center;
        text-transform: unset;
        text-rendering: optimizeLegibility;
        letter-spacing: .05em;
        font-weight: bold;
        background-color: #e7e5e4;
        color: black;
        background-color: #00cc00;
        fill: transparent;


    }

    .titulouno {
        /*font-family: 'Verdana', Geneva, Tahoma, sans-serif;*/
        font-size: 20px;
        font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
        /*font-size: 92px;*/
        padding: 3px 3px;
        text-align: center;
        width: 98%;

        text-transform: unset;
        /* text-rendering: optimizeLegibility;*/
        letter-spacing: .09em;
        /* text-shadow:
           0px 0px 0px #d5d5d5,
           7px 7px 0px rgba(0, 0, 0, 0.2);
           color: #131313;*/
        background-color: #e7e5e4;
        color: #FFFFFF;
        background-color: #0080ff;
        /*fill: transparent;*/
    }

    .titulodos {
        font-size: 20px;
        /*font-family: "Avant Garde", Avantgarde, "Century Gothic",
        CenturyGothic, "AppleGothic", sans-serif;*/
        /*font-size: 92px;*/
        padding: 2px 2px;
        text-align: center;
        font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;

        width: 98%;
        /*text-transform: uppercase;*/
        /*text-rendering: optimizeLegibility;*/
        letter-spacing: .08em;
        /* text-shadow:
           4px 4px 0px #d5d5d5,
           7px 7px 0px rgba(0, 0, 0, 0.2);
           color: #131313;*/
        background-color: #e7e5e4;
        color: #FFFFFF;
        background-color: #0080ff;
        /*fill: transparent;*/
    }

    label {
        font: xx-large;
        font-family: 'Times New Roman', Times, serif;
        font-weight: bold;
    }


    body {

        font-family: 'Cambria', Cochin, Georgia, Times, Times New Roman, serif;
        font-size: 20px;
        /*color: MediumSeaGreen;*/
        background-color: #80ffd4;


    }

    .col-5 {
        margin-left: 50px;
        margin-right: 30px;

    }

    .col-11 {
        margin-left: 50px;
    }

    .botones {
          margin-top: 50px;
          padding-bottom: 50px;
          padding-left: 750px;
          font-family: 'Verdana', Geneva, Tahoma, sans-serif;


      }




</style>


<header>


    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                   aria-haspopup="true" aria-expanded="false">
                    Dropdown
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" href="#">Disabled</a>
            </li>
        </ul>


    </div>
    </nav>

    <main role="main" class="">
        <div class="container">
            <br><br><br>
            @yield('contenido')
        </div>
    </main>


</header>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>


</body>

</html>