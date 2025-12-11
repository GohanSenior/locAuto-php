<?php

class Citadine extends Vehicule
{
    // Propriétés
    private int $autonomie;

    // Constructeur

    /**
     * Constructeur
     * @param string $marque
     * @param string $modele
     * @param string $identifiant
     * @param int $autonomie
     */
    public function __construct(string $marque, string $modele, string $identifiant, int $autonomie)
    {
        parent::__construct($marque, $modele, $identifiant);
        $this->autonomie = $autonomie;
    }

    // Méthodes

    /**
     * Planifie la révision
     * @return void
     */
    public function planifierRevision()
    {
        echo "Révision planifiée pour la citadine " . $this->modele . ".\n";
    }

    /**
     * Méthode pour afficher la citadine
     * @return string
     */
    public function __tostring()
    {
        return parent::__tostring() . ", Autonomie: " . $this->autonomie . " km";
    }
}