<?php
$hostname = "localhost"; 
$prueba = "micanasta";
$user = "root"; 
$pass = "";
 
   $con = mysql_connect("$hostname","$user","$pass"); 
 
   $database = mysql_select_db($prueba,$con); 

/* ********************************************** */
/*
  `idEmpleado` INT NOT NULL,
  `nombreEmpleado` VARCHAR(50) NOT NULL,
  `passwordEmpleado` VARCHAR(30) NOT NULL,
  `telefonoEmpleadp` VARCHAR(15) NOT NULL,
  `correoEmpleado` VARCHAR(45) NOT NULL,
  `ubicacionEmpleado` VARCHAR(25) NOT NULL,
  `fotoEmpleado` VARCHAR(150) NULL,

*/

$idEmpleado = $_REQUEST['idEmpleado'];

//REALIZAR CONSULTA
$sql = "SELECT ubicacionEmpleado FROM 'empleado' WHERE idEmpleado = '$idEmpleado'";


                $result = mysql_query($sql);
                if (! $result){
                               echo "La consulta SQL contiene errores.".mysql_error();
                               exit();
                }else {echo "<center><font color='RED'>DATOS DE empleado CONSULTADOS CORRECTAMENTE</font><a
ref='http://registro.elarenal.com.mx/ejemplo/formulario.html'>Volver</a&gt;'";
                }
?>