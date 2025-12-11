<?php

class Utilitaire extends Vehicule
{
    // Propriétés

    private int $chargeUtile;

    // Constructeur

    /**
     * Constructeur
     * @param string $marque
     * @param string $modele
     * @param string $identifiant
     * @param int $chargeUtile
     */
    public function __construct(string $marque, string $modele, string $identifiant, int $chargeUtile)
    {
        parent::__construct($marque, $modele, $identifiant);
        $this->chargeUtile = $chargeUtile;
    }

    // Méthodes

    /**
     * Planifie la révision
     * @return void
     */
    public function planifierRevision()
    {
        echo "Révision planifiée pour l'utilitaire " . $this->modele . ".\n";
    }

    /**
     * Méthode pour afficher l'utilitaire
     * @return string
     */
    public function __tostring()
    {
        return parent::__tostring() . ", Charge utile: " . $this->chargeUtile . " kg";
    }
}