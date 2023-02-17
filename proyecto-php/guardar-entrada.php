<?php

if(isset($_POST)){
    require_once('./includes/conexion.php');


    if(!isset($_SESSION)){
        session_start();
     }

     $titulo= isset($_POST['titulo'])? mysqli_real_escape_string($db,$_POST['titulo']): false;
     $descripcion= isset($_POST['descripcion'])? mysqli_real_escape_string($db,$_POST['descripcion']): false;
     $categorias= isset($_POST['categorias'])? mysqli_real_escape_string($db,$_POST['categorias']): false;
     $usuario = $_SESSION['usuario']['id'];


     $errores = array();
     //VALIDAR CAMPO NOMBRE

     if(empty($titulo)){
        $errores['titulo']= "<h4 id='alerta'>El titulo no es valido</h4>";
     }

     if(empty($descripcion)){
        $errores['descripcion']= "<h4 id='alerta'>La descripcion esta vacia</h4>";
     }

     if(empty($categorias)){
        $errores['categorias']= "<h4 id='alerta'>Seleccione una categoria</h4>";
     }


     if(count($errores)==0){
      if(isset($_GET['editar'])){
         $entrada_id=$_GET['editar'];
         $usuario_id=$_SESSION['usuario']['id'];

      
         $sql =  "UPDATE entradas SET titulo = '$titulo' , descripcion = '$descripcion', categoria_id = $categorias WHERE id=$entrada_id AND usuario_id = $usuario_id";
       
      }else{
         $sql = "INSERT INTO entradas VALUES(null, '$usuario', '$categorias','$titulo','$descripcion',CURDATE());";
      }
        
        $guardar = mysqli_query($db,$sql);
      
      header('Location:index.php');
     }else{
        $_SESSION['errores_ent'] = $errores;
        if($_GET['editar']){
        header('Location:editar_entrada.php?id='.$_GET['editar']);
        }else{
         header('Location:crear_entradas.php');
        }
 

     }
}




?>