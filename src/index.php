<?php

require_once 'autoload.php';

use Cliente\CadastroCliente;


$cad = new CadastroCliente();


$cad->setNome("Alex");
$cad->setEmail("teste@gmail.com");
$cad->setSenha("123456");
echo $cad;

$cad->registrarVenda();
