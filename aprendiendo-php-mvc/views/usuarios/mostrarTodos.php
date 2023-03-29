
<h1>Listado de usuarios</h1>
<?php while($users=$todos_los_usuario->fetch_object()):?>
    <?=$users->nombre?> - <?=$users->apellidos?> </br>

<?php endwhile;?>