<?php

require 'conn.php';
if(isset($_POST['enviar'])){	
	if($_POST['usuario']==1){
		$conexion = mysqli_connect($servername,$username,$password) or  die("error en conexion");
		if($conexion){
			mysqli_select_db($conexion,$dbname) or die("Problemas en la selecciÃ³n de la base de datos");
			$query= "DELETE FROM guardia WHERE clave = '$_POST[clave]';";
			if(mysqli_query($conexion,$query)){
				echo"Datos borrados correctamente.";
				echo "<META HTTP-EQUIV='refresh' CONTENT='4; registro_baja.php'>";
			}		
			else{
				echo"Ocurrio un error, por favor intentelo mas tarde, si el problema perciste contacte con un administrador del sistema";
				echo "<META HTTP-EQUIV='refresh' CONTENT='4; registro_baja.php'>";
			}
			mysqli_close($conexion);
 		}
	}
	if($_POST['usuario']==2){
		$conexion = mysqli_connect($servername,$username,$password) or  die("error en conexion");
		if($conexion){
			mysqli_select_db($conexion,$dbname) or die("Problemas en la selecciÃ³n de la base de datos");
			$query= "DELETE FROM consultores WHERE clave = '$_POST[clave]' ;";
			if(mysqli_query($conexion,$query)){
				echo"Datos borrados correctamente.";
				echo "<META HTTP-EQUIV='refresh' CONTENT='4; registro_baja.php'>";
			}		
			else{
				echo"Ocurrio un error, por favor intentelo mas tarde, si el problema perciste contacte con un administrador del sistema";
				echo "<META HTTP-EQUIV='refresh' CONTENT='4; registro_baja.php'>";
			}
			mysqli_close($conexion);
 		}
	}
}
/*AND nombre = '$_POST[nombre]'*/
?>
