<?php 

    spl_autoload_register(function(string $className){

        if(file_exists("model" . DIRECTORY_SEPARATOR . $className.".class".".php") === true){
            require_once("model" . DIRECTORY_SEPARATOR . $className.".class".".php");
        }

    });

    spl_autoload_register(function(string $className){

        if(file_exists(".." . DIRECTORY_SEPARATOR . ".." . DIRECTORY_SEPARATOR . "model" . DIRECTORY_SEPARATOR . $className.".class".".php") === true){
            require_once(".." . DIRECTORY_SEPARATOR . ".." . DIRECTORY_SEPARATOR . "model" . DIRECTORY_SEPARATOR . $className.".class".".php");
        }

    });
    
?>