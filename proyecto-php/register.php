<?php
if(isset($_POST)){
   require_once('includes/conexion.php');



if(!isset($_SESSION)){
   session_start();
}


    //Recoger los valores del formulario de registro
    $nombre= isset($_POST['nombre'])? mysqli_real_escape_string($db,$_POST['nombre']): false;
    $apellido=isset($_POST['apellido'])? mysqli_real_escape_string($db,$_POST['apellido']): false;
    $email=isset($_POST['email'])? mysqli_real_escape_string($db,$_POST['email']): false;
    $password=isset($_POST['pass'])? mysqli_real_escape_string($db,$_POST['pass']): false;
    //ARRAY DE ERRORES
    $errores = array();
    //Validar los datos antes de guardarlos en la base de datos 

    //VALIDAR CAMPO NOMBRE
    if(!empty($nombre) && !is_numeric($nombre) && !preg_match("/[0-9]/", $nombre)){
       $nombre_validate = true;

    }else{
       $nombre_validate = false;

        $errores['nombre'] = "<h4 id='alerta'>El nombre no es valido</h4>";
    }

    //VALIDAR CAMPO APELLIDO
    if(!empty($apellido) && !is_numeric($apellido) && !preg_match("/[0-9]/", $apellido)){
        $apellido_validate = true;
 
     }else{
        $apellido_validate = false;
 
         $errores['apellido'] = "<h4 id='alerta'>El apellido no es valido</h4>";
     }
 
   

      //VALIDAR CAMPO EMAIL
      if(!empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL)){
        $email_validate = true;
 
     }else if(empty($email)){
        $email_validate = false;
 
         $errores['email'] = "<h4 class='hola'>Debe ingresar un email</h4>";
     }else{
      $email_validate = false;
 
         $errores['email'] = "<h4 style='color:red'>El email no es valido</h4>";
     }


      //VALIDAR CAMPO PASSWORD
      if(!empty($password)){
        $pass_validate = true;
 
     }else{
        $pass_validate = false;
 
         $errores['pass'] = "<h4 style='color:red'>La clave no es valida</h4>";
     }




     $guardar_usuario = false;
     if(count($errores)==0){
      $guardar_usuario=true;

         //CIFRAR LA CONTRA
         $password_segura = password_hash($password, PASSWORD_BCRYPT, ['cost'=>4]);
       

        //INSERTAR  USUARIO EN LA BASE DE DATOS
        $sql = "INSERT INTO usuarios VALUES(null, '$nombre', '$apellido', '$email', '$password_segura', CURDATE());";
        $guardar = mysqli_query($db,$sql);


        
       
        if($guardar == true){
         $_SESSION['completado']= "<h5 style='color:green'>El registro se ha completado con exito!</h5>";
        }else{
         $_SESSION['errores']['general']="<h5 style='color:red'>El registro se ha completado con exito</h5>";
        }
      
     }else{
        $_SESSION['errores'] = $errores;
   
     }

}
header('Location:index.php');



?>

