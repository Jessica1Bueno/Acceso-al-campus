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
    
    
    <!-- ================ Consultas rapidas start ================= -->
    <script>
        function actualizarAlumnos(){
            $.ajax({
                type: 'POST',
                url: 'Conteo.php',
                success: function(respuesta) {
                    //Pegamos el contenido de update2.php en la div id#update
                    $('#AlumnosInstalaciones').html(respuesta);
               }
            });
        }
        setInterval( function(){actualizarAlumnos();},1000)//Actualizamos cada 1 segundo
        function actualizarAlumnosGym(){
            $.ajax({
                type: 'POST',
                url: 'ConteoGym.php',
                success: function(respuestaG) {
                    //Pegamos el contenido de update2.php en la div id#update
                    $('#AlumnosGym').html(respuestaG);
               }
            });
        }
        setInterval( function(){actualizarAlumnosGym();},1000)//Actualizamos cada 1 segundo
    </script>

    <div class="conteoTot">
        <div >
            <h2>Dentro de las instalaciones FCA<br></h2>
            <div id="AlumnosInstalaciones" class="totP"></div>
            <p>Esta sección muestra el número total de<br>
                de personas dentro de FCA.</p>
        </div >
        <div >
            <h2>Dentro de las instalaciones GYM<br></h2>
            <div id="AlumnosGym" class="totP"></div>
            <p>Esta sección muestra el número total de<br>
                de personas dentro del gimnasio.</p>
        </div>
    </div>
    
    <div class="popular_courses">
        <div class="container">
             <div class="row">
                <div class="col-xl-12">
                    <div class="section_title text-center mb-100">
                        <h3>Accesos</h3>
                        <p>Accesos recientes a las intalaciones.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="course_nav">
                        <nav>
                            <ul class="nav" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <!--MODIFICAR AQUI PARA VER LOS REGISTROS NUEVOS!     href-->
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab"
                                            aria-controls="home" aria-selected="true">Acceso a la universidad</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab"
                                            aria-controls="profile" aria-selected="false">Acceso al GYM</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab"
                                            aria-controls="contact" aria-selected="false">Salida de la Universidad</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="design-tab" data-toggle="tab" href="#design" role="tab"
                                            aria-controls="design" aria-selected="false">Salida del GYM</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <div class="all_courses">
            <div class="container">
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <script>
                            function actualizarAccesoFCA(){
                                $.ajax({
                                    type: 'POST',
                                    url: 'Acceso a la universidad.php',
                                    success: function(respuesta1) {
                                        //Pegamos el contenido de update2.php en la div id#update
                                        $('#AccesoFCA').html(respuesta1);
                                    }
                                });
                            }
                            setInterval( function(){actualizarAccesoFCA();},1000)//Actualizamos cada 1 segundo
                        </script>
                        <div id="AccesoFCA" class="row"></div>
                    </div>
                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        <script>
                            function actualizarAccesoGYM(){
                                $.ajax({
                                    type: 'POST',
                                    url: 'Acceso al GYM.php',
                                    success: function(respuesta2) {
                                        //Pegamos el contenido de update2.php en la div id#update
                                        $('#AccesoGYM').html(respuesta2);
                                    }
                                });
                            }
                            setInterval( function(){actualizarAccesoGYM();},1000)//Actualizamos cada 1 segundo
                        </script>
                        <div id="AccesoGYM" class="row"></div>
                    </div>
                    <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                        <script>
                            function actualizarSalidaFCA(){
                                $.ajax({
                                    type: 'POST',
                                    url: 'Salida de la Universidad.php',
                                    success: function(respuesta3) {
                                        //Pegamos el contenido de update2.php en la div id#update
                                        $('#SalidaFCA').html(respuesta3);
                                    }
                                });
                            }
                            setInterval( function(){actualizarSalidaFCA();},1000)//Actualizamos cada 1 segundo
                        </script>
                        <div id="SalidaFCA" class="row"></div>
                    </div>
                    <div class="tab-pane fade" id="design" role="tabpanel" aria-labelledby="design-tab">
                        <script>
                            function actualizarSalidaGYM(){
                                $.ajax({
                                    type: 'POST',
                                    url: 'Salida del GYM.php',
                                    success: function(respuesta4) {
                                        //Pegamos el contenido de update2.php en la div id#update
                                        $('#SalidaGYM').html(respuesta4);
                                    }
                                });
                            }
                            setInterval( function(){actualizarSalidaGYM();},1000)//Actualizamos cada 1 segundo
                        </script>
                        <div id="SalidaGYM" class="row"></div>
                    </div>
                    <div class="tab-pane fade" id="design" role="tabpanel" aria-labelledby="design-tab">
                        <div class="row">
                            <?php
                                require 'conn.php';

                                    $fechaHoy = date("Y-m-d");
                                    $conexion = mysqli_connect($servername,$username,$password) or  die("Problemas en la conexion");
                                    if($conexion){
                                    mysqli_select_db($conexion,$dbname) or  die("Problemas en base de dato");
                                    $comando= "SELECT clave, nombre_alumno, lugar, horaentrada, horasalida, fecha FROM accesos where lugar='GYM' ORDER BY horaentrada ASC;";
                                    $consulta=mysqli_query($conexion,$comando) or die("ERROR  Query ".mysqli_error());
                                    while($resultado=mysqli_fetch_array($consulta)){
                                        if($eventosMostrados<7 && $resultado['fecha']==$fechaHoy && $resultado['horasalida']!=NULL){
                                            echo "<div class='single_courses'>";
                                            echo "<div class='courses_info'>";
                                            echo "<h6>".$resultado['clave']."- ".$resultado['nombre_alumno']."</h6>";
                                            echo "<h6>Hora de salida: ".$resultado['horasalida']."</h6>";
                                            echo "</div>";
                                            echo "</div>";
                                            $eventosMostrados++;
                                        }
                                    }
                                    mysqli_close($conexion);
                                    }
                                ?>
                                        
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
    <!-- ================ consultas rapidas end ================= -->

        
        <!-- JS here -->
        <script src="js/vendor/jquery-1.12.4.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.slicknav.min.js"></script>
        <script src="js/jquery.scrollUp.min.js"></script>
        <script src="js/main2.js"></script>
    </body>
    
</html>