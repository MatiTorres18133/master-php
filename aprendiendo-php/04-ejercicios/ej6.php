<?php
//===================================
echo "<table border = '1'><tr>";//inicio de la tabla

//===================================
echo "<tr>";//fila 1 de celadas
for ($cabezera = 1; $cabezera <= 10; $cabezera++){
    echo "<td>Tabla del $cabezera</td>";
}
echo "</tr>";
//cierre fila 1 de celdas
//===================================
//inicip fila 2 de celdas
echo "<tr>";
for ($i = 1; $i <= 10; $i++){
    echo "<td>";
    for ($x = 1; $x <= 10; $x++){
        echo "$i x $x = " . ($i * $x)."<br>";
    }
    echo "</td>";

}
//cierres fila 2 de celdas
echo "</tr>";
//===================================
echo "</table>";//fin de la tabla
?>