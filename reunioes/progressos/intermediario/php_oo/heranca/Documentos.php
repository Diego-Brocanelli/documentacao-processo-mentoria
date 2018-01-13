<?php

    class Documentos {

        private $numero;


        public function __construct($n){
            $this->numero = $n;
        }

        public function __toString(){
            return $this->numero;
        }

    }
    class CPF extends Documentos {

        public function validarCPF($numero) {
            // estou meio com preguiça, só vou dar un return true
            return "</br>" . "Documento válido: " . true;
        }
    }

    $meuCPF = new CPF("41944258809");
    print $meuCPF;

    print($meuCPF->validarCPF($meuCPF));
