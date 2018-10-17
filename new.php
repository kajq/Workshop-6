<!DOCTYPE html>
<html>
<head>
	<title>Form</title>
</head>
<body>
<form method="post" action="save.php">
	<fieldset>
		<legend>Formulario Registro</legend>
		<div>
			<label>Ingrese su Nombre </label>
			<input type="text" name="name" placeholder="Nombre">
		</div>
		<br>
		<div>
			<label>Ingrese su Apellido</label>
			<input type="text" name="lastname" placeholder="Apellido">
		</div>
		<br>
		<div>
			<label>Ingrese su Correo Electronico</label>
			<input type="mail" name="mail" placeholder="e-mail">
		</div>
		<br>
		<div>
			<input type="submit" name="save" value="Registrarse">
		</div>
	</fieldset>
</form>
</body>
</html>