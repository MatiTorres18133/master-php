<?php


//operadores de comparacion 

/*
== igua
=== identico
!= diferente
<> diferente
!=== no identico
< menor que 
> mayor que
*/




/*SENTENCIA SWITCH */

$DIA = 1;

switch($DIA){
    case 1:
        echo "Lunes";
        break;
    case 2:
        echo "Martes";
        break;
    case 3:
        echo "Miercoles";
        break;
    case 4:
        echo "Jueves";
        break;    
    case 5:
        echo "Viernes";
        break;
    default:
        echo "Es finde semana";
}


//GOTO (INICIA LA EJECUCION DEL PROGRAMA EN LA VARIABLE GOTO)
goto marca;
echo "<h3>Instruccion 1 </h3>";
echo "<h3>Instruccion 2 </h3>";
echo "<h3>Instruccion 3 </h3>";
echo "<h3>Instruccion 4 </h3>";

marca:
echo "Me he saltado 4 echos";









?>