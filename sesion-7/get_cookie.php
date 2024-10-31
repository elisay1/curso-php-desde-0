<?php 
    if(isset($_COOKIE["usuario_2"])) {
        echo "usuario: ".$_COOKIE["usuario_2"]."<br>";
    }else{
        echo "No hay cookie";
    }