<?php
    class Lutador{
        private $nome;
        private $modalidade;

        public function __construct($fighter, $modality){
            $this->nome = $fighter;
            $this->modalidade = $modality;
        }

        public function gritoDeGuerra($lutador){
            foreach ($lutador as $key) {
                if($key == "Julio"){
                    return  "</br> Grito de guerra: " . "birrrrllll";
                }else{
                    return "</br> Grito de guerra: " . "(voz fina) Aqui é Brasil!!!";
                }
           }
        }

        public function __toString(){
            return $this->nome . ", " . $this->modalidade;
        }

         public function __destruct(){
            echo "</br>" . "Luta finalizada";
        }
        
    }
    
    $fighterOne = new Lutador("Julio", "Jiu-jitsu");
    $fighterTwo = new Lutador("Anderson Silva", "Muay-thay, Jiu-jitsu, Karatê, Kung-fu, box");
    echo "Lutador 1: " . $fighterOne;
    echo "</br>";
    echo "Lutador 2: " . $fighterTwo;
    echo $fighterOne->gritoDeGuerra($fighterOne);
    echo "</br>";
    echo $fighterTwo->gritoDeGuerra($fighterTwo);