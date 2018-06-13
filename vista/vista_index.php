<!DOCTYPE html>
<html>
<head>
	<title>vista</title>
</head>
<body>


	<form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">

		<label >nombre</label>
		<br>
		<input type="text" name="nombre">
		<br>
		<label>apellido</label>
		<br>
		<input type="text" name="ape">
		<br>
		<label>edad</label>
		<br>
		<input type="text" name="edad">
		<br>
		<button type="submit">Enviar</button>
		<br>
	</form>

<table>
	<tr>
		<td>id</td>
		<td>nombre</td>
		<td>apellido</td>
		<td>edad</td>
		<td>Editar</td>
	</tr>

	<?php foreach ($muestraDato as $value) {
		
	 ?>

	<tr>
		<td><?php echo $value['id'] ?></td>
		<td><?php echo $value['nombre'] ?></td>
		<td><?php echo $value['apellido'] ?></td>
		<td><?php echo $value['edad'] ?></td>
		<td><a href="editar.php?id=<?php echo $value['id']?>">Editar</a></td>
		<td><a href="eliminar.php?id=<?php echo $value['id'] ?>">Eliminar</a></td>
	</tr>

<?php } ?>
</table>



</body>
</html>