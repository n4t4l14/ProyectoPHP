<?php 

	#en el index mostraremos la salida de las vistas al usuario y enviaremos las distintas acciones que el usuario envíe al controlador. 
require_once "Modelos/modelo.php";
require_once "Controladores/controller.php";

$tatto = new TattoController();
$tatto->plantilla();
