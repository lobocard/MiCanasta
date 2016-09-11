<?php
$hostname = "localhost"; 
$prueba = "micanasta";
$user = "root"; 
$pass = "";
 
   $con = mysql_connect("$hostname","$user","$pass"); 
 
   $database = mysql_select_db($prueba,$con); 

/* ********************************************** */
/*
CREATE TABLE IF NOT EXISTS `MiCanasta`.`pedido` (
  `idPedido` INT NOT NULL,
  `precioPedido` FLOAT NOT NULL,
  `direccionPedido` VARCHAR(100) NOT NULL,
  `destinatarioPedido` VARCHAR(45) NOT NULL,
  `pesoPedido` FLOAT NOT NULL,
  `estadoPedido` TINYINT(1) NOT NULL,
  `idUsuario` INT NOT NULL,
  `idEmpleado` INT NOT NULL,
*/

$idPedido = $_REQUEST['idPedido'];
$precioPedido = $_REQUEST['precioPedido'];
$direccionPedido = $_REQUEST['direccionPedido'];
$destinatarioPedido = $_REQUEST['destinatarioPedido'];
$pesoPedido = $_REQUEST['pesoPedido'];
$estadoPedido = $_REQUEST['estadoPedido'];
$idUsuario = $_REQUEST['idUsuario'];
$idEmpleado = $_REQUEST['idEmpleado'];

//REALIZAR CONSULTA
$sql = "INSERT INTO Usuario('idPedido', 'precioPedido', 'direccionPedido','destinatarioPedido', 'pesoPedido', 'estadoPedido', 'idUsuario', 'idEmpleado')
		VALUES ('$idPedido', '$precioPedido', '$direccionPedido', '$destinatarioPedido', '$pesoPedido', '$estadoPedido', '$idUsuario', '$idEmpleado')";

                $result = mysql_query($sql);
                if (! $result){
                               echo "La consulta SQL contiene errores.".mysql_error();
                               exit();
                }else {echo "<center><font color='RED'>DATOS DE producto INSERTADOS CORRECTAMENTE</font><a
ref='http://registro.elarenal.com.mx/ejemplo/formulario.html'>Volver</a&gt;'";
                }
?>
