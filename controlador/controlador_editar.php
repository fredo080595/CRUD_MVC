<?php 

class controladorEditar{

	public function mostrarDatos($id){

		require_once "modelo/modelo_editar.php";
			$datos = new modeloEditar();
			$mostrar = $datos->mostrarDatos($id);
		require_once "vista/vista_editar.php";
	}

	public function enviarDatos($datos){
		require_once "modelo/modelo_editar.php";

			$enviar = new modeloEditar();
			$enviar->editarDatos($datos);

		require_once "vista/vista_editar.php";
	}

}


	$id = $_GET['id'];
	$obj = new controladorEditar();
	$obj->mostrarDatos($id);

	if (!empty($_POST)) {

		$datos = array();
		$datos[0] = $_POST['id'];
		$datos[1] = $_POST['nombre'];
		$datos[2] = $_POST['ape'];
		$datos[3] = $_POST['edad'];
		$obj->enviarDatos($datos);
	}




 