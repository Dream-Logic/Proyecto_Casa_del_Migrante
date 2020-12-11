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
    body {

        font-family: 'Cambria', Cochin, Georgia, Times, Times New Roman, serif;
        font-size: 20px;
        /*color: MediumSeaGreen;*/
        background-color: #80ffd4;


    }

    table {
        font-family: Arial;
        font-size: 18px;

        padding: 10px 10px;
        text-align: left;
        border-collapse: collapse;
    }

    th {
        font-size: 18px;
        font-weight: normal;
        background: #b9c9fe;
        border-top: 4px solid #aabcfe;
        border-bottom: 1px solid #fff;
        color: black;
    }

    td {
        background: #e8edff;
        border-bottom: 1px solid #fff;
        color: black;
        border-top: 1px solid transparent;
    }


    tr:hover td {
        background: #d0dafd;
        color: #339;
    }

    tr:hover th {
        background: #d0dafd;
        color: #339;
    }

    h3 {
        text-align: center;
        /*font-family: 'Verdana', Geneva, Tahoma, sans-serif;*/
        font-size: 20px;
        color: black;
        font-weight: bold;
    }

    h1 {

        /*font-family: 'Verdana', Geneva, Tahoma, sans-serif;*/
        font-size: 45px;
        font-family: 'Times New Roman', Times, serif;

        text-align: center;
        text-transform: unset;
        text-rendering: optimizeLegibility;
        letter-spacing: .05em;
        font-weight: bold;
        background-color: #e7e5e4;
        color: black;
        background-color: #00cc00;


    }

    h2 {
        text-align: center;
        /*font-family: 'Verdana', Geneva, Tahoma, sans-serif;*/
        font-size: 45px;
        font-family: 'Times New Roman', Times, serif;

        text-align: center;
        text-transform: unset;
        text-rendering: optimizeLegibility;
        letter-spacing: .05em;
        font-weight: bold;
        background-color: #e7e5e4;
        color: black;
        background-color: #00cc00;


    }


    .btn1 {

        border-radius: 28px;
        color: white;

        padding-left: 580px;
    }

    input {
        border-radius: 5px;
        height: 39px;


    }

    .botonesD {
        padding-left: 90%;

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
