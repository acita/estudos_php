<?php

$data = array(
    "empresa"=>"ACITA",
    "cidade"=>"Terra Rica",
    "estado"=>"PR"
);

setcookie("login", json_encode($data), time() + 3600);

echo "ok";