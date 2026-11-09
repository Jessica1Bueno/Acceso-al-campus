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
                                        echo "   <li><a class='active' href='registro_maestros.php'>MAESTROS</a></li>";
                                        echo "        <li><a href='registro_administrativos.php'>ADMINISTRATIVOS</a></li>";
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
        <p><br><br>REGISTRO<br>DE<br>MAESTROS</p>
    </div>
    <!-- ================ contact section end ================= -->
    
        
        <!-- JS here -->
        <script src="js/vendor/jquery-1.12.4.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.slicknav.min.js"></script>
        <script src="js/jquery.scrollUp.min.js"></script>
        <script src="js/main2.js"></script>
    </body>
    
</html>