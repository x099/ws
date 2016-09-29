<?php

// REST (Representational State Transfer) 
// puede enviar una peticiones HTTP

// Los metodos mas comunes utilizados son GET , POST, PUT y DELETE
// GET: Se utiliza para recuperar datos de un recurso
// POST: Se utiliza para crear un nuevo recurso , pero se considera inseguro
// PUT : Se utiliza para actualizar un recurso , pero se considera inseguro
// DELETE: Se utiliza para eliminar un recurso y también es inseguro

function get_estudiante_info($id){
    
    $estudiante_info = array();
    
    switch($id){
        
        case 1:
            $estudiante_info = array("nombre" => "Hullen", "apellido" => "Polanco", "direccion" => "11150 Vejer de la Frontera "); 
            break;
        case 2:
            $estudiante_info = array("nombre" => "Sean", "apellido" => "Santiago", "direccion" => "Cartagena, 20
30190 Albudeite ");
            break;
        case 3:
            $estudiante_info = array("nombre" => "Ami", "apellido" => "Alba", "direccion" => "Calle Aduana, 27
01307 Leza ");
            break;
        case 4:
            $estudiante_info = array("nombre" => "Raynaldo", "apellido" => "Haro", "direccion" => "Pza. Fuensanta, 60
32234 A Arnoia ");
            break;
        case 5:
            $estudiante_info = array("nombre" => "Icaro", "apellido" => "Alarcon", "direccion" => "Visitacion de la Encina, 64
37718 Aldeacipreste ");
            break;
        
    }
    
    return $estudiante_info;
    
}

function get_estudiante_list(){
    
    
    $estudiante_list = array(array("id" => 1, "nombre" => "Hullen Polanco"),
                          array("id" => 2, "nombre" => "Sean Santiago"),
                          array("id" => 3, "nombre" => "Ami Alba"),
                          array("id" => 4, "nombre" => "Raynaldo Haro"),
                          array("id" => 5, "nombre" => "Icaro Alarcon"));
    
    return $estudiante_list;
    
}


if(isset($_GET["action"])){
    
    switch($_GET["action"]){
        
        case "get_estudiante_list":
            $value = get_estudiante_list();
            break;
        
        case "get_estudiante":
            $value = get_estudiante_info($_GET["id"]);
            break;
        
    }
    
}

exit(json_encode($value));

?>