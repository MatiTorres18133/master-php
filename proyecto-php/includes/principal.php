   <!--CAJA PRINCIPAL-->

<div class="principal">

<h1 style="color:#007ee5">Ultimas entradas</h1>
<hr>


<?php
 $entradas = conseguirTodasLasEntradas($db, TRUE, );

 if(!empty($entradas)):
 
   while($entrada =mysqli_fetch_assoc($entradas)):
   ?> 
   <article class="entrada">
   <a class="hover_a" href="entrada.php?id=<?=$entrada['id']?>">
   <h2> <?=$entrada['titulo']?></h2>
   <span><?=$entrada['categoria']." | ".$entrada['fecha']?></span>
   <p><?= substr($entrada['descripcion'],0, 190)." ...."?></p>
   </a>
   
</article>

<?php 

endwhile;
endif;

?>



<a class="ver_todas" href="entradas.php">Ver todas las entradas</a>

</div>
