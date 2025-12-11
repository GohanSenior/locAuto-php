<?php

abstract class Vehicule implements Inventoriable
{

    // Propriétés

    protected string $marque;
    protected string $modele;
    protected string $identifiant;

    // Constructeur

    /**
     * Constructeur
     * @param mixed $marque
     * @param mixed $modele
     * @param mixed $identifiant
     */
    public function __construct($marque, $modele, $identifiant)
    {
        $this->marque = $marque;
        $this->modele = $modele;
        $this->identifiant = $identifiant;
    }

    // Méthode abstraite

    /**
     * Planifie une révision
     * @return void
     */
    abstract public function planifierRevision();

    // Autres méthodes

    public function getIdentifiant(): string
    {
        return $this->identifiant;
    }

    public function getInfosCompletes(): string
    {
        return $this->__tostring();
    }

    /**
     * Méthode pour afficher le véhicule
     */
    public function __tostring()
    {
        return "Marque: " . $this->marque . ", Modèle: " . $this->modele . ", Identifiant: " . $this->identifiant;
    }

}