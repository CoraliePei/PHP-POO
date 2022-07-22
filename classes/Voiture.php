<?php

// Attention : le typage est du PHP8

// Encapsulation : public, protected, private

class Voiture
{
    // **** Propriétés ****
    private string $marque;
    private string $couleur;
    public int $nbrRoues = 4; // Valeur par défaut

    // **** Méthodes ****



    public function demarrer()
    {
        echo "<p>La voiture démarre</p>";
    }

    public function afficherCouleur(): string
    {
        return "<p>La voiture est de couleur $this->couleur </p>";
    }

    // Récupérer la marque de la voiture private
    public function getMarque(): string
    {
        return $this->marque;
    }

    // Définir la marque de la voiture private
    public function setMarque($marque): void
    {
        $this->marque = $marque;
    }

    public function getColor(): string
    {
        return $this->couleur;
    }

    public function setColor($color): void
    {
        $this->couleur = $color;
    }

    public function __construct(string $couleur)
    {
        $this->couleur = $couleur;
    }

    public function __destruct()
    {
        echo "Destroyed!";
    }
}
