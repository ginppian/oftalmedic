<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Contacto</title>

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
		
		<section class="container">
		<div class="row">
		<h3 class="center-align">CONTACTO</h3>
			<article class="col s6 offset-s3">
				<form method="POST" action="formulario-contacto.php">
					<div class="input-field">
						<i class="material-icons blue-text prefix">perm_identity</i>
						<label for="nombre">Nombre</label>
						<input type="text" name="nombre" required>
					</div>

					<div class="input-field">
						<i class="material-icons blue-text prefix">person_pin</i>
						<label for="apellido">Apellido</label>
						<input type="text" name="apellido" required>
					</div>
					
					<div class="input-field">
						<i class="material-icons blue-text prefix">email</i>
						<label for="email">Email</label>
						<input type="email" name="email" required>
					</div>

					<div class="input-field">
						<i class="material-icons blue-text prefix">mode_edit</i>
						<label for="mensaje">Mensaje</label>
						<textarea name="mensaje" id="" rows="10" class="materialize-textarea"  length="140" required></textarea>
					</div>
					
					<p class="center-align">
						<button class="waves-effect waves-light btn blue" type="submit"><i class="material-icons right">send</i>enviar</button>
					</p>

				</form>

			</article>
		</div>
	</section>

	<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15087.361408176488!2d-98.2141006!3d19.0267553!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x73255cce0aee0903!2sOftalmedic!5e0!3m2!1ses-419!2smx!4v1479586871550" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>

	<script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.1/js/materialize.min.js"></script>

</body>
</html>