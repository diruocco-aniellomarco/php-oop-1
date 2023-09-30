<?php
/**
 * ### Class Movie
 * Definisce dei film
 * @author Aniello Marco Di Ruocco
 */

 class Movie
 {
    public $titlemovie;
    public $minutesmovie;   
    public $regia;
    public $hours;
    public $min;
    public $genere;

    public function __construct(
        string $titlemovie,
        int $minutesmovie,
        string $regia,
        Genre $genere,
    ) {
        $this->titlemovie = $titlemovie;
        $this->minutesmovie = $minutesmovie;
        $this->regia = $regia;
        //trasformo i minuti del film in "ore e minuti"
        $this->hours = round($this->minutesmovie / 60);
        $this->min = $this->minutesmovie % 60;
        $this->genere = $genere;
    }
    // avendo le ore e i minuti d durata del film, li unisco e li stampo insieme
    public function transformIntoHours() {
       return "$this->hours ore $this->min minuti";
    }
 }




?>