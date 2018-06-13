<?php 

require_once "bd/conexion.php";

class modeloEditar{

	private function conexion(){
		$c = new conectar();
		return $c->conexion();
	}

	public function mostrarDatos($id){

		$conexion = self::conexion();

		$sql = "SELECT id,nombre,apellido,edad FROM persona where id = $id";
		$result = mysqli_query($conexion,$sql);

		return mysqli_fetch_array($result);

	}

	public function editarDatos($datos){
		$conexion = self::conexion();
		$sql = "UPDATE persona set nombre = '$datos[1]',apellido = '$datos[2]', edad = '$datos[3]' WHERE id = $datos[0]";
		$result = mysqli_query($conexion,$sql);

		return header("Location: index.php");
	}


}


