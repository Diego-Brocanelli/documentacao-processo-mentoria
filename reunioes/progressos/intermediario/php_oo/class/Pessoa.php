<?php
class Pessoa {
    // declaração de propriedade
    public $nome;
  
    // declaração de método
    public function falar() {
        return "O meu nome é {$this->nome}";
    }

}

$julio = new Pessoa();
$julio->nome = "Julio";
echo $julio->falar();

