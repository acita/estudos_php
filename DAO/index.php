<?php

require_once("config.php");
echo "agoravai.php";

echo "<br/>";
$user = new Usuario();
// $user->loadById(3);

$user->loadAll();
