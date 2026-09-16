<?php

function router(){
    echo "2. Router está analisando a URL.<br>";
    $rota = "/usuarios";
    $paramento = "id=123";
    middleware($rota);
}