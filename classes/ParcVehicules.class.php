<?php

class ParcVehicules
{
    // Propriétés

    private static array $parc = [];

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

    public static function searchVehiculeById(string $identifiant)
    {
        foreach (self::$parc as $vehicule) {
            if ($vehicule->getIdentifiant() === $identifiant) {
                echo "Véhicule trouvé: "; 
                return $vehicule;
            }
        }
        throw new ParcVehiculeException("Véhicule non trouvé");
    }

    public static function searchVehicule(Vehicule $vehicule)
    {
        return self::searchVehiculeById($vehicule->getIdentifiant());
    }

    public static function deleteVehiculeById(string $identifiant)
    {
        foreach (self::$parc as $index => $vehicule) {
            if ($vehicule->getIdentifiant() === $identifiant) {
                unset(self::$parc[$index]);
                echo "Véhicule avec l'identifiant $identifiant supprimé du parc.\n";
                return true;
            }
        }
        throw new ParcVehiculeException("Véhicule non trouvé pour suppression");
    }

    public static function deleteVehicule(Vehicule $vehicule)
    {
        return self::deleteVehiculeById($vehicule->getIdentifiant());
    }
}