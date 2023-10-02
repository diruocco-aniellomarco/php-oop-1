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
            <!-- <?php foreach($movieList as $movie) {?>
                <div class="col-3">
                    <div class="card" >
                        <div class="card-header">
                            <h2><?=  $movie->titlemovie ?></h2>
                        </div>
                        <div class="card-body">
                            <p>Regia: <?=  $movie->regia ?></p>
                            <p>Durata: <i><?=  $movie->transformIntoHours() ?></i></p>
                            <!-- stampo tutti i generi (sono contenuti in un array) -->
                            <p>Genere: <?php foreach( $movie->genere->firstgen as $gen) {?>
                                <span><?= $gen.',' ?></span>
                                <?php }?>
                            </p>
                        </div>
                    </div>
                </div>
            <?php }?> -->
            
        </div>
    </div>
</body>
</html>