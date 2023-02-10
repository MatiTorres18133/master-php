<?php


/*
FUNCIONES: 
Una funcion es un conjunto de instrucciones agrupadas bajo un nombre concreto 
y que pueden reutilizarse solamente invocando a la funcion tantas veces como queramos

functio nombreDeMiFuncion($parametro){
    //BLOQUE DE INTRUCCIONES
}

//INVOCACION
nombreDeMiFuncion($mi_parametro);
nombreDeMiFuncion($mi_parametro);

*/ 


//Ejemplo 1
function muestraNombres(){
    echo "Victor robles<br/>";
    echo "Matias Torres<br/>";
    echo "Juan Campas<br/>";
    echo "Rodrigo Tapari<br/>";
    echo "<hr/>";


}
// muestraNombres();



//Ejemplo 2
function tabla($numero){
    echo "<H3>Tabla de multiplicar del numero:  $numero</H3>";
    for($i=1; $i<=10; $i++){
        $operacion = $numero * $i;
        echo "$numero x $i = $operacion <br/>";
    }

}
// if(isset($_GET['numero'])){
//     tabla($_GET['numero']);
// }else{

//     echo "NO HAY DATOS";
// }



//Ejemplo 2
function calculadora($numero1, $numero2, $negrita = false){
    //Conjunto de instrucciones a ejecutar
    $Suma = $numero1 + $numero2 ;
    $Resta = $numero1 - $numero2;
    $Mult = $numero1 * $numero2;
    $Div = $numero1 / $numero2;

    if($negrita !=false){
        $Suma = $numero1 + $numero2 + $negrita ;
        $Resta = $numero1 - $numero2 - $negrita;
        $Mult = $numero1 * $numero2 * $negrita;
        $Div = $numero1 / $numero2 / $negrita;
        echo "<h3> OPERACION  CON 3 NUMEROS</H3> ";
    }
    echo "SUMA: $Suma <br/>";
    echo "RESTA: $Resta <br/>";
    echo "MULTI: $Mult <br/>";
    echo "DIV: $Div <br/>";

 
    echo "<hr/>";
}

calculadora(1, 2, 3);
calculadora(100, 5);
calculadora(213, 123);



/*FUNCION QUE RETORNA UN STRING */
function devuelveNombre($nombre){
    return "El nombre es: " . $nombre;
}




?>