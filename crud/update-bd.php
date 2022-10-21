<?php

//CONEXÃO COM PDO
$con = new PDO(
    "mysql:dbname=dbteste;host=172.17.0.2","root","root"
);

// INSERT DE BANCO
$stmt = $con->prepare("UPDATE tb_usuarios SET des_login = :LOGIN, des_senha = :PASSWORD
 WHERE idusuario = :ID");

$login = "joao";
$password = "mudar@123";
$id = 1;

$stmt->bindParam(":ID", $id);
$stmt->bindParam(":LOGIN", $login);
$stmt->bindParam(":PASSWORD", $password);

$stmt->execute();

echo "Usuário $login alterado com sucesso";
