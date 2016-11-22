<html>
<head><title>Bienvenido</title></head>
<body>
<h3>Clientes</h3>
<?php 
error_reporting(E_COMPILE_ERROR|E_ERROR|E_CORE_ERROR);

   include("conexion.php"); 
   $link=Conectarse(); 
   $result=mysql_query("select * from usuarios where tipo = 1 ",$link); 
?>
<TABLE BORDER=1 CELLSPACING=1 CELLPADDING=1>
<TR><TD>&nbsp;ID</TD><TD>&nbsp;Usuario</TD><TD>&nbsp;Nombre</TD><TD>&nbsp;Telefono&nbsp;</TD>
<TD>&nbsp;Correo&nbsp;</TD></TR> 
<?php       

   while($row = mysql_fetch_array($result)) { 
      $id=$row['id_user'];
$user=$row['user'];
$nom=$row['nombre'];
$tel=$row['telefono'];
$cor=$row['correo'];

echo "<tr><td>$id</td> <td>$user</td> <td>$nom</td> <td>$tel</td><td>$cor</td>
</tr>"; 
   } 
   mysql_free_result($result); 
   mysql_close($link); 
?>
<li><a href="indexadmin.php">inicio</a></li>
</body>
</html>