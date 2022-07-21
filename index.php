<?php

require_once './classes/Voiture.php';

$voiture1 = new Voiture();
$voiture1->couleur = "rouge";
$voiture1->marque = "BMW";
$voiture1->couleur = "vert";

$voiture2 = new Voiture();
$voiture1->couleur = "jaune";
$voiture1->marque = "Mercedes";
$voiture1->couleur = "vert";


echo "<pre>";
var_dump($voiture1);
