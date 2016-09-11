<?php
$hostname = "localhost"; 
$prueba = "micanasta";
$user = "root"; 
$pass = "";
 
   $con = mysql_connect("$hostname","$user","$pass"); 
 
   $database = mysql_select_db($prueba,$con); 



/*
CREATE TABLE IF NOT EXISTS `MiCanasta`.`usuario` (
  `idUsuario` INT NOT NULL,
  `nombreUsuario` VARCHAR(70) NOT NULL,
  `passwordUsuario` VARCHAR(30) NOT NULL,
  `direccionUsuario` VARCHAR(100) NOT NULL,
  `telefonoUsuario` VARCHAR(15) NOT NULL,
  `correoUsuario` VARCHAR(50) NULL,
  PRIMARY KEY (`idUsuario`))
ENGINE = InnoDB;

*/
$idUsuario = $_REQUEST['idUsuario'];
$passwordUsuario = $_REQUEST['passwordUsuario'];
//REALIZAR CONSULTA
$sql = "SELECT * FROM 'usuario' WHERE idUsuario = '$idUsuario' AND passwordUsuario = '$passwordUsuario'";


                $result = mysql_query($sql);
                if (! $result){
                               echo "La consulta SQL contiene errores.".mysql_error();
                               exit();
                }else {echo "<center><font color='RED'>Acceso correcto Usuario</font><a
ref='http://registro.elarenal.com.mx/ejemplo/formulario.html'>Volver</a&gt;'";
                }
?>