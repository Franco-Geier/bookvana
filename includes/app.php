<?php
    require "funciones.php";
    require "config/database.php";
    require __DIR__ . "/../vendor/autoload.php";

    // Conectarnos a la base de datos
    $db = conectarBD();
    
    use Model\ActiveRecord;

    ActiveRecord::setDB($db);    