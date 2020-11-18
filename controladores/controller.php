<?php 

class TattoController {

	public function plantilla(){

		include "Vistas/template.php";
	}

	public function enlacesPaginasController(){

		$enlacesController = $_GET["action"];

		$respuesta = new EnlacesPaginas();
		$path = $respuesta->enlacesPaginasModel($enlacesController);

		include $path;
	}
}


