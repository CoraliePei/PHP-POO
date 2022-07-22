<?php

// protected : les classes qui en hériteront pourront lire la propriété, contrairement au private qui ne peut être lu dans aucun des deux

class Vehicule
{
    protected int $masse;
    protected float $vitesse; // utiliser le système métrique international
    protected string $marque;
    protected string $couleur;
    protected array $dimensions;

    public function calculerEnergieCinetique(): float
    {
        $masseVehicule = $this->masse;
        $vitesseVehicule = $this->vitesse;
        $energieCinetique = 0.5 * ($masseVehicule * ($vitesseVehicule ** 2)); // ** = puissance
        return $energieCinetique;
    }

    public function getMasse(): string
    {
        return $this->masse;
    }

    public function setMasse(string $masse): void
    {
        $this->masse = $masse;
    }

    public function getVitesse(): float
    {
        return $this->vitesse;
    }

    public function setVitesse(string $vitesse): void
    {
        $this->vitesse = $vitesse;
    }

    public function getMarque(): string
    {
        return $this->marque;
    }

    public function setMarque(string $marque): void
    {
        $this->marque = $marque;
    }

    public function getCouleur(): string
    {
        return $this->couleur;
    }

    public function setCouleur(string $couleur): void
    {
        $this->couleur = $couleur;
    }

    public function getDimensions(): array
    {
        return $this->dimensions;
    }

    public function setDimensions(string $dimensions): void
    {
        $this->dimensions = $dimensions;
    }

    public function getModePropulsion(): string
    {
        return $this->modePropulsion;
    }

    public function setModePropulsion(string $modePropulsion): void
    {
        $this->modePropulsion = $modePropulsion;
    }
}
