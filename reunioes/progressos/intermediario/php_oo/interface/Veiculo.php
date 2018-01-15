<?php

interface Veiculo{
    public function acelerar($velocidade);
    public function frenar($velocidade);
    public function buzinar($barulho);
}

class Fusca{
    public function acelerar($velocidade){
        echo "Acelerando o carro na velocidade" . $velocidade . "km/h";
    }
    
    public function frenar($velocidade){
        echo "Frenando o carro em " . $velocidade . "km/h";
    }

    public function buzinar($barulho){
        echo "Som da buzina: " . $barulho;
    }
}

$fusca = new Fusca();
print $fusca->acelerar("100");
echo "</br>";
print $fusca->frenar("100");
echo "</br>";
print $fusca->buzinar("bipbippp");


?>