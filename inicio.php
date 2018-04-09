<!DOCTYPE HTML>
<html>
<head>
        <meta charset="UTF-8">
        <title>Auntenticar</title>

</head>
<body>
<?php
	include_once (conexion.php);
	conectarbd ();
?>
	<h1>Registro</h1>
	<p>Por favor ingrese sus datos en el formulario.</p>

	<form method="post" action="autenticar.php">

	<label name="usuario">Nombre de usuario:</label>
        <br />
	<input type = "text" name = "usuario" autocomplete="off">
	<br />
	<label name="password">Contrasena:</label>
        <br />
	<input type = "password" name = "contrasena" autocomplete="off">
	<br />
	<input type = "submit" value="Ingresar">
	<br />
	</form>
</body>
</html>

