<?php

function usuarioController(){
    echo "6. Controller recebeu a requisição.<br>";
    $usuarios = usuarioservice();
    echo "8. Controller recebeu os dados do Service.<br>";
    echo "Usuarios encontrados:<br>";
    foreach ($usuaios as $usuario) {
        echo "- " . $usuario . "<br>";
    }
}