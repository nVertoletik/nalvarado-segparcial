<?php

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<title>Registro de libros</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<link rel="stylesheet"  type ="text/css" href="css/style.css">
</head>

<body class="rgba-primary-4">
	<h2>Registro de libros</h2>
	<p>
		Para registrar un libro completa el formulario con los datos que se solicitan y al finalizar presiona el boton de "enviar"
	</p>
	
	<form action="alta.php" method="post">
		<div class="rgba-primary-3">
		Titulo:<br/>
		<input type="text" name="titulo" required><br/>
		</div>
		<div>Autor:<br/>
		<input type="text" name="autor" required><br/>
		</div>
		<div>
		Fecha de publicacion:<br/>
		<input type="date" name="fecha" required><br/>
		</div>
		<div>
		<input type="submit" value="Enviar">
		</div>
	</form>
</body>

</html>
