<?php
    $colores = array("rojo", "azul", "verde");
    print_r($colores);
    echo "<hr>";
    if(in_array("negro", $colores)){
        echo "verde si esta en el array";
    }else{
        echo "mi querido pimpollo el color no esta en el array";
    }