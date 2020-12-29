<?php

namespace App\Repository;
use App\Entites\Genre;

interface GenreRepositoryInterface
{
    public function add(Genre $genre);
}