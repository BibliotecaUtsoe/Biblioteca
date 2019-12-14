<?php 

  $conexion=mysqli_connect('localhost','root','','biblioteca');

 ?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Biblioteca</title>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

    <link rel="stylesheet" href="css/tabla.css">
    <script src="js/search.js"></script>
    
   
    
</head> 

<header>
             <form action="" method="post">  
            <input type="search" id="input-search" name="search" placeholder="Buscar aqui">
            </form>  
            
        <img src="img/utsoe2.png" class="img-logo">
        <nav class="menu">
            <ul>
                <li><a href="nuevo_libro.html">Agregar</a></li>
            </ul>
        </nav>

<body>
   

 <div class="section">
        <ul class="xop-grid">
            
<center>
<table id="color" style="border-color: white;">
    <tr>
      <td class="encabezadoiz">Libro</td>
      <td class="encabezadoce">ISBN</td>
      <td class="encabezadoce">Cantidad de ejemplares</td>
      <td class="encabezadoce">Ubicación</td>
      <td class="encabezadoder">Descripción</td>
    </tr>

    <?php 

    $search = ($_REQUEST['search']);   
    $sql="SELECT * from libros WHERE Nom_libro LIKE '%".$search."%'";
    $result=mysqli_query($conexion,$sql);

    while($mostrar=mysqli_fetch_array($result)){
     ?>

    <tr>
      <td class="resultado"><?php echo $mostrar['Nom_libro'] ?></td>
      <td class="resultado"><?php echo $mostrar['ISB'] ?></td>
      <td class="resultado"><?php echo $mostrar['Ejemplares'] ?></td>
      <td class="resultado"><?php echo $mostrar['Ubicacion'] ?></td>
      <td class="resultado"><?php echo $mostrar['Descripcion'] ?></td>
      echo "<td>  <a href='../modificar/modificar1.php?id_libro=".$mostrar['id_libro']."'> <button type='button' class='btn btn-success'>Modificar</button> </a> <a href='../eliminar/eliminarlibro.php?id_libro=".$mostrar['id_libro']."''><button type='button' class='btn btn-danger'>Eliminar</button></a>  </td>";

        echo "</tr>";
    </tr>
  <?php 
  }
   ?>
  </table>
  </center>

               </header>
</body>
</html>