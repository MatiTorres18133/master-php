<?php


//CONEXION A LA BASE DE DATOS
$server = 'localhost';
$username = 'root';
$password='';
$database = 'php_proyect';
$db=mysqli_connect($server, $username, $password,$database);

mysqli_query($db, "SET NAMES 'utf8'");


//INICIAR SESION
if(!isset($_SESSION)){
    session_start();
}




?>