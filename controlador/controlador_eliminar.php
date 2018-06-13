<?php  

class controladorEliminar{

	public function enviarDato($id){

		require_once "modelo/modelo_eliminar.php";

		$obj = new modeloEliminar();
		$obj->eliminarDato($id);

	}
}

$id = $_GET['id'];
$obj = new controladorEliminar();
$obj->enviarDato($id);
