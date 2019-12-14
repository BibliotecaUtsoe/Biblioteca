<?php
$mysql_usuario = "root";
$mysql_password = "";
$mysql_host = "localhost";
$mysql_database = "biblioteca";

//conexión a la bd
$conexion = mysqli_connect($mysql_host, $mysql_usuario, $mysql_password, $mysql_database) or die ('server problem'.mysqli_error());

//Se crean las variables iguales que tenememos en método POST que proviene del formulario 
$nom_Usuario=$_POST['username'];
$contrasena=$_POST['password'];

//Consulta para extraer los datos de la bd
$query= "SELECT * FROM usuarios WHERE Nom_Usuario='".$nom_Usuario."'";

//Ejecuta la consulta
$result =mysqli_query($conexion, $query) or die (mysqli_error());

//Se creara un avariable $row que equivale a las columnas de las tablas de la  variable $result
if($row =mysqli_fetch_array ($result)){
	if($row['Contraseña']==$contrasena){
		session_start();// Se inicia la sesión
		$_SESSION['Nom_Usuario']= $row['Nom_Usuario'];
		echo"<script> location.href='modificar2.php' </script>";
	}else{//En caso de que el usuario se encuentre en la bd y la contraseña no se encuentre mandará un mensaje de error y te regresara a la pagina de inicio de sesón
	echo'<script> alert  ("Tu contraseña es incorrecta") </script>';
	echo"<script> location.href='Inicio_Sesion.html' </script>";
	exit();
	}
	
}else{//En caso de que el usuario no se encuentre en la bd mandara un mensaje de error y se regresara a la página de incio de seción
	echo'<script> alert  ("Tu usuario es incorrecto") </script>';
	echo"<script> location.href='Inicio_Sesion.html' </script>";
	exit();
}
		
?>