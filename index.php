<?php

require_once __DIR__ . '/vendor/autoload.php';

use Cliente\CadastroCliente;

$cad = new CadastroCliente();

$cad->setNome("Alex");
$cad->setEmail("teste@gmail.com");
$cad->setSenha("123456");
echo $cad;

$cad->registrarVenda();