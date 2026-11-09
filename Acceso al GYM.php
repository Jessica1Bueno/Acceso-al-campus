<?php
    require 'conn.php';
    $fechaHoy = date("Y-m-d");
    $conexion = mysqli_connect($servername,$username,$password) or  die("Problemas en la conexion");
    $eventosMostrados=0;
    if($conexion){
        mysqli_select_db($conexion,$dbname) or  die("Problemas en base de dato");
        $comando= "SELECT clave, nombre_alumno, lugar, horaentrada, horasalida, fecha FROM accesos where lugar='GYM' ORDER BY horaentrada desc;";
        $consulta=mysqli_query($conexion,$comando) or die("ERROR  Query ".mysqli_error());
        $consulta2=mysqli_query($conexion,$comando) or die("ERROR  Query ".mysqli_error());
        $consulta3=mysqli_query($conexion,$comando) or die("ERROR  Query ".mysqli_error());
        echo "<table>";
            echo "<tr>";
                echo "<td class='first'><h4>Hora de entrada</h4><br>";
                $eventosMostrados=0;
                while($resultado=mysqli_fetch_array($consulta)){
                if($resultado['fecha']==$fechaHoy && $resultado['horasalida']==NULL && $eventosMostrados<7){
                        echo "<div class='single_courses'>";
                        echo "<h6>".$resultado['horaentrada']."</h6>";
                        echo "</div>";
                        $eventosMostrados++;
                    }
                }
                echo "</td>";
                echo "<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>";
                echo "<td class='second'><h4>Clave</h4><br>";
                $eventosMostrados=0;
                while($resultado=mysqli_fetch_array($consulta2)){
                    if($resultado['fecha']==$fechaHoy && $resultado['horasalida']==NULL && $eventosMostrados<7){
                        echo "<div class='single_courses'>";
                        echo "<h6>".$resultado['clave']."</h6>";
                        echo "</div>";
                        $eventosMostrados++;
                    }
                }
                echo "</td>";
                echo "<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>";
                echo "<td class='second'><h4>Nombre</h4><br>";
                $eventosMostrados=0;
                while($resultado=mysqli_fetch_array($consulta3)){
                    if($resultado['fecha']==$fechaHoy && $resultado['horasalida']==NULL && $eventosMostrados<7){
                        echo "<div class='single_courses'>";
                        echo "<h6>".$resultado['nombre_alumno']."</h6>";
                        echo "</div>";
                        $eventosMostrados++;
                    }
                }
                echo "</td>";
            echo "</tr>";
        echo "</table>";
        mysqli_close($conexion);
    }
?>
