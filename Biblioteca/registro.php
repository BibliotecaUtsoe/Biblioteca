<?php
$mysql_usuario = "root";
$mysql_password = "";
$mysql_host = "localhost";
$mysql_database = "biblioteca";

//Conexión a la base de datos
$conexion = mysqli_connect($mysql_host, $mysql_usuario, $mysql_password, $mysql_database) or die ('server problem'.mysqli_error());


  //Valores a insertar en la base de datos  
 $sql= "INSERT INTO libros VALUES ('".$_POST['id_libro']."','".$_POST['Nom_libro']."','".$_POST['ISB']."', '".$_POST['Ejemplares']."', '".$_POST['Ubicacion']."', '".$_POST['Descripcion']."')";



//Si todo va bien y se hace correca insercción de datos manda un mensaje satisfactorio 
if(mysqli_query($conexion, $sql)){
    echo '<script>alert("Has sido registrado")</script> ';
	echo"<script> location.href='nuevo_libro.html' </script>";
}
    else { // Si los datos no son bien insertados manda un mensaje de error 
     echo '<script>alert("Error")</script> ';
	 echo"<script> location.href='nuevo_libro.html' </script>";
	exit();
}

mysqli_close($conexion);


?>

