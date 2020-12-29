<?php

namespace App\Repository;

use App\Entites\Genre;
use Doctrine\Common\Collections\ArrayCollection;

class InMemoryGenreRepository implements GenreRepositoryInterface
{
    private ArrayCollection $genres;

    /**
     * InMemoryGenreRepository constructor.
     */
    public function __construct()
    {
        $this->genres = new ArrayCollection();
    }

    /**
     * @param Genre $genre
     */
    public function add(Genre $genre)
    {
        $reflectionClass = new \ReflectionClass(Genre::class);
        try {
            $property = $reflectionClass->getProperty('id');
            $property->setAccessible(true);
            $property->setValue($genre,random_int(1,10000));
            $this->genres->add($genre);
        } catch (\ReflectionException $e) {
            dump("Problème de reflexion");
        }
        catch (\Exception $e) {
        }
    }
}