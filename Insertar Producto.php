<?php
$hostname = "localhost"; 
$prueba = "micanasta";
$user = "root"; 
$pass = "";
 
   $con = mysql_connect("$hostname","$user","$pass"); 
 
   $database = mysql_select_db($prueba,$con); 

/* ********************************************** */
/*
CREATE TABLE IF NOT EXISTS `MiCanasta`.`producto` (
  `idProducto` INT NOT NULL,
  `nombreProducto` VARCHAR(45) NOT NULL,
  `precioProducto` FLOAT NOT NULL,
  `fotoProducto` VARCHAR(150) NULL,
  `pesoProducto` FLOAT NOT NULL,
  `categoriaProducto` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idProducto`))
ENGINE = InnoDB;

*/

$idProducto = $_REQUEST['idProducto'];
$nombreProducto = $_REQUEST['nombreProducto'];
$precioProducto = $_REQUEST['precioProducto'];
$fotoProducto = $_REQUEST['fotoProducto'];
$pesoProducto = $_REQUEST['pesoProducto'];
$categoriaProducto = $_REQUEST['categoriaProducto'];

//REALIZAR CONSULTA
$sql = "INSERT INTO Usuario('idProducto', 'nombreProducto', 'precioProducto','fotoProducto', 'pesoProducto', 'categoriaProducto')
		VALUES ('$idProducto', '$nombreProducto', '$precioProducto', '$fotoProducto', '$pesoProducto', '$ categoriaProducto')";

                $result = mysql_query($sql);
                if (! $result){
                               echo "La consulta SQL contiene errores.".mysql_error();
                               exit();
                }else {echo "<center><font color='RED'>DATOS DE producto INSERTADOS CORRECTAMENTE</font><a
ref='http://registro.elarenal.com.mx/ejemplo/formulario.html'>Volver</a&gt;'";
                }
?>