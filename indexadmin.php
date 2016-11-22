<html>
<head><title>Bienvenido administrador</title></head>
<body>
<h3>Administrador</h3>
<?PHP session_start();
if (!isset($_SESSION['k_username'])|| $_SESSION['k_tipo']!=0)
	header("Location:login.php");
?>
<li><a href="indexadmin.php">Inicio</a></li>
<li><a href="consultar.php">Consultar clientes</a></li>
<li><a href="insertar.php">Insertar Armazon</a></li>
<li><a href="catalogo2.php">Ver catalogo</a></li>
<li><a href="registrarse2.php">Registrar administrador</a></li>
<li><a href="salircliente.php">Salir</a></li>
</body>
</html>