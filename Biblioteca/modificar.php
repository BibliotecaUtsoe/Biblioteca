<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
  <title>Biblioteca</title>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
      <link rel="Shortcut Icon" type="image/x-icon" href="icons/book.ico">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/modificar.css">
    
   
    
</head>
<body>
    <header>
        <img src="img/utsoe2.png" class="img-logo">
        <nav class="menu">
            <ul>
                <li><a href="nuevo_libro.html">Agregar</a></li>
            </ul>
        </nav>
<div class="box">
  <div class="container-1">
      <span class="icon"><i class="fa fa-search"></i></span>
      <input type="search" id="search" placeholder="Buscar..." />
  </div>
        </div>
         <div>
   
  <div class = "scroll">
						
							<?php foreach($visits as $visit):?>
							<div class = "scroll" >
								<table class = "formtable">
									<form action = "" method = "post" class = "tableform";>
												<tr>							
													<td class = "td"><input  type = "hidden" name = "id" value = "<?php htmlout($visit['id']);?>"></td>
													<td class = "td1"><input type = "submit" name = "visit" value = "<?php htmlout($visit['lecturedate']);?>"></td>
													<td class = "td2"><input type = "submit" class = "wrap" name = "visit" value = "<?php htmlout($visit['title']);?>"></td>
												</tr>
									</form>
								</table>
							</div>	
							<?php endforeach;?>
					</div>



</div>  
        <div>
        </div>
        <div>
            <a href="" class="boton_personalizado">Salir</a>
            <a href="" class="boton_personalizado">Salir</a>
        </div>
    </header>
</body>
</html>