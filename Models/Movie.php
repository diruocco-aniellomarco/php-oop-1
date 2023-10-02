<?php
/**
 * ### Class Movie
 * Definisce dei film
 * @author Aniello Marco Di Ruocco
 */

 class Movie extends Production
 {
    
    // anno di pubblicazione
    public $published_year;
    // durata in minuti
    public $running_time;

    public function __construct(
        string $title,
        string $trama,
        array $genere,
        //attributi unici della classe
        int $published_year,
        int $running_time,
    ) {
        parent::__construct($title, $trama, $genere);
        $this->published_year = $published_year;
        $this->running_time = $running_time;
    }
    
    public function get_Details() {
        return "
                
                ";
    }
    
 }




?>