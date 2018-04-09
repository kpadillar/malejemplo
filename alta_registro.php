<!DOCTYPE HTML>
<html>
<head>
	<meta charset="UTF-8">
	<title>Guarda comentario</title>
</head>
<body>
<?php
	include_once("conexion.php");

	$nombre =filter_var( $_POST['nombre'], FILTER_SANITIZE_STRING);
	$ap_paterno = filter_var($_POST['ap_paterno'], FILTER_SANITIZE_STRING);
	$correo =filter_var($_POST['correo'], FILTER_SANITIZE_EMAIL);
	$ap_materno = filter_var($_POST['ap_materno'], FILTER_SANITIZE_STRING);
	$telefono = filter_var($_POST['telefono'], FILTER_SANITIZE_STRING);

	if(!empty($nombre)||!empty($correo)||!empty($telefono)||!empty($ap_paterno)||!empty($ap_materno){
		echo "Buen dia";
		$comentario = "insert into comentarios (nombre,correo,telefono,apaterno,amaterno) values('$nombre','$correo','$telefono','$ap_paterno','$ap_materno')";
		$guarda_comentario = consulta($comentario);

		if($guarda_comentario == false){
			echo "Gracias por dejar tu comentario, en caso de ser necesario nuestros colaboradores se pondrán en contacto contigo";
		} else {
			echo "Hubo un error al intentar guardar tu comentario, intenta más tarde";
		}
	} else {
		echo "Los valores ingresados no son válidos";
	}
?>
</body>
</html>
