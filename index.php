<?php

// Fonction permettant le chargement automatique des classes. Elle ne chargera que la bonne classe appelée grâce en écrivant new ...()
spl_autoload_register(function ($className) {
    require_once './classes/' . $className . '.php';
});


$voitureBerline = new Berline();
var_dump($voitureBerline);

$voiture1 = new Voiture();
$voiture1->setMarque("BMW");
$voiture1->setVitesse(50);
$voiture1->setMasse(1200);
echo $voiture1->calculerEnergieCinetique() . ' Joules <br>';
$voiture1->setVitesse(60);
echo $voiture1->calculerEnergieCinetique() . ' Joules <br>';

echo '<pre>';
var_dump($voiture1);
echo '<hr>';

// $vehicule = new Vehicule();
// var_dump($vehicule);




// $voiture1->couleur = "rouge";
// $voiture1->couleur = "vert";
// $voiture1->marque = "BMW";
// $voiture1->setMarque("BMW");
// echo $voiture1->getMarque();



// $voiture2 = new Voiture("violette");
// $voiture2->couleur = "jaune";
// $voiture2->marque = "Mercedes";
// $voiture2->demarrer();

// Pour une fonction qui return et est 'public'
// $couleurVoiture2 = $voiture2->afficherCouleur();
// echo $couleurVoiture2;
