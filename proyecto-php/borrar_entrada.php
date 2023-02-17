<?php

if(isset($_GET)){
    require_once('./includes/conexion.php');
 

    if(!isset($_SESSION)){
        session_start();
     }

     $id_entrada= isset($_GET['id'])? mysqli_real_escape_string($db,$_GET['id']): false;
     $errores = array();
     //VALIDAR CAMPO NOMBRE


     if(!empty($id_entrada)){
        $id_validate = true;
        
     }else{
        $id_validate = false;
 
         $errores['id_no_borrado'] = "<h4 id='alerta'>No se pudo borrar entrada</h4>";
     }



     
     $guardar_usuario = false;
     if(count($errores)==0){
        $sql = "DELETE FROM entradas WHERE id = $id_entrada";
        $guardar = mysqli_query($db,$sql);
        
        if($guardar == true){
            $_SESSION['completado_borrar']= "<h5 id='alerta2'>La categoria se guardo correctamente!</h5>";
           }else{
            $_SESSION['errores_borrar']['general']="<h5 id='alerta'>La categoria no se pudo guardar</h5>";
           }


     }else{
        $_SESSION['errores_borrar'] = $errores;
     }
}

header('Location:entradas.php');



?>