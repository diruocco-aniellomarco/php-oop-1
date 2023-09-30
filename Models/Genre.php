<?php
/**
 * ### Class Genre
 * Definisce un genere
 * @author Aniello Marco Di Ruocco
 */

 class Genre
 {
    public $firstgen;

    public function __construct(
        array $firstgen,
    ) {
        $this->firstgen = $firstgen;
    }
 }


?>