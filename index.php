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
        <div id="container">
            <div id="main">
                <div id="menuarriba">
                    <div id="menu">
                        <h5>Categories</h5>
                        <ul>
                            <li>Wifi USB</li>
                            <li>Antennas</li>
                            <li>Packs</li>
                            <li>Accessories</li>
                            <li>Access Points</li>
                            <li>Network</li>
                            <li>IP Cams</li>
                            <li>Pc Components</li>


                            <li>
                                <form class="form-search" id="form1" name="buscador" method="post" >

                                    <input type="text" placeholder="Search..">
                                    <button type="submit" class="btn btn-success btn-xs" name="search" id="search">Search</button>
                                </form></li>
                        </ul>

                    </div>

                </div>
                <div id="columnder">
                    <div id="containsSlider">
                        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                            <!-- Indicators -->
                            <ol class="carousel-indicators">
                                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                            </ol>

                            <!-- Wrapper for slides -->
                            <div class="carousel-inner">
                                <div class="item active">
                                    <img src="Img/slider/slider1.jpg" />
                                </div>
                                <div class="item">
                                    <img src="Img/slider/slider2.jpg" />
                                </div>
                                <div class="item">
                                    <img src="Img/slider/slider3.jpg" />
                                </div>
                            </div>

                            <!-- Controls -->
                            <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left"></span>
                            </a>
                            <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right"></span>
                            </a>
                        </div>

                    </div>

                </div>
                <div id="footer">
                    <div id="linkfooter">
                        <a>Legal Terms |</a>
                        <a>Security |</a>
                        <a>Privacy |</a>
                        <a>Rate</a>
                    </div>
                    <div id="iconfooter">
                        <img class="iconfooter" src="Img/icon/android2.png">
                        <img class="iconfooter" src="Img/icon/facebook24.png">
                        <img class="iconfooter" src="Img/icon/google17.png">
                        <img class="iconfooter" src="Img/icon/twitter14.png">
                        <img class="iconfooter" src="Img/icon/visa3.png">
                    </div>
                    <div class="clear"></div>
                    <div id="copyright">
                        <p>
                            Wifi Store 2014. Spain. All rights reserved.<br />

                        </p>
                    </div>

                </div>

            </div>
    </body>
</html>
