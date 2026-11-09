<?php

require 'conn.php';
if(isset($_POST['enviar'])){	
	if($_POST['usuario']==NULL){
		echo"Formulario Incorrecto";
		echo "<META HTTP-EQUIV='refresh' CONTENT='2; registro_baja.php'>";
	}
	else if($_POST['usuario']==1){
		$conexion = mysqli_connect($servername,$username,$password) or  die("error en conexion");
		if($conexion){
			mysqli_select_db($conexion,$dbname) or die("Problemas en la selecciÃ³n de la base de datos");
			$query= "DELETE FROM guardia WHERE clave = '$_POST[clave]';";
			if(mysqli_query($conexion,$query)){
				echo"Datos borrados correctamente.1";
				echo "<META HTTP-EQUIV='refresh' CONTENT='2; registro_baja.php'>";
			}		
			else{
				echo"Ocurrio un error, por favor intentelo mas tarde, si el problema perciste contacte con un administrador del sistema1";
				echo "<META HTTP-EQUIV='refresh' CONTENT='4; registro_baja.php'>";
			}
			mysqli_close($conexion);
 		}
	}
	else if($_POST['usuario']==2){
		$conexion = mysqli_connect($servername,$username,$password) or  die("error en conexion");
		if($conexion){
			mysqli_select_db($conexion,$dbname) or die("Problemas en la selecciÃ³n de la base de datos");
			$query= "DELETE FROM consultores WHERE clave = '$_POST[clave]' ;";
			if(mysqli_query($conexion,$query)){
				echo"Datos borrados correctamente.2";
				echo "<META HTTP-EQUIV='refresh' CONTENT='2; registro_baja.php'>";
			}		
			else{
				echo"Ocurrio un error, por favor intentelo mas tarde, si el problema perciste contacte con un administrador del sistema2";
				echo "<META HTTP-EQUIV='refresh' CONTENT='4; registro_baja.php'>";
			}
			mysqli_close($conexion);
 		}
	}
	else if($_POST['usuario']==0){
		$conexion = mysqli_connect($servername,$username,$password) or  die("error en conexion");
		if($conexion){
			mysqli_select_db($conexion,$dbname) or die("Problemas en la selecciÃ³n de la base de datos");
			$query= "DELETE FROM administradores WHERE clave = '$_POST[clave]' ;";
			if(mysqli_query($conexion,$query)){
				echo"Datos borrados correctamente.3";
				echo "<META HTTP-EQUIV='refresh' CONTENT='2; registro_baja.php'>";
			}		
			else{
				echo"Ocurrio un error, por favor intentelo mas tarde, si el problema perciste contacte con un administrador del sistema3";
				echo "<META HTTP-EQUIV='refresh' CONTENT='4; registro_baja.php'>";
			}
			mysqli_close($conexion);
 		}
	}
}
/*AND nombre = '$_POST[nombre]'*/
?>
