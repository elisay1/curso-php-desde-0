<?php 
    //CREANDO UNA SESION
    session_start();
    $_SESSION["usuario"] = "Jhony Creativo";
    echo "Session creada para ".$_SESSION["usuario"];