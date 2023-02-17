<?php require_once 'includes/redireccion.php';?>
<?php require_once 'includes/helpers.php';?>
<?php require_once 'includes/header.php';?>


<?php 
    $entrada_editar = conseguirEntrada($db, $_GET['id']);
    
    if(!isset($entrada_editar['id'])){
        header("Location:index.php");
        }
?>

<?php require_once 'includes/redireccion.php';?>

<?php require_once 'includes/lateral.php';?>
<body>



<div class="principal">

<h1>Editar entrada</h1><br>
<p >Edita tu entrada de: <strong>"<?=$entrada_editar['titulo']?>" </strong></p>
<br>
<article class="crear_cat">
<form action="guardar-entrada.php?editar=<?=$entrada_editar['id']?>" method="POST">
    <label for="titulo">Titulo</label>
    <?php echo isset($_SESSION['errores_ent'])?mostrarError($_SESSION['errores_ent'], 'titulo'):' ';?>
    <input type="text" name="titulo" value="<?=$entrada_editar['titulo']?>" ><br>
     <label for="descripcion">Descripcion</label><br>
    <?php echo isset($_SESSION['errores_ent'])?mostrarError($_SESSION['errores_ent'], 'descripcion'):' ';?>

    <textarea name="descripcion"  cols="30" rows="10"><?=$entrada_editar['descripcion']?></textarea><br>
    <label class="label-font" for="categorias">Categoria</label><br>

    <select name="categorias">
        <?php $categorias = conseguirCategorias($db);
        if(!empty($categorias)):?>
       <?php while($categoria = mysqli_fetch_assoc($categorias)):?>
        <option value="<?=$categoria['id']?>"
        <?=($categoria['id']==$entrada_editar['categoria_id']) ? 'selected= "selected"':''?>>
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
    <input type="submit" value="Editar entrada">
  
</form>
<?php borrarErrores();?>
<br>


</div>


    
</body>
<?php require_once 'includes/footer.php'?>
