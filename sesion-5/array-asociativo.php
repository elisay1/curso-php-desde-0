<?php
    $edades = array(
        "Jhonatan"=>24,
        "Developer Notoy"=>16,
        "Luchito"=>31,
        "Erick"=>24,
        "Elisay"=>23,
        "Jersson"=>28,
        "Wilson Marca"=>35
    );
    // $edades = json_encode($edades);
    // header("Content-Type: application/json");
    // echo $edades; 
    var_dump($edades);
    echo "<hr>";
    $valor = "Elisay";
    echo isset($edades[$valor])?$edades[$valor]:"No existe";
