<?php 
	require 'conn.php';
	$conn = new mysqli($servername, $username, $password, $dbname);
	if ($conn->connect_error){
		die("Connection failed: " . $conn->connect_error);
	}
	$mae=$_POST['clave'];
	$mae2=$_POST['lugar'];
	$mae3=$_POST['fecha'];
	if($mae=='Todos')
		$mae='';
	if($mae2=='Todos')
		$mae2='';
	if($mae3=='Todos')
		$mae3='';
	$eve='participantes';
	require'pdf/fpdf.php';
	$pdf = new FPDF();
	$pdf->AddPage();
	$pdf->SetFont('Arial','B',12);
	$pp=0;
	$d=48;
	$fechaHoy = date("Y-m-d");
	$conexion = mysqli_connect($servername,$username,$password) or  die("Problemas en la conexion");
	if($conexion){
		mysqli_select_db($conexion,$dbname) or  die("Problemas en base de dato");
		$comando= "SELECT * FROM accesos where clave like '%$mae%' and lugar like '%$mae2%' and fecha like '%$mae3%';";
		$consulta=mysqli_query($conexion,$comando) or die("ERROR  Query ".mysqli_error($conexion));
		while($resultado=mysqli_fetch_array($consulta)){
			if($pp==0)
				$pdf->TitleTable();
			$pdf->DataTable($resultado['clave'],$resultado['nombre_alumno'],$resultado['horaentrada'],$resultado['horasalida'],$resultado['lugar'],$resultado['fecha'],$d);
			$d+=5;
			$pp++;
			if($pp==45){
				$pdf->AddPage();
				$d=48;
				$pp=0;
			}
		}
		mysqli_close($conexion);
	}
	$pdf->Output();
?>


