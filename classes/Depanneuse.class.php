<?php

class Depanneuse extends Materiel implements Inventoriable
{
    private string $identifiant;


    public function __construct(string $identifiant, bool $disponible)
    {
        parent::__construct($disponible);
        $this->identifiant = $identifiant;
    }

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
        return "Dépanneuse ID: " . $this->identifiant . ", " . parent::__tostring();
    }
}