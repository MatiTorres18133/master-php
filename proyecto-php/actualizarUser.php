<?php
if(isset($_POST)){
   require_once('includes/conexion.php');



    //Recoger los valores del formulario de actualizacion
    $nombre= isset($_POST['nombre'])? mysqli_real_escape_string($db,$_POST['nombre']): false;
    $apellido=isset($_POST['apellido'])? mysqli_real_escape_string($db,$_POST['apellido']): false;
    $email=isset($_POST['email'])? mysqli_real_escape_string($db,$_POST['email']): false;

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
 
         $errores['email'] = "<h4 id='alerta'>Debe ingresar un email</h4>";
     }else{
      $email_validate = false;
 
         $errores['email'] = "<h4 id='alerta'>El email no es valido</h4>";
     }


   $guardar_usuario = false;
   
     if(count($errores)==0){     
         $usuario = $_SESSION['usuario'];


        //COMPROBAR  SI EL EMAIL YA EXISTE
        $sql = "SELECT id, email FROM usuarios WHERE email = '$email'";
        $isset_email = mysqli_query($db , $sql);
        $isset_user = mysqli_fetch_assoc($isset_email);




        if($isset_user['id']== $usuario['id'] || $isset_user == null){
         //ACTUALIZAR  USUARIO EN LA BASE DE DATOS
        $sql = "UPDATE usuarios SET nombre = '$nombre', apellidos = '$apellido' , email = '$email' WHERE id = ".$usuario['id'];
        $guardar_usuario = mysqli_query($db,$sql);
       
        if($guardar_usuario == true){

        $_SESSION['usuario']['nombre'] = $nombre;
        $_SESSION['usuario']['apellidos']= $apellido;
        $_SESSION['usuario']['email']=$email;
        $_SESSION['completado']= "<h5 id='alerta2'>Tus datos se han actualizado con exito!</h5>";
         
        }else{
         $_SESSION['errores']['general']="<h5 id='alerta'>Ups....algo ha salido mal</h5>";
        }
        }else{
         $_SESSION['errores']['general']="<h5 id='alerta'>El email ya existe</h5>";
        }
     }else{
        $_SESSION['errores'] = $errores;
   
     }

}
header('Location:perfil.php');



?>

