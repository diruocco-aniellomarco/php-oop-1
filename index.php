<?php 

require_once __DIR__ . '/db.php';

 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <title>PHP Object-oriented programming 1</title>
</head>
<body>
    <div class="container">
        <div class="row mt-5 justify-content-center g-3">
        
            <!-- stampo tutti i film dell'array "movieList" in delle card -->
            <?php foreach($movies as $movie) {?>
                <div class="col-3">
                    <div class="card" >
                        <div class="card-header">
                            <h2><?=  $movie->title ?></h2>
                        </div>
                        <div class="card-body">
                            <p>Anno di pubblicazione: <?=  $movie->published_year ?></p>
                            <p>durata: <?=  $movie->published_year ?></p>
                            <p>Trama: <i><?=  $movie->trama ?></i></p>
                           <!--  stampo tutti i generi (sono contenuti in un array) -->
                           <p>Genere: <?php foreach( $generi as $gen) {?>
                                <span><?= $gen->firstgen.',' ?></span>
                                <?php }?>
                            </p>
                        </div>
                    </div>
                </div>
            <?php }?> 
            <?php foreach($serieList as $serietv) {?>
                <div class="col-3">
                    <div class="card" >
                        <div class="card-header">
                            <h2><?=  $serietv->title ?></h2>
                        </div>
                        <div class="card-body">
                            <p>Anno di messa in onda del primo episodio: <?=  $serietv->aired_from_year ?></p>
                            <p>Anno di messa in onda dell'ultimo episodio: <?=  $serietv->aired_to_year ?></p>
                            <p>Numero totale di episodi: <?=  $serietv->number_of_episodes ?></p>
                            <p>Numero totale di stagioni: <?=  $serietv->number_of_seasons ?></p>
                            <p>Trama: <i><?=  $serietv->trama ?></i></p>
                           <!--  stampo tutti i generi (sono contenuti in un array) -->
                           <p>Genere: <?php foreach( $generi_serie as $gen) {?>
                                <span><?= $gen->firstgen.',' ?></span>
                                <?php }?>
                            </p>
                        </div>
                    </div>
                </div>
            <?php }?> 
        </div>
    </div>
</body>
</html>