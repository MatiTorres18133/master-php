<?php
//Iniciar la session y la conexion en la base de datos
require_once('includes/conexion.php');


if(isset($_POST)){
    //Borrar error antiguo
    if(isset($_SESSION['error_login'])){
        unset($_SESSION['error_login']);
     }
     //Recoger datos del fromulario
    $email = trim($_POST['email']);
    $pass = $_POST['password'];

    //Consulta para comprobar credenciales del usuario
    $sql = "SELECT * FROM usuarios WHERE email ='$email' LIMIT 1";
    $login = mysqli_query($db,$sql);
    if($login && mysqli_num_rows($login)==1){
        $usuario = mysqli_fetch_assoc($login);

         //Comprobar contra/cifrar
        $verify = password_verify($pass, $usuario['password']);
        if($verify){
            $_SESSION['usuario']=$usuario;
          
        }else{
            $_SESSION['error_login']= 'El usuario no se pudo logear correctamente';
        }
    }else{
        $_SESSION['error_login']= 'El usuario no se pudo logear correctamente';

    }
   

    header('Location:index.php');
    

    

}



//Consulta para comprobar credenciales del usuario




?>