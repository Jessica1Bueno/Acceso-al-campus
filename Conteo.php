<?php
    require 'conn.php';
    $conexion = mysqli_connect($servername,$username,$password) or  die("Problemas en la conexion");
    if($conexion){
	    mysqli_select_db($conexion,$dbname) or  die("Problemas en base de dato");
	    //$comando= "SELECT evento, informacion, puntuacion, cupo, costo, imagen FROM eventos WHERE cupo >= 2000 ORDER BY cupo DESC;";
	    $comando= "SELECT count(horaentrada)-count(horasalida) as acceso FROM accesos where fecha=CURDATE();";
	    $consulta=mysqli_query($conexion,$comando) or die("ERROR  Query ".mysqli_error());
	    $resultado=mysqli_fetch_array($consulta);
	    echo $resultado['acceso'];
    }
        mysqli_close($conexion);
?>
