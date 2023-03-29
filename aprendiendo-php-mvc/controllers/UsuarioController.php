<?php


 class UsuarioController {

    public function mostrarTodos(){

    require_once('models/usuario.php');

    $usuario= new Usuario();

    $todos_los_usuario= $usuario->conseguirTodos('usuarios');
    
    require_once('views/usuarios/mostrarTodos.php');
    }       


    public function crearUsuario(){
      require_once("views/usuarios/crear.php");


    }
 }

?>