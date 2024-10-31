<?php 
    /*
        Tipos de variables
            Constantes
            Variables
        Tipos de datos
            String = "Cadenas de texto"
            Integer = 1 
            Float = 1.1
            Boolean = true / false
            Array = [1,2,3]
            Object
            Null
    */
    // String
    $nombre = "Jhonatan<br>";
    echo $nombre;
    // Integer
    $edad = 24;
    echo $edad."<br>";
    // Float
    $pi = 3.1416;
    echo $pi."<br>";
    // Boolean
    $es_verdadero = true;
    echo $es_verdadero."<br>";
    $es_falso = false;
    echo $es_falso."<br>";
    //INDETIFICAR TIPOS DE DATOS 
    var_dump($nombre);
    echo "<hr>";
    var_dump($edad);
    echo "<hr>";
    // Array
    $colores = ["rojo", "verde", "azul"];
    echo $colores[1]."<br>";
    var_dump($colores);
    echo "<hr>";
    //funcion propia de PHP para imprimir valores de un array
    print_r($colores); 
    echo "<hr>";