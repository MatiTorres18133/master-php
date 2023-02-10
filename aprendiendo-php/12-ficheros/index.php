<?php
 //abrir archivo
 $archivo = fopen("fichero_Texto.txt", "a+");
//Leer contenido
 while (!feof($archivo)){
    $contenido = fgets($archivo);
    echo $contenido."<br/>";
}


// //Escribir en un archivo 

 fwrite($archivo, "Soy un texto metido desde php");


//cerrar archivo
 fclose($archivo);

//Copiar
copy('fichero_Texto.txt', 'fichero_copiado.txt') or die("error al copiar");

//Renombrar fichero 
rename("fichero_copiado.txt", "archivo_cambiado.txt");

//Eliminar fichero
unlink("fichero_Texto.txt")or die("error al borrar");


//Comprobar si un archivo existe

if(file_exists("fichero_Texto.txt")){
    echo "El archivo existe!!";
}else{
    echo "El archivo no existe!!";
}


?>