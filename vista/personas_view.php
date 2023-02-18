<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>

</head>
<body>

<?php




/* ESTO ES EL "INSERT INTO" SI LO HAGO DESDE ESTE MISMO ARCHIVO" 
//------------------------- INSERT INTO ------------------------------>
  
if (isset($_POST["cr"])){

  require_once("modelo/conectar.php");
  $db=Conectar::conexion();

  $nombre=$_POST["Nom"];
  $apellido=$_POST["Ape"];
  $direccion=$_POST["Dir"];

  $sql="INSERT INTO contactos (nombre,apellido,direccion) VALUES (:n,:a,:d)"; 

  $resultado=$db->prepare($sql);

  $resultado->execute(array(":n"=>$nombre, ":a"=>$apellido, ":d"=>$direccion,));

  header("Location:index.php");





}

//----------------------------------------------------------------->
*/



?>


<h1>CRUD<span class="subtitulo">Create Read Update Delete</span></h1>


<form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">


  <table width="50%" border="0" align="center">
    <tr >
      <td class="primera_fila">Id</td>
      <td class="primera_fila">Nombre</td>
      <td class="primera_fila">Apellido</td>
      <td class="primera_fila">Dirección</td>
      <td class="sin">&nbsp;</td>
      <td class="sin">&nbsp;</td>
      <td class="sin">&nbsp;</td>
    </tr> 
   
		

<?php

  foreach ($matrizpersonas as $persona):?>

   <tr>
    
    <td><?php echo $persona["id"]?> </td>
    <td><?php echo $persona["nombre"]?></td>
    <td><?php echo $persona["apellido"]?></td>
    <td><?php echo $persona["direccion"]?></td>

    <td class="bot"><a href="?id=<?php echo $persona["id"] ?>&
    confirmacion_borrar=<?php echo "borrar"?>"><input type='button' name='del' id='del' value='Borrar'></a></td>
    
    <td class='bot'><a href="?id=<?php echo $persona["id"]?> &
    nombre=<?php echo $persona["nombre"]?> &
    apellido=<?php echo $persona["apellido"]?> &
    direccion=<?php echo $persona["direccion"]?> & 
    confirmacion_actualizar=<?php echo "si"?>"><input type='button' name='up' id='up' value='Actualizar'></a></td>
  
  </tr>     
  
<?php

  endforeach;   //6:26 video 71
  
?>








	<tr>
	<td></td>
      <td><input type='text' name='Nom' size='10' class='centrado'></td>
      <td><input type='text' name='Ape' size='10' class='centrado'></td>
      <td><input type='text' name=' Dir' size='10' class='centrado'></td>
      <td class='bot'><input type='submit' name='cr' id='cr' value='Insertar'></td></tr>    
     
      
       <!-- -----------------------PAGINACION------------------------->
      <tr><td>   <?php


            if ($pagina!=1){
              $anterior=$pagina-1;
              echo "<a href='?pagina=$anterior'>Anterior</a>". "&nbsp";
                }



            for($i=1; $i<=$num_paginas; $i++){

                echo "<a href='?pagina=$i'>$i</a>" . "&nbsp";

                }



              if ($pagina!=$num_paginas){
                $adelante=$pagina+1;
                echo "<a href='?pagina=$adelante'>Adelante</a>";
                }

  

    ?> </td></tr>
  
  
  
  
    </table>


</form>
</table>

</body>
</html>
