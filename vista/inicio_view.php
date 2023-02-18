<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>

</head>
<body>

<?php

    


?>



<h1>CRUD (MVC)</h1>


<form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post" >


  <table>



    <tr >
      <td class="primera_fila">Id</td>
      <td class="primera_fila">Apellido</td>
      <td class="primera_fila">Nombre</td>
      <td class="primera_fila">Dirección</td>
      <td class="primera_fila">Población</td>
      <td class="primera_fila">Teléfonos</td>

    </tr> 
   
		

<?php

  foreach ($matrizpersonas as $persona):?>

   <tr>
    
    <td><?php echo $persona["ID"]?> </td>          <!-- DATO CURIOSO     Aquí debo poner "ID" en mayuscula porque en mi tabla esta en mayuscula
                                                                         pero cuando hago una intruccion sql no importa si lo pongo en mayuscula o no.
                                                                         ejem: "INSERT INTO contactos (apellidos,NOMBRE,direccion,POBLACION,TELEFONOS) VALUES (:a,:n,:d,:p,:t)"--> 
    <td><?php echo $persona["APELLIDOS"]?></td>
    <td><?php echo $persona["NOMBRE"]?></td>
    <td><?php echo $persona["DIRECCION"]?></td>
    <td><?php echo $persona["POBLACION"]?></td>
    <td><?php echo $persona["TELEFONOS"]?></td>

    <td class="sincontorno"><a href="?id=<?php echo $persona["ID"]?>&
    confirmacion_borrar=<?php echo "borrar"?> & 
    pagina=<?php echo $_GET["pagina"] ?>"><input type='button' name='del' value='Borrar'></a></td>
    
    <td class='sincontorno'><a href="?id=<?php echo $persona["ID"]?> &
    apellido=<?php echo $persona["APELLIDOS"]?> &
    nombre=<?php echo $persona["NOMBRE"]?> &
    direccion=<?php echo $persona["DIRECCION"]?> & 
    poblacion=<?php echo $persona["POBLACION"]?> & 
    telefonos=<?php echo $persona["TELEFONOS"]?> & 
    pagina=<?php echo $_GET["pagina"]?> &
    confirmacion_actualizar=<?php echo "si"?>"><input type='button' name='up' value='Actualizar'></a></td>
  
  </tr>     
  
<?php

  endforeach;   //6:26 video 71
  
?>








	<tr>
	<td></td>
      <td><input type='text' name='nombre' class=punteado></td>
      <td><input type='text' name='apellido' class=punteado></td>
      <td><input type='text' name='direccion' class=punteado style="BOX-SIZING: border-box"></td>
      <td><input type='text' name='poblacion' class=punteado></td>
      <td><input type='text' name='telefonos' class=punteado></td>
      <td class='sincontorno'><input type='submit' name='crear', value='Insertar'></td></tr>    
     
      
       <!-- -----------------------PAGINACION------------------------->
      <tr><td class=sincontorno colspan="6">   <?php


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
