<?php require_once 'includes/redireccion.php';?>
<?php require_once 'includes/header.php';?>
<?php require_once 'includes/lateral.php';?>


<div class="principal">

<h1>Crear entradas</h1><br>
<article class="crear_cat">
<form action="guardar-entrada.php" method="POST">
    <label for="titulo">Titulo</label>
    <?php echo isset($_SESSION['errores_ent'])?mostrarError($_SESSION['errores_ent'], 'titulo'):' ';?>
    <input type="text" name="titulo" ><br>
     <label for="descripcion">Descripcion</label><br>
    <?php echo isset($_SESSION['errores_ent'])?mostrarError($_SESSION['errores_ent'], 'descripcion'):' ';?>

    <textarea name="descripcion"  cols="30" rows="10"></textarea><br>
    <label class="label-font" for="categorias">Categoria</label><br>

    <select name="categorias">
        <?php $categorias = conseguirCategorias($db);
        if(!empty($categorias)):?>
       <?php while($categoria = mysqli_fetch_assoc($categorias)):?>
        <option value="<?=$categoria['id']?>">
            <?=$categoria['nombre']?>    
        </option>
    <?php 
    endwhile;   
    endif;
    ?>
    </select>
    <?php echo isset($_SESSION['errores_ent'])?mostrarError($_SESSION['errores_ent'], 'categorias'):' ';?>

    <br>
    
    <br>
    <input type="submit" value="Crear entrada">
  
</form>
<?php borrarErrores();?>
<br>


</div>



<?php require_once 'includes/footer.php'?>





