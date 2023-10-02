<?php
/**
 * ### Class Production
 * Definisce i prodotti
 * @author Aniello Marco Di Ruocco
 */

 class Production
 {
    public $title;
    public $trama;   
    public $genere;

    public function __construct(
        string $title,
        string $trama,
        array $genere,
    ) {
        $this->title = $title;
        $this->trama = $trama;
        $this->genere = $genere;
    }
    // Prendo i dettagli della classe
    // public function getDetails() {
    //    return "";
    // }
 }