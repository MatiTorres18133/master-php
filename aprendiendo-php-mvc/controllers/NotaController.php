<?php

class NotaController{


 public function listar(){
    //modelo
    require_once('models/nota.php');
    //logica de la accion del controlador
    $nota = new Nota();
    //LLAMADA A METODO CONSEGUIR TODOS
   $notas=$nota->conseguirTodos('notas');

    //vista
    require_once("views/nota/listar.php");

 }
public function crearNota(){
   require_once('models/nota.php');
   $nota = new Nota();
   $nota ->setUsuarioId(1);
   $nota->setTitulo("Nota desde PHP MVC");
   $nota->setDescripcion("Esta es la nota desde PHP MVC");
   $guardar = $nota->guardar();
   

   header('Location:index.php?controller=Nota&action=listar');
}
public function borrarNota(){}



}

?>