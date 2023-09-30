<?php 

require_once __DIR__ . '/db.php';

 
// metodo da usare minuti trasformate in "ore e minuti"
// 
// $minuti = 125;

// $ore = round($minuti / 60);
// $min = $minuti % 60;

// echo $ore;
// var_dump($min);
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
            <div class="col-3">
                <div class="card" >
                    <div class="card-header">
                        <h2><?= $first_movie->titlemovie ?></h2>
                    </div>
                    <div class="card-body">
                        <p>Regia: <?= $first_movie->regia ?></p>
                        <p>Durata: <i><?= $first_movie->transformIntoHours() ?></i></p>
                        <p>Genere: <?php foreach($first_movie->genere->firstgen as $gen) {?>
                            <span><?= $gen.',' ?></span>
                            <?php }?>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card" >
                    <div class="card-header">
                        <h2><?= $second_movie->titlemovie ?></h2>
                    </div>
                    <div class="card-body">
                        <p>Regia: <?= $second_movie->regia ?></p>
                        <p>Durata: <i><?= $second_movie->transformIntoHours() ?></i></p>
                        <p>Genere: <?php foreach($second_movie->genere->firstgen as $gen) {?>
                            <span><?= $gen.',' ?></span>
                            <?php }?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>