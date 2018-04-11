<?php

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<title>Registro de autores</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<link rel="stylesheet"  type ="text/css" href="css/style.css">
</head>

<body class="rgba-primary-4">
	<h2>Registro de autores</h2>
	<p>
		Para registrar un autor completa el formulario con los datos que se solicitan y al finalizar presiona el boton de "enviar"
	</p>
	
	<form action="alta.php" method="post">
		<div class="rgba-primary-3">
		Nombre:<br/>
		<input type="text" name="nombre" required><br/>
		</div>
		<div>Apellido paterno:<br/>
		<input type="text" name="apellidoPaterno" required><br/>
		</div>
		<div>
		Apellido materno:<br/>
		<input type="text" name="apellidoMaterno" required><br/>
		</div>
		<div>
		Nacionalidad:<br/>
		<input type="text" name="nacionalidad" required><br/>
		</div>
		<div>
		<input type="submit" value="Enviar">
		</div>
	</form>
</body>

</html>
