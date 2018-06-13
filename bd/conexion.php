<?php 

class conectar{

	private $servidor="localhost";
	private $usuario = "root";
	private $contra = "";
	private $bd = "crud";

	public function conexion(){
		$conexion = mysqli_connect($this->servidor,$this->usuario,$this->contra,$this->bd);
		return $conexion;
	}


}
