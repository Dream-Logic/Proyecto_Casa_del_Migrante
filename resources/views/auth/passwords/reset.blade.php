<!DOCTYPE html>
<html lang="en">
<head>
    <title>Inicio de Sesión</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>

    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset("vendor/bootstrap/css/bootstrap.min.css")}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset("fonts/font-awesome-4.7.0/css/font-awesome.min.css")}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset("fonts/Linearicons-Free-v1.0.0/icon-font.min.css")}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset("vendor/animate/animate.css")}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset("vendor/css-hamburgers/hamburgers.min.css")}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset("vendor/animsition/css/animsition.min.css")}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset("vendor/select2/select2.min.css")}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset("vendor/daterangepicker/daterangepicker.css")}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset("css/cssrestaurar/util.css")}}">
    <link rel="stylesheet" type="text/css" href="{{asset("css/cssrestaurar/main.css")}}">
    <!--===============================================================================================-->
</head>
<body>

<div class="limiter">
    <div class="container-login100" style="-webkit-gradient(radial, center center, 0px, center center, 100%, color-stop(0%, rgba(203,96,179,1)), color-stop(50%, rgba(193,70,161,1)), color-stop(51%, rgba(168,0,119,1)), color-stop(100%, rgba(219,54,164,1)));">

        <div class="wrap-login100 p-t-30 p-b-50">
				<span class="login100-form-title p-b-41">
                    <strong>Restablecer Contraseña</strong>
				</span>
            <form class="login100-form validate-form p-b-33 p-t-5" method="POST" action="{{ route('password.request1') }}">
                {{ csrf_field() }}

                <input type="hidden" name="token" value="{{ $token }}">
                <div class="wrap-input100 validate-input" data-validate="Enter username">
                    <h4  class="justify-content-center" style="text-align: center ">Correo Electronico</h4>
                    <br>
                    <input class="form-control input100 justify-content-center" type="text" name="email"
                           value="{{old("email")}}" >
                    <span class="focus-input100 justify-content-center" data-placeholder="&#x2709;"></span>
                    @if ($errors->has('email'))
                        <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                    @endif


                </div>

                <div  class="wrap-input100 validate-input" data-validate="Enter password">
                    <h4  class="justify-content-center" style="text-align: center ">Contraseña</h4>
                    <br>
                    <input  class="form-control input100 justify-content-center" type="password" name="password" >
                    <span class="focus-input100 justify-content-center" data-placeholder="&#x1F512;"></span>
                    @if ($errors->has('password'))
                        <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                    @endif
                </div>

                <div class="wrap-input100 validate-input" data-validate="Enter password">
                    <h4  class="justify-content-center" style="text-align: center ">Confirmar Contraseña</h4>
                    <br>
                    <input  class="form-control input100 justify-content-center"type="password" name="password_confirmation" >
                    <span class="focus-input100" data-placeholder="&#x1F512;"></span>
                    @if ($errors->has('password_confirmation'))
                        <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                    @endif
                </div>
                <div class="container-login100-form-btn m-t-32">
                    <button class="login100-form-btn">
                        Restablecer
                    </button>
                </div>

            </form>
        </div>
    </div>
</div>


<div id="dropDownSelect1"></div>

<!--===============================================================================================-->
<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
<script src="vendor/bootstrap/js/popper.js"></script>
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
<script src="vendor/daterangepicker/moment.min.js"></script>
<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
<script src="js/main.js"></script>

</body>
</html>
