
<?php

// -----------------------PAGINACION-------------------------

require_once("conectar.php");

$base=Conectar::conexion();



$pagina=1;
if(isset($_GET["pagina"])){

  $pagina=$_GET["pagina"];

}


$b=2;
$a=($pagina-1)*$b;


$sql="SELECT * FROM DATOS_USUARIOS ";
$registros=$base->prepare($sql);
$registros->execute(array());
$num_filas=$registros->rowCount();
$num_paginas=ceil($num_filas/$b);

//------------------------------------------------------------------>

?> 