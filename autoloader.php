<?php


function autoloader($classname)
{
    include "./App/controllers/$classname.php";
}

spl_autoload_register("autoloader");