<?php 


function autoload($className) {
    require_once "class/$className.php";
}

spl_autoload_register('autoload');