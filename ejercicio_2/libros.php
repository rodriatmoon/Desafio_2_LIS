<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

    <title>Ejercicio 2</title>
    <!--[if lt IE 9]>
	<script
	src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

  </head>
  <body  class="p-3 mb-2 bg-black text-black" style="text-align:center;">
  	<div class="container">
  		<div class="p-3 mb-2 bg-black text-light" style="text-align:center;">
  			<form action="<?php echo $_SERVER["PHP_SELF"]?>" method="post">
  				<h1 style="color: white;">Ingrese los datos</h1>
  				<div class="input-group mb-3">
  					<input type="text" class="form-control" placeholder="Nombre Autor" name="nombre">
  					<span class="input-group-text">,</span>
  					<input type="text" class="form-control" placeholder="Apellido Autor" name="apellido">
  				</div>
  				<input type="text" class="form-control" placeholder="Titulo del libro" name="titulo">
  				<br>
  				<div class="input-group mb-3">
  					<input type="text" class="form-control" placeholder="Edición" name="edicion">
  					<span class="input-group-text">|</span>
  					<input type="text" class="form-control" placeholder="Año" name="year">
  					<span class="input-group-text">|</span>
  					<input type="text" class="form-control" placeholder="Cantidad de páginas" name="np">
  				</div>
  				<div class="input-group mb-3">
  					<input type="text" class="form-control" placeholder="Editorial" name="editorial">
  					<span class="input-group-text">|</span>
  					<input type="text" class="form-control" placeholder="Lugar de publicación" name="lugar">
  					<span class="input-group-text">|</span>
  					<input type="text" class="form-control" placeholder="ISBN #-####-####-#" name="isbn">
  				</div>
  				<input type="text" class="form-control" placeholder="Notas" name="notas">
  				<br>
  				<input type="text" class="form-control" placeholder="Libro que desea agregar o editar" name="citas">
  				<br>
  				<input type="submit" class="btn btn-light" value="Añadir"/>
  			</form>
  		</div>
		<header>
			<h1 style="color: white;">Libros Disponibles</h1>
		</header>
		<div class="row">
			<?php
				//Incluyendo el archivo de clase
				function __autoload($classname) {
					include_once("class/" . $classname . ".class.php");
				}
				if($_POST){
					$nombre = $_POST['nombre'];
					$appelido = $_POST['apellido'];
					$titulo = $_POST['titulo'];
					$edicion = $_POST['edicion'];
					$year = $_POST['year'];
					$np = $_POST['np'];
					$editorial = $_POST['editorial'];
					$lugar = $_POST['lugar'];
					$isbn = $_POST['isbn'];
					$notas = $_POST['notas'];
					$citas = $_POST['citas'] - 1;

					$librito[$citas] =  new libro($nombre, $appelido, $titulo, $edicion, $lugar, $editorial, $year, $np, $notas, $isbn);
				}

				$librito[0] = new libro("Juan", "Perez", "El patito feo", "2", "Guatemala", "Mirahadas", 1925, 100, "el libro trata de un patito feo", "3-1542-0154-1");
				//Esta llamada mostrará los valores por defecto en los argumentos
				//del método constructor.
				for($i=0; $i<count($librito); $i++){
					$librito[$i]->mostrar();
				}
			?>
		</div>
		</div>

  </body>
</html>