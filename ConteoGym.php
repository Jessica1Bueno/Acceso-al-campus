<?php
    require 'conn.php';
    $conexion = mysqli_connect($servername,$username,$password) or  die("Problemas en la conexion");
    if($conexion){
	    mysqli_select_db($conexion,$dbname) or  die("Problemas en base de dato");
	    //$comando= "SELECT evento, informacion, puntuacion, cupo, costo, imagen FROM eventos WHERE cupo >= 2000 ORDER BY cupo DESC;";
	    $comandoG= "SELECT count(horaentrada)-count(horasalida) as accesoG FROM accesos where lugar='GYM' AND fecha=CURDATE();";
	    $consultaG=mysqli_query($conexion,$comandoG) or die("ERROR  Query ".mysqli_error());
	    $resultadoG=mysqli_fetch_array($consultaG);
	    echo $resultadoG['accesoG'];

    }
        mysqli_close($conexion);
?>