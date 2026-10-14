<?php

class Livro{
    public string $titulo;
    public string $autor;
    public int $paginas;
    public string $anoPublicacao;

    public function __construct($titulo, $autor, $paginas, $anoPublicacao = "Desconhecido"){
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->paginas = $paginas;
        $this->anoPublicacao = $anoPublicacao;
    }

    public function exibirDetalhes(){
        echo "Título: " . $this->titulo . "<br>
        Autor: " . $this->autor . "<br>
        Páginas: " . $this->paginas . "<br>
        Ano de Publicação: " . $this->anoPublicacao . "<br>";
    }
}

$livro1 = new Livro("Jacs, as aventuras de Lucio", "Lucio", 60);
$livro1->exibirDetalhes();