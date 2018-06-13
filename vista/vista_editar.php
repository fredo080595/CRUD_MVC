<!DOCTYPE html>
<html>
<head>
	<title>Editar</title>
</head>
<body>


		<form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
		<input type="text" name="id" value="<?php echo $mostrar['id']?>" hidden>
		<label >nombre</label>
		<br>
		<input type="text" name="nombre" value = "<?php echo $mostrar['nombre'] ?>">
		<br>
		<label>apellido</label>
		<br>
		<input type="text" name="ape" value="<?php echo $mostrar['apellido'] ?>">
		<br>
		<label>edad</label>
		<br>
		<input type="text" name="edad" value="<?php echo $mostrar['edad'] ?>">
		<br>
		<button type="submit">Enviar</button>
		<br>
	</form>

</body>
</html>