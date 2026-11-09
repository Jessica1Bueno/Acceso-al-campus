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
    <title>Contacto</title>
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
        <div class="header-area ">
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
                                        
                                        <?php
                                    
                                        if($usuario==1){
                                            echo "<li><a href='reportes.php'>REPORTES</a></li>";
                                            echo "</li>";
                                        }
                                        if($usuario==2){
                                            echo "        <li><a href='registro_externos.php'>EXTERNOS</a></li>";
                                            echo "        <li><a href='registro_alumnos.php'>ALUMNOS</a></li>";
                                            echo "        <li><a href='registro_maestros.php'>MAESTROS</a></li>";
                                            echo "        <li><a href='registro_administrativos.php'>ADMINISTRATIVOS</a></li>";
                                        }
                                        if($usuario==3){
                                            echo "<li><a href='#'>REGISTRA ENTRADA<i class='ti-angle-down'></i></a>";
                                            echo "    <ul class='submenu'>";
                                            echo "        <li><a href='registro_externos.php'>EXTERNOS</a></li>";
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
                                        <li><a class='active' href='contacto.php'>CONTACTO</a></li>
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
    <!-- header-end -->
    <!-- slider_area_start -->
    <div class="slider_area">
        <div class="single_slider d-flex align-items-center justify-content-center slider_bg_1">
            <div class="container contB">
                <div class="row align-items-center justify-content-center">
                    <div class="col-xl-4 col-md-5">
                        <div class="illastrator_png logoFCA">
                            <img src="img/banner/FCA.png" alt="">
                        </div>
                    </div>
                    <div class="col-xl-6 col-md-6">
                        <div class="slider_info sliderText">
                            <h3>CONTACTO</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- slider_area_end -->
    
    <!-- ================ contact section start ================= -->
    <section class="contact-section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                        <h2 class="contact-title">Solicitud de Ayuda</h2>
                </div>
                <div class="col-lg-8">
                    <form name="form1" method="post" action="mailto:170011@upslp.edu.mx">
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <a href="mailto:direccion@destinatario.com?subject=Asunto%20con%20espacios">Enviar correo al administrador</a>
                                </div> 
                            </div>
                    </form>
                </div>

                <div class="media contact-info">
                    <span class="contact-info__icon"><i class="ti-home"></i></span>
                    <div class="media-body">
                        <h3>Francisco I. Madero num. 849, Moderna,</h3>
                        <p>San Luis Potosí, S.L.P. México, C.P. 78233</p>
                    </div>
                </div>
                <div class="media contact-info">
                    <span class="contact-info__icon"><i class="ti-tablet"></i></span>
                    <div class="media-body">
                        <h3>444 834-99-16</h3>
                        <p>Lunes a Viernes. Horario: 7:00 a 15:00 hrs.</p>
                        <h3>826-23-00 ext. 3446</h3>
                        <p>Centro de Innovación Educativa</p>
                    </div>
                </div>
                <div class="media contact-info">
                    <span class="contact-info__icon"><i class="ti-email"></i></span>
                    <div class="media-body">
                        <h3>cie_tics@fca.uaslp.mx</h3>
                        <p>Dispuestos a escucharte!</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3695.3687388547683!2d-100.9861985856101!3d22.150031685401807!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x842a98ab1ca27ac1%3A0xb0e8a47b3e1c316a!2sFrancisco%20I.%20Madero%20849%2C%20De%20Tequisquiapan%2C%2078230%20San%20Luis%2C%20S.L.P.!5e0!3m2!1ses!2smx!4v1641481617933!5m2!1ses!2smx" width="700" height="250" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
    </section>
    
    <!-- ================ contact section end ================= -->
    
    <!-- footer -->
    <footer class="footer footer_bg_1">
        <div class="footer_top">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-md-6 col-lg-4">
                        <div class="footer_widget">
                            <div class="footer_logo">
                                <a href="http://www.uaslp.mx/" target="_blank">
                                    <img src="img/UASLP.png" alt="">
                                </a>
                            </div>
                            <p>Proyecto creado por alumnos de la Universidad Politecnica de San Luis Potosí</p>
                            <div class="socail_links">
                                <ul>
                                    <li>
                                        <a href="https://es-la.facebook.com/UASLPFCA/" target="_blank">
                                            <img src="img/elements/fb.png" height="30px">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://twitter.com/UASLPFCA?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor" target="_blank">
                                            <img src="img/elements/tt.png" height="30px">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.instagram.com/uaslpfca/?hl=es" target="_blank">
                                            <img src="img/elements/insta.png" height="30px">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.youtube.com/channel/UCi__dxjmUPE72gZBPgSx2OA" target="_blank">
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
                                <li><a href="http://www.uaslp.mx/" target="_blank">UASLP</a></li>
                                <li><a href="http://www.fca.uaslp.mx/" target="_blank">FCA</a></li>
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
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer -->
        
        <!-- JS here -->
        <script src="js/vendor/jquery-1.12.4.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.slicknav.min.js"></script>
        <script src="js/jquery.scrollUp.min.js"></script>
        <script src="js/main2.js"></script>
    </body>
    
</html>