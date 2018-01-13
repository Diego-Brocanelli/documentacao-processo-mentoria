<?php

class Animal {

    public $especie;

    public function barulhinho($especie) {
       switch ($especie) {
            case "Gato":
               return "MIAAAAU";
               break;
            case "Cachorro":
                return "Au au";
            case "Galinha":
                return "Cócócócó";
            case "Veado":
                return "Salve o tricolor paulista...";
            default:
               return "Animal não encontrado.";
               break;
       }
    }
}

$leao = new Animal();
print($leao->barulhinho("Veado"));