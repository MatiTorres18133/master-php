<?php

$archivo = $_FILES['archivo'];
$nombre = $archivo['name'];
$tipo = $archivo['type'];
// var_dump($archivo);

if($tipo == "image/jpg" || $tipo == "image/jpeg" || $tipo == "image/png" || $tipo == "image/gif"){
    if(!is_dir('images')){
        mkdir('images', 077);
    }
    move_uploaded_file($archivo['tmp_name'], "images/".$nombre);

    header("Refresh:3; URL=index.php");
    echo '<h1 style="color:green">Imagen subida correctamente</h1>';
 
}else{
    header("Refresh: 5; URL=index.php");
    echo "<h1>Sube una imagen con formato correcto porfavor....</h1>";
}


?>