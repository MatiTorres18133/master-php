<?php


//Crear directorio
if(!is_dir('miCarpeta')){
    mkdir('miCarpeta', 077) or die("Fallo la creacion de la carpeta");

}else{
    echo "La carpeta ya existe ";
}


//Borrar directorio
rmdir('miCarpeta');


//Mostra contenido dentro de la carpeta

if ($gestor = opendir('./mi_carpetas')){
    while(false!= ($archivo = readdir($gestor))){
        if($archivo != "." && $archivo != ".."){
            echo $archivo;

        }
    }
};
?>