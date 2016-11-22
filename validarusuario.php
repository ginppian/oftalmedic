<?PHP session_start();
$usu=$_REQUEST['usuario'];
$pas=$_REQUEST['passwd'];
echo "Usuario = $usu <br>"; 
echo "Password = $pas <br>";
error_reporting(E_COMPILE_ERROR|E_ERROR|E_CORE_ERROR);

 
  include("conexion.php"); 
   $link=Conectarse(); 
   $result=mysql_query("select * from usuarios where user='$usu'",$link);
	if($row=mysql_fetch_array($result))
	{
		echo "si esta registrado el usuario <br>";
		if($row['password']==$pas)
		   {
			echo "Usuarios logueado correctamente <br>";
			$ti=$row['tipo'];
			$_SESSION['k_username']="'$usu'";
			$_SESSION['k_tipo']=$ti;
			if($ti==1) header("Location:indexcliente.php");
			if($ti==0) header("Location:indexadmin.php");
		   }
		else echo "password no coincide <br>";
	}
	else{echo "No existe el usuario: $usu <br>";}
?>