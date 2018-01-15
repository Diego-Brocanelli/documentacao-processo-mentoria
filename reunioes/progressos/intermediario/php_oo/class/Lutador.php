<?php

class Lutador {

    private $nome;
    private $peso;
    private $altura;
    private $modalidade;

    public function getNome(){
        return $this->nome;
    }

    public function setNome($nome){
        $this->nome = $nome;
    }

    public function getPeso(){
        return $this->peso;
    }

    public function setPeso($peso){
        $this->peso = $peso;
    }

    public function getAltura(){
        return $this->altura;
    }
    public function setAltura($altura){
        $this->altura = $altura;
    }

    public function getModalidade(){
        return $this->modalidade;
    }

    public function setModalidade($modalidade){
        $this->modalidade = $modalidade;
    }

    public function exibir(){

        return array(
            "nome"=>$this->getNome(),
            "peso"=>$this->getPeso(),
            "altura"=>$this->getAltura(),
            "modalidade"=>$this->getModalidade()
        );

    }

}

$julio = new Lutador();
$julio->setNome("julio");
$julio->setPeso("73");
$julio->setAltura("1.82");
$julio->setModalidade("Jiu-jitsu");

print_r($julio->exibir());
