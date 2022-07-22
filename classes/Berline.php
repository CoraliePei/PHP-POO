<?php

final class Berline extends Voiture
{
    private $nbrPortes = 5;

    public function getNbrPortes(): int
    {
        return $this->nbrPortes;
    }

    public function setNbrPortes(string $nbrPortes)
    {
        $this->nbrPortes = $nbrPortes;
    }
}
