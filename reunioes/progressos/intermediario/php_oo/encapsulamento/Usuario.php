<?php
    class Usuario {
        public $nome = "Julio";
        protected $idade = 25;
        private $senha = "123456";

        public function mostrarDados(){
            echo $this->nome . ", " .  $this->idade . ", " . $this->senha;
        }
    }
   


    class Editor extends Usuario {
        // Aqui não vai enxergar A senha
        public function setNome($name){
            $this->nome = $name;
        }
    }

    $Editor = new Editor();
    $Editor->setNome("JULHAO");
    echo $Editor->mostrarDados();
