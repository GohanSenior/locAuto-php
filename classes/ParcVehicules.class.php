<?php

class ParcVehicules
{
    // Propriétés

    private static $parc;

    // Méthodes

    /**
     * Enregistre un nouveau véhicule
     * @param Vehicule $vehicule
     * @return void
     */
    public static function enregistrer(Inventoriable $inventoriable)
    {
        self::$parc[] = $inventoriable;
    }

    public static function getParc()
    {
        foreach (self::$parc as $vehicule) {
            echo get_class($vehicule) . ": " . $vehicule->getInfosCompletes() . ".\n";
        }
    }
}