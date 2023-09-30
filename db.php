<?php 

require_once __DIR__ . '/Models/Genre.php';
require_once __DIR__ . '/Models/Movie.php';


$first_gen = new Genre(['Azione', 'Biografico']);

$first_movie = new Movie(
    'American Sniper',
    134,
    'Clint Eastwood',
    $first_gen,
);

$second_movie = new Movie(
    'The Batman',
    175,
    'Matt Reeves',
    new Genre(['Fantasy', 'Noir', 'Azione']),
);


// metto tutti gli oggetti in un array in modo da poterli stampare
$movieList = [
    $first_movie,
    $second_movie
];
