<?PHP
$marca=$_REQUEST['mar'];
$modelo=$_REQUEST['mod'];
$color=$_REQUEST['col'];
$precio=$_REQUEST['pre'];
$cantidad=$_REQUEST['can'];
echo "Marca: $marca<br>";
echo "Modelo: $modelo<br>";
echo "Color: $color<br>";
echo "Precio: $precio<br>";
echo "Cantidad: $cantidad<br>";
$tipo=$_FILES['archivo']['type'];
$nom=$_FILES['archivo']['name'];
$tam=$_FILES['archivo']['size'];
echo "Archivo: $nom<br>";
echo "Tipo: $tipo<br>";
echo "Tamaño: $tam<br>";
$ruta="MisImagenes1/".$_FILES['archivo']['name'];
if(is_uploaded_file($_FILES['archivo']['tmp_name']))
{
	copy($_FILES['archivo']['tmp_name'],$ruta);
	$link=mysqli_connect("localhost","root","");
	mysqli_select_db($link,"optica");
	mysqli_query($link,"insert into producto
	(marca,modelo,color,precio,cantidad,imagen)
	values('$marca', '$modelo', '$color', $precio, '$cantidad', '$nom')");
	mysqli_close($link);
	echo "<br> Se insertaron los datos con éxito<br>";

}
header("Location:indexadmin.php");
?>