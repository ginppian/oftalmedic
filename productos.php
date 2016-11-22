<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Productos</title>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	<link rel="shortcut icon" href="img/icon.png" />
</head>
<body>
	<nav class="navbar navbar-inverse">
		<div class="container-fluid">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span><!--Raya icono de menu-->
					<span class="icon-bar"></span><!--Raya icono de menu-->
					<span class="icon-bar"></span><!--Raya icono de menu-->
				</button>
				<a class="navbar-brand" href="index.html">OFTALMEDIC</a>
			</div>

			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
					<li><a href="productos.php">Productos</a></li>
				</ul>
				
				<ul class="nav navbar-nav navbar-right">
					<li><a href="contacto.php">Contacto</a></li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Cuenta <span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="login.php">Log In</a></li>
							<li><a href="registro.php">Registro</a></li>
							<li role="separator" class="divider"></li>
							<li><a href="#">Log out</a></li>
						</ul>
					</li>
				</ul>
			</div><!-- /.navbar-collapse -->
		</div><!-- /.container-fluid -->
	</nav>
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

</body>
</html>