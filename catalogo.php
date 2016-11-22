<html>
<head><title>Bienvenido</title></head>
<body>
<h3>Catalogo</h3>
<?php 
   include("conexion.php"); 
   $link=Conectarse(); 
   $result=mysql_query("select * from producto",$link); 
?>
<TABLE BORDER=1 CELLSPACING=1 CELLPADDING=1>
<TR><TD>&nbsp;Marca</TD><TD>&nbsp;Modelo</TD><TD>&nbsp;Color&nbsp;</TD>
<TD>&nbsp;Precio&nbsp;</TD><TD>&nbsp;Cantidad&nbsp;</TD></TR> 
<?php       

   while($row = mysql_fetch_array($result)) { 
      $mar=$row['marca'];
$mod=$row['modelo'];
$col=$row['color'];
$pre=$row['precio'];
$can=$row['cantidad'];
$im=$row['imagen'];

echo "<tr><td>$mar</td> <td>$mod</td> <td>$col</td> <td>$pre</td><td>$can</td><td><img width=100 height=100 src='MisImagenes1/$im'/></td>
</tr>"; 
   } 
   mysql_free_result($result); 
   mysql_close($link); 
?>
<li><a href="indexcliente.php">inicio</a></li>
</body>
</html>
