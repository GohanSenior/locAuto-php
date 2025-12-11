<?php

class Familiale extends Vehicule
{

    // Propriétés

    private int $nbPassagersMax;

    // Constructeur

    /**
     * Constructeur
     * @param string $marque
     * @param string $modele
     * @param string $identifiant
     * @param int $nbPassagersMax
     */
    public function __construct(string $marque, string $modele, string $identifiant, int $nbPassagersMax)
    {
        parent::__construct($marque, $modele, $identifiant);
        $this->nbPassagersMax = $nbPassagersMax;
    }

    // Méthodes

    /**
     * Planifie la révision
     * @return void
     */
    public function planifierRevision()
    {
        echo "Révision planifiée pour la familiale " . $this->modele . ".\n";
    }

    /**
     * Méthode pour afficher la familiale
     * @return string
     */
    public function __tostring()
    {
        return parent::__tostring() . ", Nombre de passagers max: " . $this->nbPassagersMax;
    }
}