<?php
spl_autoload_register(function ($classe) {
    include "classes/" . $classe . ".class.php";
});

$citadine = new Citadine("Peugeot", "208", "CIT123", 350);
$familiale = new Familiale("Renault", "Scénic", "FAM456", 7);
$utilitaire = new Utilitaire("Ford", "Transit", "UTI789", 1200);
// echo $citadine . "\n";
// echo $citadine->planifierRevision();
// echo $familiale . "\n";
// echo $familiale->planifierRevision();
// echo $utilitaire . "\n";
// echo $utilitaire->planifierRevision();
ParcVehicules::enregistrer($citadine);
ParcVehicules::enregistrer($familiale);
ParcVehicules::enregistrer($utilitaire);
ParcVehicules::getParc();