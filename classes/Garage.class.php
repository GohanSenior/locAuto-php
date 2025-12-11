<?php

class Garage implements Inventoriable
{

    // Propriétés

    private int $surface;
    private int $capacite;
    private int $niveaux;
    private string $identifiant;

    // Constructeur

    /**
     * Constructeur
     * @param int $surface
     * @param int $capacite
     * @param int $niveaux
     * @param string $identifiant
     */
    public function __construct(int $surface, int $capacite, int $niveaux, string $identifiant)
    {
        $this->surface = $surface;
        $this->capacite = $capacite;
        $this->niveaux = $niveaux;
        $this->identifiant = $identifiant;
    }

    // Méthodes

    public function getIdentifiant(): string
    {
        return $this->identifiant;
    }

    public function getInfosCompletes(): string
    {
        return $this->__tostring();
    }

    public function __tostring(): string
    {
        return "Surface: " . $this->surface . " m², Capacité: " . $this->capacite . " véhicules, Niveaux: " . $this->niveaux . ", Identifiant: " . $this->identifiant;
    }
}