<?php

class ContaBancaria
{
    private $saldo;

    public function __construct($saldoInicial)
    {
        $this->saldo = $saldoInicial;
    }

    public function depositar($valor)
    {
        return $this->saldo += $valor;
    }

    public function getSaldo()
    {
        return $this->saldo;
    }
}

$contaSantander = new ContaBancaria(15000);
$contaSantander->depositar(500);

echo $contaSantander->getSaldo();