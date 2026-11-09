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
    <title>Registro Externos</title>
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">

    <!-- CSS here -->
    <link rel="stylesheet" href="css/bootstrap.min.css">        
    <link rel="stylesheet" href="css/slicknav.css">             
    <link rel="stylesheet" href="css/estilos.css">              
    <link rel='stylesheet' href='css/style2.css'>               
    <link rel="stylesheet" href="css/themify-icons.css">
    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">
    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all">
    <link rel='stylesheet' href='css/style2.css'>
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
                                        echo "  <li><a class='active' href='registro_externos.php'>EXTERNOS</a></li>";
                                        echo "        <li><a href='registro_alumnos.php'>ALUMNOS</a></li>";
                                        echo "        <li><a href='registro_maestros.php'>MAESTROS</a></li>";
                                        echo "        <li><a href='registro_administrativos.php'>ADMINISTRATIVOS</a></li>";
                                    }
                                    if($usuario==3){
                                        echo "<li><a class='active' href='#'>REGISTRA ENTRADA<i class='ti-angle-down'></i></a>";
                                        echo "    <ul class='submenu'>";
                                        echo "        <li><a  href='registro_externos.php'>EXTERNOS</a></li>";
                                        echo "        <li><a href='registro_alumnos.php'>ALUMNOS</a></li>";
                                        echo "        <li><a href='registro_maestros.php'>MAESTROS</a></li>";
                                        echo "        <li><a href='registro_edministrativos.php'>ADMINISTRATIVOS</a></li>";
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
                                        echo "<span> Cerrar sesión</span>";
                                    echo "</a>";
                                }
                                if($usuario==2){
                                    echo "<div class='live_chat_btn'>";
                                    echo "<a class='boxed_btn_blue login' href='cerrar_sesionC.php'>";
                                        echo "<img src='img/elements/user1.png' height='20px'>";
                                        echo "<span> Cerrar sesión</span>";
                                    echo "</a>";
                                }
                                if($usuario==3){
                                    echo "<div class='live_chat_btn'>";
                                    echo "<a class='boxed_btn_blue login' href='cerrar_sesionA.php'>";
                                        echo "<img src='img/elements/user1.png' height='20px'>";
                                        echo "<span> Cerrar sesión</span>";
                                    echo "</a>";
                                }
                                if($usuario==0){
                                    echo "<a href='iniciar_sesion.html' class='login boxed_btn_blue live_chat_btn'>";
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
    
    <script>
    function soloLetras(e){
        key=e.keyCode || e.which;
        tecla=String.fromCharCode(key).toLowerCase();
        letras="abcdefghijklmnopqrstuvwxyz ";
        especiales="";
        tecla_especial=false
        for(var i in especiales){
            if(key==especiales[i]){
                tecla_especial=true;
                break;
            }
        }
        if(letras.indexOf(tecla)==-1 && !tecla_especial)
            return false;
    }
</script>
<script>
    function solonumeros(e){
       key=e.keyCode || e.which;
       tecla=String.fromCharCode(key).toLowerCase();
       letras="1234567890";
       especiales="8-37-39-46";
       tecla_especial=false
       for(var i in especiales){
            if(key==especiales[i]){
                tecla_especial=true;
                break;
            }
        }
        if(letras.indexOf(tecla)==-1 && !tecla_especial)
            return false;
    }
</script>
<script type="text/javascript">
function verificarPasswords() {
 
    // Ontenemos los valores de los campos de contraseñas 
    pass1 = document.getElementById('pass1');
    pass2 = document.getElementById('pass2');
    pass3 = document.getElementById('nombre');
    pass4 = document.getElementById('clave');
    //document.write(pass3.value);
 


    if (pass4.value=="") {
    // Si no inresan clave mostramos un mensaje 
        document.getElementById("error").classList.remove("mostrar");
        document.getElementById("errorN").classList.remove("mostrar");
        document.getElementById("errorC").classList.add("mostrar");
    }else if (pass3.value=="") {
        // Si no ingresan nombre mostramos un mensaje 
        document.getElementById("error").classList.remove("mostrar");
        document.getElementById("errorN").classList.add("mostrar");
        document.getElementById("errorC").classList.remove("mostrar");
    }else if (pass1.value != pass2.value || pass2.value=="" || pass1.value=="") {
        // Si las constraseñas no coinciden o estan en blanco mostramos un mensaje 
        document.getElementById("error").classList.add("mostrar");
        document.getElementById("errorN").classList.remove("mostrar");
        document.getElementById("errorC").classList.remove("mostrar");
    }  else {
        // Si todos los elementos son correctos mandamos el formulario
        document.forms["myform"].submit();
    }
 
}
</script>
    <div class="page-wrapper  p-t-130 p-b-100 font-poppins margAlta">
        <div class="wrapper wrapper--w680">
            <div class="card card-4">
                <div class="card-body">
                    <h2 class="title">REGISTRAR ENTRADA EXTERNO</h2>
                    <form name="myform" action="validar_alta.php" method="POST">       <!--ENVIAR PARA REGISTRO-->
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group ">
                                    <label class="label">Clave</label>
                                    <input class="input--style-4 tamClave" type="text" name="clave" onkeypress="return solonumeros(event)" id="clave">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group margenNC">
                                    <label class="label">Nombre</label>
                                    <input class="input--style-4 tamNom" type="text" name="nombre" onkeypress="return soloLetras(event)" id="nombre">
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Tipo</label>
                                    <div class="p-t-10">
                                        <label class="radio-container m-r-45">Guardia
                                            <input type="radio" name="Tipousuario" checked value="1">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="radio-container">Consultor
                                            <input type="radio" name="Tipousuario" value="2">
                                            <span class="checkmark"></span>
                                        </label>

                                        <label class="radio-container">Administrador
                                            <input type="radio" name="Tipousuario" value="0">
                                            <span class="checkmark"></span>
                                        </label>

                                    </div>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group margenNC">
                                    <label class="label">Contraseña</label>
                                    <input class="input--style-4 tamContra" type="password" id="pass1" name="contrasena" required>
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-2"></div>
                            <div class="col-2">
                                <div class="input-group margenNC">
                                    <label class="label">Repetir Contraseña</label>
                                    <input class="input--style-4 tamContra" type="password" id="pass2" name="contrasenaR" required>
                                </div>
                            </div>
                        </div>
                        <div class="p-t-15">

                            <!--<button class="btn btn--radius-2 btn--blue" type="submit" name="enviar">REGISTRAR</button> -->


                            <a href="javascript: verificarPasswords()" class="btn btn--radius-2 btn--blue">Registrar</a>
                            <!-- MENSAJE DE ERROR POR SI LAS CONTRASEÑAS NO COINDICEN -->
                            <div id="error" class="alert alert-danger ocultar" role="alert">Las Contraseñas no coinciden o estan en blanco</div>
                            <!-- MENSAJE DE ERROR POR SI NO INGRESAN NOMBRE -->
                            <div id="errorN" class="alert alert-danger ocultar" role="alert">Debes ingresar el nombre</div>
                            <!-- MENSAJE DE ERROR POR SI NO INGRESAN CLAVE -->
                            <div id="errorC" class="alert alert-danger ocultar" role="alert">Debes ingresar la clave</div>
                        </div>
                    </form>
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