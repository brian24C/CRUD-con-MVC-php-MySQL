
<?php

// -----------------------PAGINACION-------------------------

//require_once("conexion.php");


$base=Conectar::conexion();



$pagina=1;




if(isset($_GET["pagina"])){

  $pagina=$_GET["pagina"];

}else{

  $_GET["pagina"]=1;

}

if(isset($_POST["pagina_actualizar"])){

  $pagina=trim($_POST["pagina_actualizar"]);
  $_GET["pagina"]=($_POST["pagina_actualizar"]);
}


$b=10;
$a=($pagina-1)*$b;



$sql="SELECT * FROM contactos2 ";
$registros=$base->prepare($sql);
$registros->execute(array());         #$registros->execute();         <-TAMBIEN SE PUEDE ASÍ   CATEGORIA:array
$num_filas=$registros->rowCount();
$num_paginas=ceil($num_filas/$b);

//------------------------------------------------------------------>

?> 