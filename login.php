<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
  <title>Log In</title>

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

	
	<div class="container">
		<div class="row vertical-offset-100">
			<div class="col-md-4 col-md-offset-4">

				<div class="panel panel-default">
					<div class="panel-heading">
						<h3 class="panel-title">Accede con tus datos:</h3>
					</div>

					<div class="panel-body">

						<form action="validarusuario.php" method="post">
							<div class="form-group">
							<h5><p class="text-center"></p></h5>
							</div>

							<div class="form-group">
								<label for="usuario">Usuario</label>
								<input type="text" name="usuario" id="usuario" class="form-control" placeholder="juanP3" size="15" requiered />
							</div>
							<div class="form-group">
								<label for="passwd">Password</label>
								<input type="password" name="passwd" id="passwd" class="form-control" placeholder="********" size="15" requiered />
							</div>
							<div class="form-group">
								<input type="submit" name="enviar" id="enviar" value="Enviar" class="btn-lg btn-primary btn-block">
							</div>

							<span id="result"></span>

						</form>
						<li><a href="registro.php">Registrarse</a></li>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
