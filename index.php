<?php

    include './movie.php';    

    $movie = new Movie("Kill Bill", "2003");
    $movie->director = "Quentin Tarantino";
    $movie->genre= "Azione";
    $movie ->description= "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi convallis ante vitae nibh molestie bibendum non eu augue. Fusce nisl augue, tincidunt vehicula velit vel, viverra volutpat turpis.";
    var_dump($movie);

    $film = new Movie ("Nightmare before Christmas", "1993");
    $film->director = "Tim Burton";
    $film->genre = "Animazione";
    $film ->description= "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi convallis ante vitae nibh molestie bibendum non eu augue. Fusce nisl augue, tincidunt vehicula velit vel, viverra volutpat turpis.";
    var_dump($film);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <title>OOP</title>
</head>
<body>
    
    <div class="container">
        <div class="row">
            <div class="col-6">
                <div class="card">
                    <img src="./kill-bill.jpg" style="width:50%" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h2 class="card-title">
                            <?php echo $movie->getTitle() ?>
                        </h2>
                        <p class="card-text">
                            <?php echo $movie->description ?>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="card">
                    <img src="./nightmare.jpg" style="width:50%" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h2 class="card-title">
                            <?php echo $film->getTitle() ?>
                        </h2>
                        <p class="card-text">
                            <?php echo $film->description ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>