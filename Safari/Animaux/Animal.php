<?php

namespace Safari\Animaux;

class Animal
{
    protected string $nom;
    protected float $poids;
    protected bool $estMalade = false;

    public function __construct(string $nom, float $poids)
    {
        $this->nom = $nom;
        $this->poids = $poids;
    }

    public function manger()
    {
        echo "L'animal mange.<br>";
    }

    public function seSoigner()
    {
        $this->estMalade = false;
        echo "{$this->nom} est soigné. <br>";
    }

    public function crier()
    {
        echo "L'animal émet un son. <br>";
    }

    public function getNom()
    {
        return $this->nom;
    }
}
