<html>
<body>
<?php

// verifica clicks ON LINKS!

if(isset($_GET["action"]) == "get_estudiante"){
    
    // Obteniendo datos especificos
    
    $estudiante_info = file_get_contents('http://localhost/ws/api.php?action=get_estudiante&id=' . $_GET["id"]);
    
    // Se decodifica el JSON en un array
    
    $estudiante_info = json_decode($estudiante_info, true);
    
?>

Nombre: <?php echo $estudiante_info["nombre"] ?><br />
Apellido : <?php echo $estudiante_info["apellido"] ?><br />
Direccion : <?php echo $estudiante_info["direccion"] ?><br />

<?php

}

 else // imprime lista de estudiantes
 
 {
    
    // llama al metodo get_estudiante_list de la api
    
    $estudiante_list = file_get_contents('http://localhost/ws/api.php?action=get_estudiante_list');
    
    // json -> array
    
    $estudiante_list = json_decode($estudiante_list, true);
    
?>


<?php foreach($estudiante_list as $estudiante): ?>

<a href=<?php echo
"http://localhost/ws/rest_client.php?action=get_estudiante&id=" . $estudiante["id"] ?>><?php echo $estudiante["nombre"] ?></a><br />
 
 <?php endforeach; ?>
 
 <?php
    
 } ?>

</body>
</html>