<?php
    session_start();
    if(isset($_SESSION["usuario"])) {
        echo "usuario: ".$_SESSION["usuario"]."<br>";
    }else{
        echo "No hay session";
    }