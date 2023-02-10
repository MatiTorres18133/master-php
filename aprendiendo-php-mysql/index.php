<?php

/*CONEXION A LA BASE DE DATOS*/

$conexion = mysqli_connect("localhost", "root","","phpmysql");
/*COMPROBAR SI LA CONDICION ES CORRECTA */
if (mysqli_connect_errno()){
    echo 'La conexion a la base de datos fallo '.mysqli_connect_error();

}else{
    echo '<h1>Conexion realizada correctamente </h1><br/>';

}



//CONSULTA PARA CONFIGURAR LA CODIFICACION DE CARACTERES

mysqli_query($conexion, "SET NAMES 'utf8'");


//CONSULTA SELECT desde PHP

$query = mysqli_query($conexion, "SELECT * FROM notas");

while($nota = mysqli_fetch_assoc($query)){
    echo "<h3>".$nota['titulo']. "</h3><br/>";
    echo $nota['descripcion'].'<br/>';

}


//INSERTAR DATOS desde PHP
$sql = "INSERT INTO notas VALUES(null, 'Nota desde PHP', 'Esto es una nota de PHP','green')";
echo '<hr/>';
$queryInsert = mysqli_query($conexion, $sql);
if($queryInsert){
    echo "Usted inserto los datos correctamente ";
     
}else{
    echo "Error: " . mysqli_error($conexion);
}




?>