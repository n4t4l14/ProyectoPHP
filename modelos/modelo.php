<?php 

class EnlacesPaginas{

	public function enlacesPaginasModel($enlacesModel){

		if ($enlacesModel == "inicio" ||$enlacesModel == "registro" || $enlacesModel == "ingreso" || $enlacesModel == "usuarios" || $enlacesModel == "salir") {
			
			$modulo = "vistas/modulos/".$enlacesModel.".php";
			#a partir de aqui se limpia la url para encapsular el código y no permitir que el usuario pueda ver los errores en el lenguaje
		}elseif (isset($enlacesModel)) {
			
			$modulo = "vistas/modulos/inicio.php";

		} else {

			$modulo = "vistas/modulos/inicio.php";
		}
		

		return $modulo;
	}
}

