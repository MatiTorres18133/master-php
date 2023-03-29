<?php

//conexion a la base de datos
$conexion = new mysqli('localhost','root','','notas_master');
$conexion->query("SET NAMES 'utf-8'");


//CONSULTA PARA CONTAR ELEMENTOS TOTALES
$consulta = $conexion->query('SELECT COUNT(id) as "total" FROM notas');
$rows= $consulta->fetch_object()->total;
$numero_elementos_pagina =2;


?>