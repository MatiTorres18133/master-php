<?php

require '../vendor/autoload.php';

$foto_original = 'bg2.jpg';
$guardar_en = 'foto_mod.jpf';


$thumb = new PHPThumb\GD($foto_original);

$thumb->resize(50,50);
$thumb->show();
$thumb->save($guardar_en);

?>