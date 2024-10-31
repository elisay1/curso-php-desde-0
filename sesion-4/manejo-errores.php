<?php
    function dividir($a,$b){
        if($b==0){
            throw new Exception("No se puede dividir por cero");
        }
        return $a / $b;
    }
    function evaluarDivision($a,$b){
        try{
            return dividir($a,$b);
        }catch(Exception $e){
            return "Error: ".$e->getMessage();
        }
    }
    echo evaluarDivision(10,2);
