<?php

require 'conn.php';
	if($_POST['Tipousuario']==NULL){
		echo"Formulario Incorrecto";
		echo "<META HTTP-EQUIV='refresh' CONTENT='2; registro_alta.php'>";
	}
	else if($_POST['Tipousuario']==1){
		$conexion = mysqli_connect($servername,$username,$password) or  die("error en conexion");
		if($conexion){
			mysqli_select_db($conexion,$dbname) or
			die("Problemas en la selecciÃ³n de la base de datos");
			$query= "INSERT INTO guardia (clave,nombre,contrasena) VALUES ('$_POST[clave]', '$_POST[nombre]', '$_POST[contrasena]');";
			if(mysqli_query($conexion,$query)){
				echo"Datos guardados correctamente.";
				echo "<META HTTP-EQUIV='refresh' CONTENT='2; registro_alta.php'>";
			}		
			else{
				echo"Ocurrio un error, por favor intentelo mas tarde, si el problema perciste contacte con un administrador del sistema";
				echo "<META HTTP-EQUIV='refresh' CONTENT='4; registro_alta.php'>";
			}
			mysqli_close($conexion);
		}
	}
	else if($_POST['Tipousuario']==2){
		$conexion = mysqli_connect($servername,$username,$password) or  die("error en conexion");
		if($conexion){
			mysqli_select_db($conexion,$dbname) or
			die("Problemas en la selecciÃ³n de la base de datos");
			$query= "INSERT INTO consultor (clave,nombre,contrasena) VALUES ('$_POST[clave]', '$_POST[nombre]', '$_POST[contrasena]');";
			if(mysqli_query($conexion,$query)){
				echo"Datos guardados correctamente.";
				echo "<META HTTP-EQUIV='refresh' CONTENT='2; registro_alta.php'>";
			}		
			else{
				echo"Ocurrio un error, por favor intentelo mas tarde, si el problema perciste contacte con un administrador del sistema";
				echo "<META HTTP-EQUIV='refresh' CONTENT='4; registro_alta.php'>";
			}
			mysqli_close($conexion);
		}
	}
	else if($_POST['Tipousuario']==0){
		$conexion = mysqli_connect($servername,$username,$password) or  die("error en conexion");
		if($conexion){
			mysqli_select_db($conexion,$dbname) or die("Problemas en la selecciÃ³n de la base de datos");
			$query= "INSERT INTO administradores (clave,nombre,contrasena) VALUES ('$_POST[clave]', '$_POST[nombre]', '$_POST[contrasena]');";
			if(mysqli_query($conexion,$query)){
				echo"Datos guardados correctamente.";
				echo "<META HTTP-EQUIV='refresh' CONTENT='2; registro_alta.php'>";
			}		
			else{
				echo"Ocurrio un error, por favor intentelo mas tarde, si el problema perciste contacte con un administrador del sistema";
				echo "<META HTTP-EQUIV='refresh' CONTENT='4; registro_alta.php'>";
			}
			mysqli_close($conexion);
		}
	}
?>
