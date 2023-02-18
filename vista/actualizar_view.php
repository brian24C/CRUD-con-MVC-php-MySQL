<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
<link rel="stylesheet" type="text/css" href="../diseno.css">
</head>

<body>

<h1>ACTUALIZAR</h1>

<?php

  $id=$_GET["id"];                     
  $apellido=trim($_GET["apellido"]);         #NOTASA: el $_GET al parecer me bota el dato con un espacio adicional por ejem el apellido así -> (MARTINEZ )
  $nombre=trim($_GET["nombre"]);                   #es por eso que si no pongo la funcion "trim" entonces me dará en la casilla siempre con un espacio de más.
  $direccion=trim($_GET["direccion"]);             # en la linea 46 de funciones_modelos.php no importa si el GET me bota espacios, porque igual me funcionará.
  $poblacion=trim($_GET["poblacion"]);
  $telefonos=trim($_GET["telefonos"]);

  $pagina=$_GET["pagina"];


?>



<form name="form1" method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">

<table>

    <tr >
      <td class="primera_fila">Id</td>
      <td class="primera_fila">Apellido</td>
      <td class="primera_fila">Nombre</td>
      <td class="primera_fila">Dirección</td>
      <td class="primera_fila">Población</td>
      <td class="primera_fila">Número</td>
    </tr> 
   
    <tr>
      
      <td><input  class="sincontorno" type="text" name="id" value="<?php echo $id?>"></td>

      <td><input class="sincontorno" type="text" name="apellido" value="<?php echo $apellido?>"></td>

      <td><input class="sincontorno" type="text" name="nombre" value="<?php echo $nombre?>"></td>

      <td><input class="sincontorno" type="text" name="direccion" value="<?php echo $direccion?>"></td>

      <td><input class="sincontorno" type="text" name="poblacion" value="<?php echo $poblacion?>"></td>

      <td><input class="sincontorno" type="text" name="telefonos" value="<?php echo $telefonos?>"></td>

      <td class="sincontorno"><input type="hidden" name="pagina_actualizar" value="<?php echo $pagina?>"></td>

    </tr>

    <tr>
      <td colspan="6" class="sincontorno"><input style="BORDER:1px dashed; FONT-SIZE: 12pt"  type="submit" name="bot_actualizar" value="Actualizar"></td>
    </tr>   
      
</table>
</form>

</body>
</html>