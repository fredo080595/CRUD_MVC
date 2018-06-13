<?php 

require_once "bd/conexion.php";

class index{


	private function conexion(){

		$c = new conectar();
		return $c->conexion();
	}

	public function mostraDatos(){

		$conexion = self::conexion();

		$sql="SELECT id,nombre,apellido,edad FROM persona";

		$result=mysqli_query($conexion,$sql);

		return mysqli_fetch_all($result,MYSQLI_ASSOC); 

	}

	public function insertarDatos($nombre,$ape,$edad){

		$conexion = self::conexion();
		$sql = "INSERT INTO persona(nombre,apellido,edad) VALUES ('$nombre','$ape',$edad)";
		$result = mysqli_query($conexion,$sql);
		return header("Location: index.php");

	}

}




