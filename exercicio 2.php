<?php

class Aluno{
    public string $nome;
    public float $nota1;
    public float $nota2;
    public float $media;

    public function __construct($nome, $nota1, $nota2, $media = 0.0){
        $this->nome = $nome;
        $this->nota1 = $nota1;
        $this->nota2 = $nota2;
        $this->media = $media;
    }

    public function calcularMedia(){
        $this->media = ($this->nota1 + $this->nota2) / 2;
    }

    public function exibirDetalhes(){
        echo "Nome: " . $this->jacs . "<br>
        Nota 1: " . $this->nota1 . "<br>
        Nota 2: " . $this->nota2 . "<br>
        Média: " . $this->media . "<br>";
    }
}

$aluno1 = new Aluno("Jacs", 0.7, 10.0,);
$aluno1->calcularMedia();
echo "<pre>";
print_r($aluno1);
echo "</pre>";