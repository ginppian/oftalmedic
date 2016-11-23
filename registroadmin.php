<!DOCTYPE html>
<html lang="es">

<head>
  <title>Registro</title>
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
					<li><a href="catalogo2.php">Productos</a></li>
				</ul>
				
				<ul class="nav navbar-nav navbar-right">
					<li><a href="contacto.php">Contacto</a></li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Cuenta <span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="login.php">Log In</a></li>
							<li><a href="#">Registro</a></li>
							<li role="separator" class="divider"></li>
							<li><a href="index.html">Log out</a></li>
						</ul>
					</li>
				</ul>
			</div><!-- /.navbar-collapse -->
		</div><!-- /.container-fluid -->
	</nav>

	<div class="container">
		<div class="row vertical-offset-100">
			<div class="col-md-4 col-md-offset-4">

				<div class="panel-body">
					<form action="registrarse2.php" method="post">

						<div class="form-group">
							<label for="nombre">Usuario*</label>
							<input class="form-control" type="text" name="username" size="20" maxlength="20" placeholder="JuanP3"><br>
						</div>

						<div class="form-group">
							<label for="nombre">Nombre*</label>
							<input class="form-control" type="text" name="nombre" size="30" maxlength="40" placeholder="Juan Pérez"><br>
						</div>


						<div class="form-group">
							<label for="tel">Teléfono*</label>
							<input class="form-control" type="tel" name="telefono" size="10" maxlength="10" placeholder="2224156319"><br>
						</div>

						<div class="form-group">
							<label for="correo">Correo*</label>
							<input class="form-control" type="email" name="email" size="20" maxlength="40" placeholder="juan.perez@hotmail.com"><br>

							<label for="correo">Repetir Correo*</label>
							<input class="form-control" type="email" name="email" size="20" maxlength="40" placeholder="juan.perez@hotmail.com"><br>
						</div>

						<div class="form-group">
							<label for="pass">Contraseña*</label>
							<input class="form-control" type="password" name="password" size="10" maxlength="10" placeholder="********"><br>

							<label for="pass">Repetir Contraseña*</label>
							<input class="form-control" type="password" name="password2" size="10" maxlength="10" placeholder="********"><br>
						</div>

						<input class="btn btn-primary btn-block" type="submit" value="Registrar">

					</form>	
				</div>
			</div>
		</div>
	</div>

	<!--
	<div class="container">
    <div class="row vertical-offset-100">
    	<div class="col-md-4 col-md-offset-4">
    		<div class="panel panel-default">
			  	<div class="panel-heading">
			    	<h3 class="panel-title">Please sign in</h3>
			 	</div>
			  	<div class="panel-body">
			    	<form accept-charset="UTF-8" role="form">
                    <fieldset>
			    	  	<div class="form-group">
			    		    <input class="form-control" placeholder="E-mail" name="email" type="text">
			    		</div>
			    		<div class="form-group">
			    			<input class="form-control" placeholder="Password" name="password" type="password" value="">
			    		</div>
			    		<div class="checkbox">
			    	    	<label>
			    	    		<input name="remember" type="checkbox" value="Remember Me"> Remember Me
			    	    	</label>
			    	    </div>
			    		<input class="btn btn-lg btn-success btn-block" type="submit" value="Login">
			    	</fieldset>
			      	</form>
			    </div>
			</div>
		</div>
	</div>
</div>
-->

</body>
</html>