<?php


namespace App\Entites;

class Genre
{
    private string $libelle;
    private int $id;

    /**
     * Genre constructor.
     * @param string $libelle
     */
    public function __construct(string $libelle)
    {
        $this->libelle = $libelle;
    }

    /**
     * @return string
     */
    public function getLibelle()
    {
        return $this->libelle;
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }
}