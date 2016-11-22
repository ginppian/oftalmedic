<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Bienvenido</title>
      <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

   <link rel="shortcut icon" href="img/icon.png" />

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
 
</head>
<body>
<h3>Catalogo</h3>

<?php 
error_reporting(E_COMPILE_ERROR|E_ERROR|E_CORE_ERROR);

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

<li><a href="indexadmin.php">inicio</a></li>
</body>
</html>
