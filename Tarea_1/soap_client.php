<?php
// Definimos la ruta donde se encuentra el servicio
$options = array("location" => "http://localhost/ws/soap_service.php",
				"uri" => "http://localhost");
				
try{

//levantamos el cliente
$cliente = new SoapClient(null, $options);

// Llamamos la funcion de estudiantes
$estudiantes = $cliente->getEstudiantesN();

echo $estudiantes;

}

catch(SoapFault $ex){

var_dump($ex);

}

?>