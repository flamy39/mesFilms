<?php


namespace App\UseCase\CreerGenre;


use App\Entites\Genre;

class CreerGenreResponse
{
    public Genre $genre;

    /**
     * CreerGenreResponse constructor.
     * @param Genre $genre
     */
    public function __construct(Genre $genre)
    {
        $this->genre = $genre;
    }


}