<?php 
require 'Students.php';
$name = $_POST['name'];
$lastname = $_POST['lastname'];
$email = $_POST['mail'];

$mysqli = new MySQLi("localhost", "root", "", "userdb");
			if ($mysqli -> connect_errno) {
				die( "Fallo la conexión a MySQL: (" . $mysqli -> mysqli_connect_errno() 
					. ") " . $mysqli -> mysqli_connect_error());
}
		$Student = new Student('', $name, $lastname, $email); 
		$Student->insert();
		$qSelect = "Select * from students";
    	$query= mysqli_query($mysqli,$qSelect);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Registro guardado</title>
</head>
<body>
<table>
<tr>
	<td>Id</td>
	<td>Nombre</td>
	<td>Apellido</td>
	<td>Correo</td>
</tr>
<?php
while($array=mysqli_fetch_array($query)){

echo "<tr> <td> $array[0]</td><td>$array[1]</td><td>$array[2]</td><td>$array[3] </td> </tr>";
      }
?> 
</table>   
</body>
</html>