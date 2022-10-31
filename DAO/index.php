<?php

require_once("config.php");

//carrega um item por meio do id
// $user = new Usuario();
// $user->loadById(3);
// echo $user;


// carrega todos os itens 
// $lista = Usuario::loadAll();
// echo json_encode($lista);

// carrega itens por meio de uma string
$search = Usuario::search("ca");
echo json_encode($search);