
<?php 

class controladorIndex{

	public function muestra(){
			require_once "modelo/modelo_index.php";

			$obj = new index();
			$muestraDato= $obj->mostraDatos();

			require_once "vista/vista_index.php";
	}
	public function enviarDatos($nombre,$ape,$edad){
		require_once "modelo/modelo_index.php";

			$obj2 = new index();
			$obj2->insertarDatos($nombre,$ape,$edad);

		require_once "vista/vista_index.php";
	}

}


$muestra = new controladorIndex();
$muestra->muestra();


if (!empty($_POST)) {
	$nombre = $_POST['nombre'];
	$ape = $_POST['ape'];
	$edad = $_POST['edad'];

	$enviar = new controladorIndex();
	$enviar->enviarDatos($nombre,$ape,$edad);
}



