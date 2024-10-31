<?php
    $colores = ["rojo", "azul", "verde"];

    foreach($colores as $indice => $color){
        // echo "color: ".$color;
        if($color=="azul"){
            echo "indice: {$indice} color: {$color}";
            echo "<hr>";
        }
    }