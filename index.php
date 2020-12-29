<?php

require_once __DIR__.'/vendor/autoload.php';

use App\Repository\InMemoryGenreRepository;
use App\UseCase\CreerGenre\CreerGenre;
use App\UseCase\CreerGenre\CreerGenreRequest;

$repository = new InMemoryGenreRepository();
$useCase = new CreerGenre($repository);

$requete = new CreerGenreRequest("Action");
try {
    $useCase->execute($requete);
} catch (Exception $e) {
    dump($e->getMessage());
}
$requete = new CreerGenreRequest("");

try {
    $useCase->execute($requete);
} catch (Exception $e) {
    dump($e->getMessage());
}

