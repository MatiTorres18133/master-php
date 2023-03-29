<?php


 //HACER PAGINACION
 $pagination = new Zebra_Pagination();
 $pagination->records($rows);

 //NUMERO DE ELEMENTOS POR PAGINA
 $pagination->records_per_page($numero_elementos_pagina);

 $page = $pagination->get_page();
 //desde donde empieza a contar
 $expresion = (($page -1 )* $numero_elementos_pagina);
 //hacer la consulta

 $sql = "SELECT * FROM notas LIMIT $expresion, $numero_elementos_pagina";
 //ejecutar consulta

 $notas = $conexion->query($sql);

?>