<?php 

require_once __DIR__ . '/Models/Genre.php';
require_once __DIR__ . '/Models/Movie.php';

// $new_genre = new Genre(
//     'horror'
// );


// $new_movie = new Movie(
//     'La vita è bella',
//     125,
//     'horror',
// );
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

// var_dump($film);