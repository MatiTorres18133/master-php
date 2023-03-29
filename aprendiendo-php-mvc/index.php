

<h1>Bienvenido a mi WEB con MVC</h1>

<?php
require_once 'autoload.php';



$controlador = new UsuarioController();
if(isset($_GET['controller'])){
    $nombreControlador = $_GET['controller'].'Controller';
}else{
    echo "La pagina que buscas no existe";
    exit;
}

if( class_exists($nombreControlador)){

    $controlador = new $nombreControlador();

if(isset($_GET['action'])&& method_exists($controlador, $_GET['action'])){
    $action = $_GET['action'];
    $controlador ->$action();

}else{
    echo "La pagina que buscas no existe";
}
}else{
    echo "La pagina no existe";
}
?>