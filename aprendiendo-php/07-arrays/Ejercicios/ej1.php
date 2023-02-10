<?php

/*
Hacer un programa en php que tenga un array con 8 numeros enteros
y que haga lo siguiente:
-recorrerlo y mostrarlo.
-ordenarlo y mostrarlo.
-Mostrar su longitud.
-Buscar algo algun elemento.
*/


$numeros = [23, 12, 54, 67, 87, 98, 300, 123];
$busqueda = 54;
recorrerArray($numeros);
ordenarloYmostrarlo($numeros);
echo "<h1>Longitud del array</h1>";
echo count($numeros);
echo "<h1>Buscar en el array el numero $busqueda</h1>";
$search = array_search($busqueda, $numeros);




if(!empty($search)){
    echo "<h4> El numero buscado existe en el array, en el inidice: $search</h4>";
}else{

    echo "No existe el numero";
}

function recorrerArray($arrayNum){
    //INT $i
    $i = 0;
    for($i; $i<count($arrayNum); $i++){
        echo "Numero ".$i+1 .": ".$arrayNum[$i]."<br/>";
    }
}



function ordenarloYmostrarlo($arrayOrd){
sort($arrayOrd);
    echo "<hr/>";
    echo "<h1>Array ordenado de menor a mayor</h1>";
for($i=0; $i<count($arrayOrd);$i++){
    
    echo "Numero ".$i+1 .": ".$arrayOrd[$i]."<br/>";

}
}


?>