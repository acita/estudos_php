<?php

require_once 'funcoes.php';

$contasCorrentes = [
    '123.456.789-10' => [
        'titular' => 'Maria',
        'saldo' => 10000,
        'mensagem' => ''
    ],
    '123.456.689-11' => [
        'titular' => 'Alberto',
        'saldo' => 300,
        'mensagem'=> ''
    ],
    '123.256.789-12' => [
        'titular' => 'Vinicius',
        'saldo' => 100,
        'mensagem' => ''
    ]
];

$contasCorrentes['123.456.789-10'] = sacar(
    $contasCorrentes['123.456.789-10'],
    00
);

$contasCorrentes['123.456.689-11'] = sacar(
    $contasCorrentes['123.456.689-11'],
    100
);

$contasCorrentes['123.256.789-12'] = depositar(
    $contasCorrentes['123.256.789-12'],
    400
);


//titularComLetrasMaiusculas($contasCorrentes['123.456.789-10']);

//remover variável
// unset($contasCorrentes['123.456.689-11']);

/* foreach ($contasCorrentes as $cpf => $conta) {
    list('titular' => $titular, 'saldo' => $saldo) = $conta;
    exibeMensagem("$cpf $titular $saldo");
}*/

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contas correntes</title>
</head>
<body>
    
    <h1>Contas Correntes</h1>
    <dl>

        <?php foreach($contasCorrentes as $cpf => $conta) { ?> 

        <dt>
            <h3>
                <?= $conta['titular']; ?> - <?= $cpf; ?> 
            </h3>
        </dt>

        <dd>
            Saldo: <?= $conta['saldo']; ?>
        </dd>

        <dd>
            <?= $conta['mensagem']; }?>
        </dd>
    </dl>
</body>
</html>