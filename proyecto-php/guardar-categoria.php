<?php

if(isset($_POST)){
    require_once('./includes/conexion.php');


    if(!isset($_SESSION)){
        session_start();
     }

     $nombre= isset($_POST['nombre'])? mysqli_real_escape_string($db,$_POST['nombre']): false;
     $errores = array();
     //VALIDAR CAMPO NOMBRE


     if(!empty($nombre) && !is_numeric($nombre) && !preg_match("/[0-9]/", $nombre)){
        $nombre_validate = true;
 
     }else{
        $nombre_validate = false;
 
         $errores['nombre'] = "<h4 id='alerta'>El nombre no es valido</h4>";
     }



     
     $guardar_usuario = false;
     if(count($errores)==0){
        $sql = "INSERT INTO categorias VALUES(null, '$nombre');";
        $guardar = mysqli_query($db,$sql);


        if($guardar == true){
            $_SESSION['completado_cat']= "<h5 id='alerta2'>La categoria se guardo correctamente!</h5>";
           }else{
            $_SESSION['errores_cat']['general']="<h5 id='alerta'>La categoria no se pudo guardar</h5>";
           }


     }else{
        $_SESSION['errores_cat'] = $errores;
     }
}

header('Location:crear_categoria.php');



?>