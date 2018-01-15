<?php

abstract class Animais{
    public function mover(){
        return "Andar"; // valor default;
    }

    public function emitirSom(){
        return "Miauu"; // valor default;
    }
}

class Cachorro extends Animais{
    /*polimorfimos acontecendo... */
    public function emitirSom($animal){
        return "sou o " . $animal . " e faço au au";
    }
}

$scooby = new Cachorro();
echo $scooby->emitirSom("scooby");

echo "<hr></br>";

class Ave extends Animais{
    public function mover(){
        return "Voar e " . parent::mover();  //parent:: herda da classe pai
    }
}

$pombo = new Ave();
echo $pombo->mover();

?>