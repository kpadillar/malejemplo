<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Guarda Usuario</title>
</head>
<body>
<?php
	include_once(conexion.php);
	//var_dump($_POST);
	echo "Buen dia";

	//RECIBIR POST
	$user = $_POST['usuario'];
	$password = $_POST['password'];

	//VALIDAR
	$user = filter_var("$user", FILTER_SANITIZE_STRING);
	$password = md5($password);

	//CONSULTA
	//$consulta ="SELECT password FROM usuarios WHERE user_name='$user';";
	//$valconsulta = consulta($consulta);
	//var_dump ($valconsulta);

	//INSERT
	$insert = "INSERT into usuarios (user_name, password) values ('$user','$password');";
	$guarda_ins = consulta("$insert");
	var_dump($insert);
	if($guarda_comentario == false){
	echo "Gracias por dejar tu comentario, en caso de ser necesario nuestros colaboradores se pondrán en contacto contigo";
	}
	else{
	echo "Hubo un error al intentar guardar tu comentario, intenta más tarde";
	}

?>
</body>
</html>
