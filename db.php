<?php 

$movies_data = [
    [   
        'title' => 'film 1',
        'trama' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod ',
        'genere' => ['Genere 1', 'Genere 2','Genere 3'],
        'published_year' => 1990,
        'running_time' => 90,
    ],
    [
        'title' => 'film 2',
        'trama' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod ',
        'genere' => ['Genere 4', 'Genere 5','Genere 6'],
        'published_year' => 2000,
        'running_time' => 110,
        ],
    ];

$serie_list_data = [
    [
        'title' => 'Serie 1',
        'trama' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod ',
        'genere' => ['Genere 1', 'Genere 2'],
        'aired_from_year' => 1990,
        'aired_to_year' => 1995,
        'number_of_episodes' => 50,
        'number_of_seasons' => 5,
    ],
    [
        'title' => 'Serie 1',
        'trama' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod ',
        'genere' => ['Genere 3'],
        'aired_from_year' => 2000,
        'aired_to_year' => 2008,
        'number_of_episodes' => 80,
        'number_of_seasons' => 8,
    ],
    ];






require_once __DIR__ . '/Models/Production.php';
require_once __DIR__ . '/Models/Genre.php';
require_once __DIR__ . '/Models/Movie.php';
require_once __DIR__ . '/Models/TvSerie.php';


foreach($movies_data as $movie_data) {
    $generi = [];
    foreach($movie_data['genere'] as $genere_data) {
        $generi[] = new Genre($genere_data);
        
    }
    
    $movies[] = new Movie($movie_data['title'], $movie_data['trama'], $generi, $movie_data['published_year'],$movie_data['running_time']);
}

foreach($serie_list_data as $serie_data) {
    $generi_serie = [];
    foreach($serie_data['genere'] as $genere_data) {
        $generi_serie[] = new Genre($genere_data);
        
    }
    
    $serieList[] = new TvSerie(
                    $serie_data['title'], 
                    $serie_data['trama'], 
                    $generi_serie, 
                    $serie_data['aired_from_year'],
                    $serie_data['aired_to_year'],
                    $serie_data['number_of_episodes'],
                    $serie_data['number_of_seasons'],
                );
                
}
// var_dump($serie_data['genere']);

foreach($generi_serie as $gen) {
    var_dump($gen);
}


