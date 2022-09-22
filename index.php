<!doctype html>
<html>

<head>
    <link rel="shortcut icon" href="#" />
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>METRORREY</title>
    <link rel="icon" type="image/jpg" href="logo/metro.png">

    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="estilos.css">
    <link rel="stylesheet" href="plugins/sweetalert2/sweetalert2.min.css">

    <link rel="stylesheet" type="text/css" href="fuentes/iconic/css/material-design-iconic-font.min.css">

</head>

<body>

    <div class="container-login">
        <div class="wrap-login">
            <form class="login-form validate-form" id="formLogin" action=".htmlspecialchars()" method="post">
                <a>
                    <img class="img-rounded" src="logo/log.png">
                </a>

                <div class="wrap-input100" data-validate="Usuario incorrecto">
                    <input class="input100" type="text" id="usuario" name="usuario" placeholder="USUARIO">
                    <span class="focus-efecto"></span>
                </div>

                <div class="wrap-input100" data-validate="Password incorrecto">
                    <input class="input100" type="password" id="password" name="password" placeholder="CONTRASEÑA">
                    <span class="focus-efecto"></span>
                </div>

                <div class="container-login-form-btn">
                    <button type="submit" name="submit" class="btn btn-secondary btn-lg btn-block">LOGIN</button>
                </div>
            </form>
        </div>
    </div>


    <script src="jquery/jquery-3.3.1.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="popper/popper.min.js"></script>

    <script src="plugins/sweetalert2/sweetalert2.all.min.js"></script>
    <script src="codigo.js"></script>
</body>

</html>