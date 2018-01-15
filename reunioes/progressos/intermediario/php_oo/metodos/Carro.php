<?php

    class Carro {

        private $modelo;
        private $motor;
        private $ano;
        
        public function __construct($a, $b, $c){
            $this->modelo = $a;
            $this->motor = $b;
            $this->ano = $c;
        }

        public function __toString(){
            return $this->modelo . ", " . $this->motor . ", " . $this->ano;
        }
        
    }
    $celta = new Carro("Celta", "1.0", "2010");
    print($celta);

