<?php

// Attention : le typage est du PHP8

class Voiture {
    // Propriétés
    public string $marque;
    public string $couleur;
    public int $nbrRoues = 4; // Valeur par défaut

    // Méthodes
    public function demarrer() {
        echo "<p>La voiture démarre</p>";
    }
}
