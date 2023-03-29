<?php

function autoCargar($clase){
    include 'controllers/' . $clase . ".php";
}


spl_autoload_register('autoCargar')
?>