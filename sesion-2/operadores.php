<?php
    /*
        * OPERADORES: "Los operadores nos permiten realizar operaciones en nuestras variables"

    */
    //OPERADORES ARITMETICOS
    $a = 10;
    $b = 5;
    echo $a + $b;
    echo "<hr>";
    //OPERADEROS DE ASIGNACION 
    $a = 10;
    echo $a;
    echo "<hr>"; 
    echo $a += 5; // $a = $a + 5 
    echo "<hr>";
    $b = 10;
    echo $b;
    echo "<hr>";
    echo $b -= 5; // $b = $b - 5
    echo "<hr>";
    //OPERADORES DE COMPARACION
    // ==, !=, >, <, >=, <=
    $a = 10;
    $b = 5;
    var_dump($a == $b);
    echo "<hr>";
    var_dump($a > $b);
    echo "<hr>";
    //OPERADORES LOGICOS
    // &&(Y), ||(O), !(NO)
    $es_adulto = true;
    $tiene_licencia = false;
    var_dump($es_adulto && $tiene_licencia); 
    echo "<hr>";
    var_dump($es_adulto || $tiene_licencia);
    echo "<hr>";
    var_dump(!$es_adulto);
    echo "<hr>";