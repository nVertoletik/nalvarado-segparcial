<!DOCTYPE HTML>
<html>
<head>
<meta charset="UTF-8">
<title>Alta registro</title>
</head>
<body>
<?php
function validarUsuario($nombre, $apellidoPaterno, $apellidoMaterno, $password, $usuario){
    if(!(empty($_POST['nombre']) || empty($_POST['apellidoPaterno']) || empty($_POST['apellidoMaterno']) ||
    empty($_POST['usuario']) || empty($_POST['contrasenia']))){
        return true;
    }
    else{
        return false;
    }
}
function validarAutor($nombre, $apellidoPaterno, $apellidoMaterno, $nacionalidad){
    if(!((empty($_POST['nombre']) || empty($_POST['apellidoPaterno']) || empty($_POST['apellidoMaterno']) ||
    empty($_POST['nacionalidad']))){
        return true;
    }
	else{
        return false;
    }
}
function validarLibro($titulo, $autor, $fecha){
    if(!(empty($_POST['titulo']) || empty($_POST['autor']) || empty($_POST['fecha']))){
        return true;
    }
    else{
        return false;
    }
	
}
include_once("conexion.php");
if(!empty($_POST['nombre'])){
	$nombre = filter_var($_POST['nombre'], FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
}
if(!empty($_POST['apellidoPaterno'])){
	$apellidoPaterno = filter_var($_POST['apellidoPaterno'], FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
}
if(!empty($_POST['apellidoMaterno'])){
	$apellidoMaterno = filter_var($_POST['apellidoMaterno'], FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
}
if(!empty($_POST['nacionalidad'])){
	$nacionalidad = filter_var($_POST['nacionalidad'], FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
}
if(!empty($_POST['titulo'])){
	$titulo = filter_var($_POST['titulo'], FILTER_SANITIZE_EMAIL, FILTER_FLAG_STRIP_HIGH);
}
if(!empty($_POST['password'])){
	$password = md5($_POST['password']);
}
if(!empty($_POST['usuario'])){
	$usuario = filter_var($_POST['usuario'], FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
}
if(validarValores($nombre, $apellidoPaterno, $apellidoMaterno, $telefono, $correo, $password, $usuario)){
	$registro = "insert into usuarios (nombre,apaterno,amaterno,telefono, correo, password, usuario) values('$nombre','$apellidoPaterno','$apellidoMaterno','$telefono','$correo', '$password', '$usuario')";
	$guarda_registro = consulta($registro);
	if($guarda_registro == false){
		echo "Datos ingresados de manera correcta";
	}
	else{
		echo "Hubo un error al intentar guardarel registro, intenta más tarde";
	}
}
else{
	echo "Los valores ingresados no son válidos";
}
?>

<br/>
<a href="registro.php">Regresar al formulario</a>

</body>
</html>