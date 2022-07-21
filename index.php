<?php

require_once './classes/Voiture.php';

$voiture1 = new Voiture();
// $voiture1->couleur = "rouge";
// $voiture1->couleur = "vert";
// $voiture1->marque = "BMW";
$voiture1->setMarque("BMW");
echo $voiture1->getMarque();
echo "<br>";
$voiture1->setColor("pourpre");
echo $voiture1->getColor();



$voiture2 = new Voiture();
// $voiture2->couleur = "jaune";
// $voiture2->marque = "Mercedes";
$voiture2->demarrer();

// Pour une fonction return et public
$couleurVoiture2 = $voiture2->afficherCouleur();
echo $couleurVoiture2;

echo "<pre>";
var_dump($voiture1);
var_dump($voiture2);
