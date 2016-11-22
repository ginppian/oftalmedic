<html>
<head><title>Bienvenido</title></head>
<body>
<h3>Cliente</h3>
<?PHP session_start();
if (!isset($_SESSION['k_username'])|| $_SESSION['k_tipo']!=1)
	header("Location:login.php");
?>
<li><a href="indexcliente.php">Inicio</a></li>
<li><a href="catalogo.php">Ver catalogo</a></li>
<li><a href="salircliente.php">Salir</a></li>
</body>
</html>