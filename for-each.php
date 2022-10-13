<?php

//$alunos = ['alex', 'claudio', 'fernanda', 'amanda'];

//print_r($alunos[3]);

$conta1 = [
    'titular' => 'Vinicius',
    'saldo' => 1200
];

$conta2 = [
    'titular' => 'Alex',
    'saldo' => 12000
];

$conta3 = [
    'titular' => 'Ana',
    'saldo' => 8000
];

$contasCorrentes = [
    12345616 => $conta1,
    21312332 => $conta2,
    45621626 => $conta3
];

/*for($i = 0; $i < count($contasCorrentes); $i++){
    echo "O saldo de " . $contasCorrentes[$i]['titular'] . " é de " . $contasCorrentes[$i]['saldo'] . PHP_EOL;
}*/

foreach ($contasCorrentes as $key => $conta){
    echo $key . PHP_EOL;
}
