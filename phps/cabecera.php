<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Wifi Store</title>
        <link href="lib/Css/Style.css" rel="stylesheet" type="text/css" media="screen" />
        <link href="lib/bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css" media="screen" />
        <link href="lib/bootstrap/css/bootstrap-theme.css" rel="stylesheet" type="text/css" media="screen" />
        <script src="lib/jquery/js/jquery-2.0.3.min.js" type="text/javascript"></script>
        <script src="lib/bootstrap/js/bootstrap.js"></script>
        <script src="index.js" type="text/javascript"></script>

    </head>
    <body>
        <div id="topbar">
            <div id="logotopbar"></div>
            <div id="carro">
                <div id="carrito">

                </div>
            </div>
            <div id="user">
                <form id="inicioForm" role="form"  >
                    <div class="form-group" id="inicioSesion">
                        <strong>Login</strong>

                        <p>Nick</p>
                        <input class="form-control" name="nick">
                        <p>Password</p>
                        <input class="form-control" type="password" name="pass">
                        <a class="btn btn-success" href="javascript:validar()">login</a>

                        <button  class="btn btn-primary" data-toggle="modal" data-target="#myModal">Create Account
                        </button>

                    </div></form>
            </div>

        </div>