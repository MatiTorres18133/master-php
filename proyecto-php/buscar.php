


<?php 
    if(!isset($_POST['busqueda'])){
        header("Location:index.php");
        }

    
 
?>

<?php require_once 'includes/header.php';?>
<?php require_once 'includes/lateral.php';?>
<body>


<!--CAJA PRINCIPAL-->
<div class="principal">

<h1>Busqueda : <?=$_POST['busqueda']?></h1>

<?php
 $entradas = conseguirTodasLasEntradas($db, null,null,$_POST['busqueda']);
 if(!empty($entradas) && mysqli_num_rows($entradas)>=1):
   while($entrada =mysqli_fetch_assoc($entradas)):
   ?>
   <article class="entrada">
   <a class="hover_a" href="entrada.php?id=<?=$entrada['id']?>">
   <h2> <?=$entrada['titulo']?></h2>
   <span><?=$entrada['categoria']." | ".$entrada['fecha']?></span>
   <p><?= substr($entrada['descripcion'],0, 190)." ...."?></p>
   </a>
<?php 

endwhile;
else:
?>
<div id="alerta">No hay entradas para esta categoria</div>
<?php
endif;
?>

</article>
<a class="ver_todas" href="index.php">Volver a entradas</a>
</div>

</body>


<?php require_once 'includes/footer.php'?>
