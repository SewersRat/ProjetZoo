<?php

spl_autoload_register(function ($class) {
    $class = str_replace('\\', DIRECTORY_SEPARATOR, $class);
    require_once __DIR__ . '/' . $class . '.php';
});

use Safari\Parc\Enclos;
use Safari\Animaux\Lion;
use Safari\Animaux\Perroquet;

$enclos = new Enclos(3);

$lion = new Lion("Simba", 150, 9);
$perroquet1 = new Perroquet("Rio", 2);
$perroquet2 = new Perroquet("Jago", 3);
$perroquet3 = new Perroquet("Extra", 1);

$enclos->ajouterAnimal($lion);
$enclos->ajouterAnimal($perroquet1);
$enclos->ajouterAnimal($perroquet2);
$enclos->ajouterAnimal($perroquet3);
$enclos->visiteGuidee();
$lion->seSoigner();

