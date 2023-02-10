<?php

/*Hacer un programa que muestre todos los numeros IMPARES entre dos numeros que nos llegen por la URL($_GET) */


if(isset($_GET['numero1']) && isset($_GET['numero2'])){
    $numero1 = $_GET['numero1'];
    $numero2 = $_GET['numero2'];

    if(($numero1 < $numero2)){
        for($i= $numero1; $i<=$numero2; $i++){
            if ($i % 2 != 0){
                echo "<h4>$i Es impar</h4>";
            }else{

                echo "<h4>$i Es par</h4>";
                
            }
         
        }
        
    }else{
        for($i= $numero2; $i<=$numero1; $i++){
            echo "<h4>$i</h4>";
        }
        
    }
   
}else{
    echo "No ingreso numeros";
}






?>