<?php

namespace Safari\Animaux;

class Lion extends Animal
{
    private int $niveauAgressivite;

    public function __construct(string $nom, float $poids, int $niveauAgressivite)
    {
        parent::__construct($nom, $poids);
        $this->niveauAgressivite = $niveauAgressivite;
    }

    public function crier()
    {
        echo "ROAAAAR ! {$this->nom} rugit férocement. <br>";
    }

    public function chasser()
    {
        echo "{$this->nom} part en chasse. <br>";
    }
}
