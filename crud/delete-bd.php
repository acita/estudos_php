<?php

//CONEXÃO COM PDO
$con = new PDO(
    "mysql:dbname=dbteste;host=172.17.0.2","root","root"
);

// INSERT DE BANCO
$stmt = $con->prepare("DELETE FROM tb_usuarios WHERE idusuario = :ID");

$id = 5;

$stmt->bindParam(":ID", $id);

$stmt->execute();

echo "Usuário $login deletado com sucesso";
