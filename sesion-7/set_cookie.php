<?php
    //CREANDO UNA COOKIE
    $time = time();
    //tiempo de vida de un minuto
    setcookie("usuario_2", "Jhonatan", $time + 60);
    echo "Cookie creada";