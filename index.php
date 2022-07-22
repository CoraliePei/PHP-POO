<?php

require_once './classes/Voiture.php';

$voiture1 = new Voiture("verte");
var_dump($voiture1);
// $voiture1->couleur = "rouge";
// $voiture1->couleur = "vert";
// $voiture1->marque = "BMW";
$voiture1->setMarque("BMW");
echo $voiture1->getMarque();



$voiture2 = new Voiture("violette");
// $voiture2->couleur = "jaune";
// $voiture2->marque = "Mercedes";
$voiture2->demarrer();

// Pour une fonction qui return et est 'public'
$couleurVoiture2 = $voiture2->afficherCouleur();
echo $couleurVoiture2;

echo "<pre>";
var_dump($voiture2);
