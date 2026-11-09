<?php
	require 'conn.php';
	date_default_timezone_set("America/Monterrey");
	$fechaHoy = date("Y-m-d");
	$horaactual = date("h:i:s");
	$conexion = mysqli_connect($servername,$username,$password) or  die("error en conexion");
	if($conexion){
		mysqli_select_db($conexion,$dbname) or die("Problemas en la selecciÃ³n de la base de datos");
			$query= "SELECT count(clave) as conteo FROM pruebaalumnos
			WHERE clave = '$_POST[clave]';";

			$query1= "SELECT count(clave) as conteo, horasalida,horaentrada FROM accesos
			WHERE clave = '$_POST[clave]' and horasalida is NULL;";
		if(($consulta=mysqli_query($conexion,$query)) && ($consulta1=mysqli_query($conexion,$query1))){
			$resultado=mysqli_fetch_array($consulta);
			$resultado1=mysqli_fetch_array($consulta1);
			if($resultado['conteo']==1){
				if($resultado1['conteo']<1){
					if($_POST['lugar']=='FCA'){
						$conexion = mysqli_connect($servername,$username,$password) or  die("error en conexion");
						if($conexion){
							mysqli_select_db($conexion,$dbname) or
							die("Problemas en la selecciÃ³n de la base de datos");
									$query= "INSERT INTO accesos (clave,nombre_alumno,lugar,horaentrada,fecha)
									SELECT clave, nombre_alumno, 'FCA','$horaactual','$fechaHoy'
									FROM pruebaalumnos
									WHERE clave = '$_POST[clave]';";
							if(mysqli_query($conexion,$query)){
								echo"Datos guardados correctamente.";
								echo "<META HTTP-EQUIV='refresh' CONTENT='2; registro_alumnos.php'>";
							}		
							else{
								echo"Ocurrio un error, por favor intentelo mas tarde, si el problema perciste contacte con un administrador del sistema.";
								echo "<META HTTP-EQUIV='refresh' CONTENT='4; registro_alumnos.php'>";
							}
						}
					}
					if($_POST['lugar']=='GYM'){
						$conexion = mysqli_connect($servername,$username,$password) or  die("error en conexion");
						if($conexion){
							mysqli_select_db($conexion,$dbname) or
							die("Problemas en la selecciÃ³n de la base de datos");
							$query= "INSERT INTO accesos (clave,nombre_alumno,lugar,horaentrada,fecha)
									SELECT clave, nombre_alumno, 'GYM','$horaactual','$fechaHoy'
									FROM pruebaalumnos
									WHERE clave = '$_POST[clave]';";
								if(mysqli_query($conexion,$query)){
								echo"Datos guardados correctamente.";
								echo "<META HTTP-EQUIV='refresh' CONTENT='2; registro_alumnos.php'>";
							}		
							else{
								echo"Ocurrio un error, por favor intentelo mas tarde, si el problema perciste contacte con un administrador del sistema.";
								echo "<META HTTP-EQUIV='refresh' CONTENT='4; registro_alumnos.php'>";
							}
						}
					}
				}
				else{
					echo"Ultima entrada registrada: $resultado1[horaentrada].";
					echo "<META HTTP-EQUIV='refresh' CONTENT='4; registro_alumnos.php'>";
				}
			}
			else{
				echo"Clave no encontrada, favor de verificarla.";
				echo "<META HTTP-EQUIV='refresh' CONTENT='4; registro_alumnos.php'>";}
		}	
		else{
			echo"Ocurrio un error, por favor intentelo mas tarde, si el problema perciste contacte con un administrador del sistema.";
		}
	}
	mysqli_close($conexion);
?>
