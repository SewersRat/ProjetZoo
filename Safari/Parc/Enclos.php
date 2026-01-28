<?php

namespace Safari\Parc;

use Safari\Animaux\Animal;

class Enclos
{
    private array $animaux = [];
    private int $capaciteMax;
    private string $proprete = "Propre";

    public function __construct(int $capaciteMax)
    {
        $this->capaciteMax = $capaciteMax;
    }

    public function ajouterAnimal(Animal $nouvelAnimal)
    {
        if (count($this->animaux) >= $this->capaciteMax) {
            echo "Erreur : Enclos plein ! <br>";
            return;
        }

        $this->animaux[] = $nouvelAnimal;
        echo "Bienvenue à " . $nouvelAnimal->getNom() . " ! <br>";
    }

    public function entretenir()
    {
        echo "Nettoyage en cours... <br>";
        $this->proprete = "Propre";
    }

    public function visiteGuidee()
    {
        echo "Voici les animaux de l'enclos : <br>";

        foreach ($this->animaux as $animal) {
            $animal->crier();
        }
    }
}
