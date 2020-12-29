<?php


namespace App\UseCase\CreerGenre;


class CreerGenreRequest
{
    public string $libelle;

    /**
     * CreerGenreRequest constructor.
     * @param string $libelle
     */
    public function __construct($libelle)
    {
        $this->libelle = $libelle;
    }


}