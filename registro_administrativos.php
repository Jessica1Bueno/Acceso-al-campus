<?php
session_start();
 
//Si la variable de sesión participante está vacía
if (isset($_SESSION['consultor'])){ 
    //nos envía al inicio
    $usuario=1;
}else if (isset($_SESSION['guardia'])){ 
    //nos envía al inicio
    $usuario=2;
}else if (isset($_SESSION['administrador'])){ 
    //nos envía al inicio
    $usuario=3;
}else{
    $usuario=0;
}

?>

<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Registro Maestros</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">

    <!-- CSS here -->
    <link rel="stylesheet" href="css/bootstrap.min.css">        
    <link rel="stylesheet" href="css/slicknav.css">             
    <link rel="stylesheet" href="css/estilos.css">              
    <link rel='stylesheet' href='css/style2.css'>               
    <link rel="stylesheet" href="css/themify-icons.css">
</head>

<body>

    <!-- header-start -->
    <header>
        <div class="header-area menu">
            <div id="sticky-header" class="main-header-area">
                <div class="container-fluid p-0">
                    <div class="row align-items-center no-gutters">
                        <div class="col-xl-2 col-lg-2">
                            <div class="logo-img logoNav">
                                <?php
                                if($usuario==3){
                                    echo "<a href='index.php'>";
                                    echo "<img src='img/UASLP.png' alt=''>";
                                    echo "</a>";
                                }
                                else if($usuario==1){
                                    echo "<a href='index.php'>";
                                    echo "<img src='img/UASLP.png' alt=''>";
                                    echo "</a>";
                                }
                                else if($usuario==2){
                                    echo "<a href='index.php'>";
                                    echo "<img src='img/UASLP.png' alt=''>";
                                    echo "</a>";
                                }
                                else if($usuario==0){
                                    echo "<a href='index.php'>";
                                    echo "<img src='img/UASLP.png' alt=''>";
                                    echo "</a>";
                                }
                                ?>
                            </div>
                        </div>
                        <div class="col-xl-7 col-lg-7">
                            <div class="main-menu  d-none d-lg-block">
                                <nav>
                                    <ul id="navigation">
                                    
                                    
                                    <li><a href='index.php'>INICIO</a></li>
                                        </li>
                                        
                                    <?php
                                    
                                    if($usuario==1){
                                        echo "<li><a href='reportes.php'>REPORTES</a></li>";
                                        echo "</li>";
                                    }
                                    if($usuario==2){
                                        echo "        <li><a href='registro_externos.php'>EXTERNOS</a></li>";
                                        echo "        <li><a href='registro_alumnos.php'>ALUMNOS</a></li>";
                                        echo "        <li><a href='registro_maestros.php'>MAESTROS</a></li>";
                                        echo "  <li><a class='active' href='registro_administrativos.php'>ADMINISTRATIVOS</a></li>";
                                    }
                                    if($usuario==3){
                                        echo "<li><a class='active' href='#'>REGISTRA ENTRADA<i class='ti-angle-down'></i></a>";
                                        echo "    <ul class='submenu'>";
                                        echo "        <li><a  href='registro_externos.php'>EXTERNOS</a></li>";
                                        echo "        <li><a href='registro_alumnos.php'>ALUMNOS</a></li>";
                                        echo "        <li><a href='registro_maestros.php'>MAESTROS</a></li>";
                                        echo "        <li><a href='registro_administrativos.php'>ADMINISTRATIVOS</a></li>";
                                        echo "        </li>";
                                        echo "    </ul>";

                                        echo "<li><a href='#'>REGISTROS <i class='ti-angle-down'></i></a>";
                                        echo "<ul class='submenu'>";
                                        echo "<li><a href='registro_alta.php'>Agregar Usuario</a></li>";
                                        echo "<li><a href='registro_baja.php'>Eliminar Usuario</a></li>";
                                        echo "</ul>";
                                        echo "</li>";
                                        echo "<li><a href='reportes.php'>REPORTES</a></li>";
                                    }
                                    
                                        ?>
                                        <li><a href='contacto.php'>CONTACTO</a></li>
                                        <li><a href='faq2.php'>FAQ</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 d-none d-lg-block">
                            <div class="log_chat_area d-flex align-items-center">
                            
                                <?php
                                if($usuario==1){
                                    echo "<div class='live_chat_btn'>";
                                    echo "<a class='boxed_btn_blue login' href='cerrar_sesionP.php'>";
                                        echo "<img src='img/elements/user1.png' height='20px'>";
                                        echo "<span> Cerrar sesión <br> <center>Consultor</center> </span>";
                                    echo "</a>";
                                }
                                if($usuario==2){
                                    echo "<div class='live_chat_btn'>";
                                    echo "<a class='boxed_btn_blue login' href='cerrar_sesionC.php'>";
                                        echo "<img src='img/elements/user1.png' height='20px'>";
                                        echo "<span> Cerrar sesión <br> <center>Guardia</center> </span>";
                                    echo "</a>";
                                }
                                if($usuario==3){
                                    echo "<div class='live_chat_btn'>";
                                    echo "<a class='boxed_btn_blue login' href='cerrar_sesionA.php'>";
                                        echo "<img src='img/elements/user1.png' height='20px'>";
                                        echo "<span> Cerrar sesión <br> <center>Admin</center> </span>";
                                    echo "</a>";
                                }
                                if($usuario==0){
                                    echo "<a href='iniciar_sesion.html' class='login boxed_btn_blue '>";
                                    echo "<img src='img/elements/user1.png' height='20px'>";
                                    echo "<span> Iniciar sesión</span>";
                                    echo "</a>";
                                }
                                ?>
                                </div>
                                
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    
    
    <!-- ================ contact section start ================= -->
    <div class="popCour">
        <p><br><br>REGISTRO<br>DE<br>ADMINISTRATIVOS</p>
    </div>
    <!-- ================ contact section end ================= -->
    
    <!-- footer -->
    <!--<footer class="footer footer_bg_1">
        <div class="footer_top">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-md-6 col-lg-4">
                        <div class="footer_widget">
                            <div class="footer_logo">
                                <a href="http://www.upslp.edu.mx/upslp/">
                                    <img src="img/logo.png" alt="">
                                </a>
                            </div>
                            <p>Proyecto creado por alumnos de la Universidad Politecnica de San Luis Potosí</p>
                            <div class="socail_links">
                                <ul>
                                    <li>
                                        <a href="https://es-la.facebook.com/UASLPFCA/">
                                            <img src="img/elements/fb.png" height="30px">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://twitter.com/UASLPFCA?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor">
                                            <img src="img/elements/tt.png" height="30px">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.instagram.com/uaslpfca/?hl=es">
                                            <img src="img/elements/insta.png" height="30px">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.youtube.com/channel/UCi__dxjmUPE72gZBPgSx2OA">
                                            <img src="img/elements/yt.png" height="30px">
                                        </a>
                                    </li>
                                </ul>
                            </div>

                        </div>
                    </div>
                    <div class="col-xl-2 col-md-6 col-lg-2">
                        <div class="footer_widget">
                            <h3 class="footer_title">Páginas</h3>
                            <ul>
                                <li><a href="http://www.uaslp.mx/">UASLP</a></li>
                                <li><a href="http://www.fca.uaslp.mx/">FCA</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-lg-3">
                        <div class="footer_widget">
                            <h3 class="footer_title">Dirección</h3>
                            <p>Francisco I. Madero 849, Moderna,<br> 78233 San Luis, S.L.P.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copy-right_text">
            <div class="container">
                <div class="footer_border"></div>
                <div class="row">
                    <div class="col-xl-12">
                        <p class="copy_right text-center">
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>-->
    <!-- footer -->
        
        <!-- JS here -->
        <script src="js/vendor/jquery-1.12.4.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.slicknav.min.js"></script>
        <script src="js/jquery.scrollUp.min.js"></script>
        <script src="js/main2.js"></script>
    </body>
    
</html>