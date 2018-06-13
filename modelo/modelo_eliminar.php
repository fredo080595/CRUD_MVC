<?php 

require_once "bd/conexion.php";
class modeloEliminar{

	private function conexion(){
		$c = new conectar();
		return $c->conexion();
	}

	public function eliminarDato($id){
		$conexion = self::conexion();
		$sql = "DELETE FROM persona WHERE id='$id'";
		$result = mysqli_query($conexion,$sql);
		return header("Location: index.php");
	}

}

