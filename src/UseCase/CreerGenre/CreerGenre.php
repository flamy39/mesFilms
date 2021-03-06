<?php
namespace App\UseCase\CreerGenre;


use App\Entites\Genre;
use App\Repository\GenreRepositoryInterface;
use Assert\LazyAssertionException;
use function Assert\lazy;

class CreerGenre
{
    private GenreRepositoryInterface $repository;

    /**
     * CreerGenre constructor.
     * @param GenreRepositoryInterface $repository
     */
    public function __construct(GenreRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    /**
     * @param CreerGenreRequest $requete
     * @throws \Exception
     */
    public function execute(CreerGenreRequest $requete) : CreerGenreResponse {
        $genre = new Genre($requete->libelle);
        try {
            $this->validation($genre);
            $genre = $this->repository->add($genre);
            return new CreerGenreResponse($genre);
        } catch (LazyAssertionException $e){
            throw new \Exception($e->getMessage());
        }
    }

    private function validation(Genre $genre) {
        lazy()
            ->that($genre->getLibelle())->notBlank("Le libellé ne peux pas être vide")
                ->minLength(2,"Le libellé doit faire au moins 2 caractères")
            ->verifyNow();
    }
}