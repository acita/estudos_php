<?php

setlocale(LC_ALL, "pt_BR", "pt_BR.utf-8", "portuguese");

echo strftime("%A %B");

echo "<br>";

echo date("D/M/Y");

echo "<br>";

echo time();

echo "<br>";

$ts = strtotime("2001-09-11");
echo date("l, d/m/Y", $ts);

echo "<br>";
echo "<br>";

$dt = new DateTime();
$diasASomar = 1;
$periodo = new DateInterval("P" . $diasASomar . "D");


echo $dt->format("d/m/Y H:i:s");

echo "<br>";

$dt->add($periodo);

echo $dt->format("d/m/Y H:i:s");