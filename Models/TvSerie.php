<?php
/**
 * ### Class TvSerie
 * Definisce le serie tv
 * @author Aniello Marco Di Ruocco
 */

 class TvSerie extends Production
 {
    // anno di messa in onda del primo episodio
    public $aired_from_year;
        // anno di messa in onda dell'ultimo episodio
    public $aired_to_year;
        // numero di episodi
    public $number_of_episodes;
        // numero di stagioni
    public $number_of_seasons;

    public function __construct(
        string $title,
        string $trama,
        array $genere,

        //attributi unici della classe
       
        int $aired_from_year,       
        int $aired_to_year,       
        int $number_of_episodes,       
        int $number_of_seasons,
    ) {
        parent::__construct($title, $trama, $genere);
        $this->aired_from_year = $aired_from_year;
        $this->aired_to_year = $aired_to_year;
        $this->number_of_episodes = $number_of_episodes;
        $this->number_of_seasons = $number_of_seasons;
    }
    // Prendo i dettagli della classe
    public function getDetails() {
       return " <h2><?=  $this->title ?></h2>
       ";
    }
 }