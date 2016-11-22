<html>
<head><title>Registro</title></head>
<body>
<h3>registrarse</h3>
<?php session_start();
 
   include("conexion.php"); 
   $link=Conectarse(); 
 
function formRegistro(){
?>
<form action="registrarse2.php" method="post">
Usuario (max 20): 
  <input type="text" name="username" size="20" maxlength="20" /><br /><br />
Nombre (max 40): 
  <input type="text" name="nombre" size="30" maxlength="40" /><br /><br />
Password (max 10): 
  <input type="password" name="password" size="10" maxlength="10" />
Confirma: 
  <input type="password" name="password2" size="10" maxlength="10" /><br /><br />
Telefono: (max 10): 
  <input type="text" name="telefono" size="10" maxlength="10" /><br /><br />
Email (max 30): 
  <input type="text" name="email" size="20" maxlength="40" /><br /><br />
<input type="submit" value="Registrar" />
</form>
<?php
}
 
// verificamos si se han enviado ya las variables necesarias.
if (isset($_POST["username"])) {
    $username = $_POST["username"];
	$nom = $_POST["nombre"];
    $password = $_POST["password"];
    $password2 = $_POST["password2"];
    $email = $_POST["email"];
    $tel = $_POST["telefono"];
    $tipo=0;
    // Hay campos en blanco
    if($username==NULL|$password==NULL|$password2==NULL|$tel==NULL|$email==NULL|$nom==NULL) 
    {
        echo "un campo esta vacio.";
        formRegistro();
    }else{
        // ¿Coinciden las contraseñas?
        if($password!=$password2) {
            echo "Las contraseñas no coinciden";
            formRegistro();
        }else{
            // Comprobamos si el nombre de usuario o la cuenta de correo ya existian
            $checkuser = mysql_query("SELECT user FROM usuarios WHERE user='$username'");
            $username_exist = mysql_num_rows($checkuser);
            
            $checkemail = mysql_query("SELECT correo FROM usuarios WHERE correo='$email'");
            $email_exist = mysql_num_rows($checkemail);
    
            if ($email_exist>0|$username_exist>0) {
                echo "El nombre de usuario o la cuenta de correo estan ya en uso";
                formRegistro();
            }else{
                $query = 'INSERT INTO usuarios (user, password, tipo, nombre, correo, telefono)
                VALUES (\''.$username.'\',\''.$password.'\',\''.$tipo.'\',\''.$nom.'\',\''.$email.'\',\''.$tel.'\')';
                
                mysql_query($query) or die(mysql_error());
				echo 'El usuario '.$username.' ha sido registrado de manera satisfactoria.<br />';
                echo 'Ahora puede entrar ingresando su usuario y su password <br />';
                ?>
                
                <?php
                
            }
        }
    }
}else{
    formRegistro();
}
?>
<li><a href="login.php">Iniciar Sesion</a></li>
</body>
</html>