<?php
    $nota = 5;
    $estado = ($nota>=15)?"A":(($nota>=12)?"B":(($nota>=10)?"C":"REPROBADO"));
    echo "Tu estado es: {$estado} <br>";
    echo "<hr>";
    //EQUIVALENCIA IF ANIDADO USANDO IF ELSE
    $nota = 5;
    $estado = "";
    if($nota>=15){
        $estado = "A";
    }else{
        if($nota>=12){
            $estado = "B";
        }else{
            if($nota>=10){
                $estado = "C";
            }else{
                $estado = "REPROBADO";
            }
        }
    }
    echo "Tu estado es: {$estado} <br>";
    echo "<hr>";
    //EQUIVALENCIA IF ANIDADO USANDO IF ELSEIF
    $nota = 5;
    $estado = "";
    if($nota>=15){
        $estado = "A";
    }elseif($nota>=12){
        $estado = "B";
    }elseif($nota>=10){
        $estado = "C";
    }else{
        $estado = "REPROBADO";
    }
    echo "Tu estado es: {$estado} <br>";
    echo "<hr>";
    //EQUIVALENCIA IF ANIDADO USANDO SWITCH
    $nota = 5;
    $estado = "";
    switch($nota){
        case $nota>=15:
            $estado = "A";
            break;
        case $nota>=12:
            $estado = "B";
            break;
        case $nota>=10:
            $estado = "C";
            break;
        default:
            $estado = "REPROBADO";
            break;
    }
    echo "Tu estado es: {$estado} <br>";
    echo "<hr>";