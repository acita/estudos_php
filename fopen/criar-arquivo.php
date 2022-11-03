<?php

require_once("config.php");

//recupera dados do banco
$sql = new Sql();

$usuarios = $sql->select("SELECT * FROM tb_usuarios ORDER BY id_usuario");

// prepara e cria o cabeçalho do arquivo
$headers = array();

$file = fopen("log.txt", "a+");


foreach ($usuarios[0] as $key => $usuario){
    array_push($headers, ucfirst($key));
}

$file = fopen("usuarios.csv", "w+");
fwrite($file, implode(",", $headers) . "\r\n");


// prepara e cria os dados do arquivo
foreach($usuarios as $row){
    $data = array();
    foreach ($row as $key => $value){
        array_push($data, $value);
    }

    fwrite($file, implode(",", $data) . "\r\n");
}

fclose($file);