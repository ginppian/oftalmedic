<html>
<head><title>Registro</title></head>
<body>
<h3>Registro  nuevo Administrador!</h3>
<?php session_start();
 
   include("conexion.php"); 
   $link=Conectarse(); 
 
 
// verificamos si se han enviado ya las variables necesarias.
if (isset($_REQUEST["username"])) {
    $username = $_REQUEST["username"];
	$nom = $_REQUEST["nombre"];
    $password = $_REQUEST["password"];
    $password2 = $_REQUEST["password2"];
    $email = $_REQUEST["email"];
    $tel = $_REQUEST["telefono"];
    $tipo=0;
    // Hay campos en blanco
    if($username==NULL|$password==NULL|$password2==NULL|$tel==NULL|$email==NULL|$nom==NULL) 
    {
        echo "un campo esta vacio.";
        header("Location:registroadmin.php");
    }else{
        // ¿Coinciden las contraseñas?
        if($password!=$password2) {
            echo "Las contraseñas no coinciden";
            header("Location:registroadmin.php");
        }else{
            // Comprobamos si el nombre de usuario o la cuenta de correo ya existian
            $checkuser = mysql_query("SELECT user FROM usuarios WHERE user='$username'");
            $username_exist = mysql_num_rows($checkuser);
            
            $checkemail = mysql_query("SELECT correo FROM usuarios WHERE correo='$email'");
            $email_exist = mysql_num_rows($checkemail);
    
            if ($email_exist>0|$username_exist>0) {
                echo "El nombre de usuario o la cuenta de correo estan ya en uso";
                header("Location:registroadmin.php");
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
    echo '<script language="javascript">alert("no se registro");</script>';
    header("Location:registroadmin.php");
}
?>
<li><a href="login.php">Iniciar Sesion</a></li>
</body>
</html>