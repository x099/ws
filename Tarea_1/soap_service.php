<?php
// SOAP (Simple Object Access Protocol) que esta basado en XML

// Se incluye la clase students!

require_once('estudiantes.php');

// proveemos la url del servicio
$options = array("uri" => "http://localhost");

// se levanta el server
$server = new SoapServer(null, $options);

// Definimos y lvenatamos la clase para q este disponible
$server->setClass('Estudiantes');

// Esperamos alguna peticion
$server->handle();

?>