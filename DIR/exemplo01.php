<?php


//código para criar/excluir a pasta images 
$name = "images";

if (!is_dir($name)){
    mkdir($name);
    echo "Diretório $name criado com sucesso!";
}else{
    rmdir($name);
    echo "O diretório $name foi removido";
}