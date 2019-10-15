<!DOCTYPE html>
<html>
<head>
	<title>agregar estudiante</title>
</head>
<body>
	<center>
		<h1>Agregar Estudiante</h1>

		<form action="guardar_estudiante.php" method="POST">
			<input type="text" name="nombre" placeholder="nombre" required=""><br><br>
			<input type="text" name="matricula" placeholder="matricula" required=""><br><br>
			<input type="text" name="edad" placeholder="edad" required=""><br><br>
			<input type="text" name="carrera_id" placeholder="carrera" required=""><br><br>
			<input type="submit" name="Aceptar" value="Aceptar"><br><br>
		</form>
	</center>

</body>
</html>