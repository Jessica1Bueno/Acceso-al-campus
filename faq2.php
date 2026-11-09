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
    <title>Preguntas Frecuentes</title>
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
                                        <li><a href='contacto.php'>CONTACTO</a></li>
                                        <li><a class='active' href='faq2.php'>FAQ</a></li>
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
                            <h3>PREGUNTAS<br>FRECUENTES</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- slider_area_end -->

    <!-- faq start -->
    <div class="popular_courses">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section_title text-center mb-100">
                        <h3>FAQ</h3>
                        <p>Aquí podrás consultar las preguntas repetidas por<br> los usuarios.</p><br>
                        <section class="colorlib-education" data-section="education">
                            <div class="colorlib-narrow-content">
                                <div class="row">
                                    <div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 animate-box" data-animate-effect="fadeInLeft">
                                        <div class="fancy-collapse-panel">
                                            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                                <!--Pregunta 1-->
                                                <div class="panel panel-default">
                                                    <div class="panel-heading" role="tab" id="headingOne">
                                                        <h4 class="panel-title"> <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">¿Para qué sirve el sistema? </a> </h4>
                                                    </div>
                                                    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                                        <div class="panel-body">
                                                            <p>Es un sistema que permite administrar las entradas y salidas de los alumnos, administradores, maestros y personas ajenas a la universidad con el fin de llevar un control.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--Pregunta 2-->
                                                <div class="panel panel-default">
                                                    <div class="panel-heading" role="tab" id="headingTwo">
                                                        <h4 class="panel-title"> <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">¿Quién puede hacer uso del sistema? </a> </h4>
                                                    </div>
                                                    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                                        <div class="panel-body">
                                                            <p>Los administradores designados, los guardias de las entradas y los consultores.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--Pregunta 3-->
                                                <div class="panel panel-default">
                                                    <div class="panel-heading" role="tab" id="headingThree">
                                                        <h4 class="panel-title"> <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">¿Qué puede hacer un administrador? </a> </h4>
                                                    </div>
                                                    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                                        <div class="panel-body">
                                                            <p>1. Tiene la posibilidad de registrar entradas a personas que no cuentan con método de acceso,<br>
                                                               2. Puede dar de alta nuevos usuarios del sistema y dar de baja a usuarios,<br>
                                                               3. Puede realizar consultas de los registros.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--Pregunta 4-->
                                                <div class="panel panel-default">
                                                    <div class="panel-heading" role="tab" id="headingFour">
                                                        <h4 class="panel-title"> <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">¿Qué puede hacer un consultor? </a> </h4>
                                                    </div>
                                                    <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
                                                        <div class="panel-body">
                                                            <p>Solamente puede realizar consultas de los registros que se tienen en la base de datos.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--Pregunta 5-->
                                                <div class="panel panel-default">
                                                    <div class="panel-heading" role="tab" id="headingFive">
                                                        <h4 class="panel-title"> <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">¿Qué puede hacer un guardia? </a> </h4>
                                                    </div>
                                                    <div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
                                                        <div class="panel-body">
                                                            <p>Puede hacer uso de los registros para los maestros, alumnos, administradores y personas externas que no cuentan con método de acceso a la universidad</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- faq end-->

   

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
                            <p>Proyecto creado por alumnos de la Universidad Politécnica de San Luis Potosí</p>
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
                            <h3 class="footer_title"> Páginas</h3>
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
    <script src="js/vendor/modernizr-3.5.0.min.js"></script>
    <script src="js/jquery.slicknav.min.js"></script>
    <script src="js/main2.js"></script>
    
    

    <!--contact js
    <script src="js/contact.js"></script>
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/jquery.form.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/mail-script.js"></script>-->

    
</body>

</html>