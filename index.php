<!DOCTYPE html>
<html>
<head>
	<title>Estudiantes de la Escuela</title>
	<style type="text/css">
		table{
			text-align: left;
			margin-top: 60px;
		}
	</style>
</head>
<body>
	<center>
	<table >
			<tr>
				<td><a href="agregar_estudiante.php"><button>Agregar</button></a></td>
				<td colspan="6"><center><b>Tabla de Estudiantes</b></center></td>
			</tr>
			<tr>
				<td><center><b>id</b></center></td>
				<td><b>Nombre</b></td>
				<td><b>Matricula</b></td>
				<td><b>Edad</b></td>
				<td><b>Carrera</b></td>
				<td colspan="2"><b>Operaciones</b></td>
			</tr>

			<?php 
                      
				include ("conexion.php");

                
                $stm = $pdo->query("SELECT * FROM estudiante");
                $rows = $stm->fetchAll(PDO::FETCH_ASSOC);
				
                    foreach($rows as $row) {
				?>

				<tr>
					<td><center><?php echo $row['id']; ?></center></td>
					<td><?php echo $row['nombre']; ?></td>
					<td><?php echo $row['matricula']; ?></td>
					<td><?php echo $row['edad']; ?></td>
					<td><?php echo $row['carrera_id']; ?></td>
					<td><a href="modificar.php?id=<?php echo $row['id']; ?>"><button>modificar</button></a></td>
					<td><a href="eliminar.php?id=<?php echo $row['id']; ?>"><button>eliminar</button></a></td>
				</tr>

				<?php
				}
				 ?>


		</table>
	</center>

</body>
</html>