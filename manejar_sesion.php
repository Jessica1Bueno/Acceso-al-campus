<link rel="stylesheet" href="css/bootstrap.min.css">        
<link rel="stylesheet" href="css/slicknav.css">             
<link rel="stylesheet" href="css/estilos.css">              
<link rel='stylesheet' href='css/style2.css'>               
<link rel="stylesheet" href="css/themify-icons.css">
<?php
//Solicitamos el archivo con las variables de host
require 'conn.php';

//Creamos la conexion
$conexion = mysqli_connect($servername,$username,$password,$dbname) or die("Problemas en la conexion");

//Recibimos las dos variables
$clave=$_POST["clave"];
$contrasena=$_POST["contrasena"];
 
/* Realizamos una consulta por cada tabla para buscar en que tabla se encuentra 
el usuario que está intentando acceder */

$consultor = mysqli_query($conexion,"SELECT * FROM consultor WHERE clave = '$clave' AND contrasena = '$contrasena'");
$guardia = mysqli_query($conexion,"SELECT * FROM guardia WHERE clave = '$clave' AND contrasena = '$contrasena'");
$administrador = mysqli_query($conexion,"SELECT * FROM administradores WHERE clave = '$clave' AND contrasena = '$contrasena'");
 
/* Sabemos que en el caso que exista el usuario se encontrará en una de estas 
tres tablas, por lo tanto se guardará en alguno de nuestras tres variables 
que guardan nuestra consulta */
 
/* Ahora comprobamos que variable contiene al usuario*/
if($consultor->num_rows > 0){
    /* Si entra en este if significa que el que intenta acceder es un consultor, 
    por lo tanto le creamos una sesión */
    session_start();
 
    $_SESSION['consultor']="$clave";
 
    /* Nos dirigimos al espacio de los alumnos usando header que nos 
    redireccionará a la página que le indiquemos */
    header("Location: index.php");
 
    /* terminamos la ejecución ya que si redireccionamos ya no nos guardia 
    seguir ejecutando código de este archivo */
    exit(); 
}
 
/* Ahora comprobamos si el que intenta acceder es un profesor */
else if($guardia->num_rows > 0){
	
    session_start();
    $_SESSION['guardia']="$clave";
    header("Location: index.php");
    exit(); 
}
 
//comprobamos si es un administrador el que intenta abrir la sesión
else if($administrador->num_rows > 0){
	
    session_start();
    $_SESSION['administrador']="$clave";
    header("Location: index.php");
    exit();
} 
else{
   $variable = "El usuario y/o la contraseña son incorrectos, por favor vuelva a introducirlos.";
   
    

    header('Location: iniciar_sesion.html');
    exit();
}

?>