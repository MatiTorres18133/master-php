<?php require_once 'includes/redireccion.php';?>
<?php require_once 'includes/header.php';?>
<?php require_once 'includes/lateral.php';?>
<body>


<!--CAJA PRINCIPAL-->
<div class="principal">
<h1 style="color:#007ee5">Todas las entradas</h1>

<?php
 $entradas = conseguirTodasLasEntradas($db, null);
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

<a class="ver_todas" href="index.php">Volver a entradas</a>
</div>

</body>


<?php require_once 'includes/footer.php'?>
