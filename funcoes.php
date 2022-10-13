<?php

function depositar(array $conta, float $valorADepositar): array
{
    if ($valorADepositar <= 0)
        $conta['mensagem'] = "Você precisa depositar um valor maior que zero";

    $conta['saldo'] += $valorADepositar;
    return $conta;
}

function sacar(array $conta, float $valorASacar): array
{
    if ($valorASacar > $conta['saldo'] || $valorASacar <= 0) {
        $conta['mensagem'] = "Erro: Você tentou sacar R$ $valorASacar e não é possivel realizar a operação desta forma";
        } else {
        $conta['saldo'] -= $valorASacar;
    }
    return $conta;
}

function titularComLetrasMaiusculas (array &$conta)
{
    $conta['titular'] = mb_strtoupper($conta['titular']);
}

function exibeConta(array $conta)
{

    echo "<li>Titular: $conta[titular] . Saldo: {$conta['saldo']} </li>";

}