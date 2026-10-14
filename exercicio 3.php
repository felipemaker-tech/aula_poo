<?php

class ContaBancaria{
    public string $Titular;
    public float $saldo;

    public function __construct($titular, $saldo = 0.0){
        $this->Titular = $titular;
        $this->saldo = $saldo;
    }

    public function depositar($valor){
        $this->saldo += $valor;
    }

    public function sacar($valor){
        $this->saldo -= $valor;
    }

    public function exibirSaldo(){
        echo "<h2>Titular: " . $this->Titular . " - Saldo atual: R$ " . number_format($this->saldo, 2, ',', '.') . "<br></h2>";
    }
}

$conta1 = new ContaBancaria("Lucio", 100.0);
$conta1->depositar(100.0);
$conta1->sacar(50.0);
$conta1->exibirSaldo();