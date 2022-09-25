<?php
if (isset($_POST['opcion'])) {
	require_once "../model/ClienteModelo.php";
} else {
	require_once "../model/ClienteModelo.php";
}

//Clase Controlador
class Controlador
{
	public function ListarPersona()
	{
		$respuesta = ClienteModelo::ListarPersona();
		return $respuesta;
	}
	public function GuardarCliente($datos)
	{
		$respuesta = ClienteModelo::GuardarCliente($datos);
		return $respuesta;
	}
}

//Acciones segun lo que se envie desde el JS.
if ($_POST["opcion"] == "ListarPersona") {
	$respuesta = new Controlador();
	$respuesta = $respuesta->ListarPersona();
	echo json_encode($respuesta, JSON_UNESCAPED_UNICODE);
} else if ($_POST["opcion"] == "GuardarPersona") {
	$motivo = (isset($_POST['motivo'])) ? $_POST['motivo'] : null;
	$descripcion = (isset($_POST['descripcion'])) ? $_POST['descripcion'] : null;
	$notificacion = (isset($_POST['notificacion'])) ? $_POST['notificacion'] : null;

	$datos = [
		"motivo" => $motivo,
		"descripcion" => $descripcion,
		"notificacion" => $notificacion
	];

	$respuesta = new Controlador();
	$respuesta = $respuesta->GuardarCliente($datos);
	if ($respuesta) :
		echo 1;
	else :
		echo 2;
	endif;
}
