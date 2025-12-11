<?php

class Materiel
{
    protected bool $disponible;

    public function __construct(bool $disponible)
    {
        $this->disponible = $disponible;
    }

    public function isDisponible(): bool
    {
        return $this->disponible;
    }

    public function setDisponible(bool $disponible): void
    {
        $this->disponible = $disponible;
    }

    public function __tostring(): string
    {
        return "Disponible: " . ($this->disponible ? "Oui" : "Non");
    }
}