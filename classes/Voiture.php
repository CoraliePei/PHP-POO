<?php

// Attention : le typage est du PHP8

// Encapsulation : public, protected, private

// extends : est associé à la fonction qui load auto le fichier, permet de relier les deux
class Voiture extends Vehicule
{
    public int $nbrRoues = 4; // Valeur par défaut
    private string $typeCarrosserie;

    public function getTypeCarrosserie(): string
    {
        return $this->typeCarrosserie;
    }

    public function setTypeCarrosserie(string $typeCarrosserie): void
    {
        $this->typeCarrosserie = $typeCarrosserie;
    }


    // public function __construct(string $couleur)
    // {
    //     $this->couleur = $couleur;
    // }

    public function demarrer()
    {
        echo "<p>La voiture démarre</p>";
    }

    public function afficherCouleur(): string
    {
        return "<p>La voiture est de couleur $this->couleur </p>";
    }

    // public function __destruct()
    // {
    //     echo "Destroyed!";
    // }
}
