<?php
$hostname = "localhost"; 
$prueba = "micanasta";
$user = "root"; 
$pass = "";

  
   $con = mysql_connect("$hostname","$user","$pass"); 

 
   $database = mysql_select_db($prueba,$con); 

/* ********************************************** */
/*
  `idUsuario` INT NOT NULL,
  `nombreUsuario` VARCHAR(70) NOT NULL,
  `passwordUsuario` VARCHAR(30) NOT NULL,
  `direccionUsuario` VARCHAR(100) NOT NULL,
  `telefonoUsuario` VARCHAR(15) NOT NULL,
  `correoUsuario` VARCHAR(50) NULL,
*/

$idUsuario = $_REQUEST['idUsuario'];
$nombreUsuario = $_REQUEST['nombreUsuario'];
$passwordUsuario = $_REQUEST['passwordUsuario'];
$direccionUsuario = $_REQUEST['direccionUsuario'];
$telefonoUsuario = $_REQUEST['telefonoUsuario'];
$correoUsuario = $_REQUEST['correoUsuario'];

//REALIZAR CONSULTA
$sql = "INSERT INTO Usuario('idUsuario', 'nombreUsuario', 'passwordUsuario','direccionUsuario', 'telefonoUsuario', 'correoUsuario')
		VALUES ('$idUsuario', '$nombreUsuario', '$passwordUsuario', '$direccionUsuario', '$telefonoUsuario', '$ correoUsuario')";

                $result = mysql_query($sql);
                if (! $result){
                               echo "La consulta SQL contiene errores.".mysql_error();
                               exit();
                }else {echo "<center><font color='RED'>DATOS DE USUARIO INSERTADOS CORRECTAMENTE</font><a
ref='http://registro.elarenal.com.mx/ejemplo/formulario.html'>Volver</a&gt;'";
                }
?>

