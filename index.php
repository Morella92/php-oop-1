<?php

    include './movie.php';    

    $movie = new Movie("Kill Bill", "2003");
    $movie->director = "Quentin Tarantino";
    $movie->genre= "Azione";
    var_dump($movie);

    $film = new Movie ("Nightmare before Christmas", "1993");
    $film->director = "Tim Burton";
    $film->genre = "Animazione";
    var_dump($film);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP</title>
</head>
<body>
    

</body>
</html>