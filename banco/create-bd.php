<?php

//CONEXÃO COM PDO
$con = new PDO(
    "mysql:dbname=dbteste;host=172.17.0.2","root","root"
);

// INSERT DE BANCO
$stmt = $con->prepare("INSERT INTO tb_usuarios (des_login, des_senha) VALUES (:LOGIN, :PASSWORD)");

$login = "aSSa";
$password = "mudar@3";

$stmt->bindParam(":LOGIN", $login);
$stmt->bindParam(":PASSWORD", $password);

$stmt->execute();

echo "Usuário $login inserido com sucesso";

