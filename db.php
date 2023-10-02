<?php 

require_once __DIR__ . '/Models/Production.php';
require_once __DIR__ . '/Models/Genre.php';
require_once __DIR__ . '/Models/Movie.php';
require_once __DIR__ . '/Models/TvSerie.php';

$genere = new Genre(['fantasy']);
$prodotto = new Production('titolo','trama', $genere );
$film = new Movie ('titolo Film', 'Trama Film', $genere, 1990, 95);
$serieTv = new TvSerie('titolo Serie tv', 'Trama Serie tv', $genere, 2000, 2005, 56, 5);

var_dump($serieTv);





// $first_gen = new Genre(['Azione', 'Biografico']);

// $first_movie = new Movie(
//     'American Sniper',
//     134,
//     'Clint Eastwood',
//     $first_gen,
// );

// $second_movie = new Movie(
//     'The Batman',
//     175,
//     'Matt Reeves',
//     new Genre(['Fantasy', 'Noir', 'Azione']),
// );



// $movieList = [
//     $first_movie,
//     $second_movie
// ];
