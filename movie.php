<?php

// Dichiaro la classe

class Movie {

  // Dichiarazione delle variabili d'istanza
  public $title;
  public $director;
  public int $year;
  public $genre;
  public $description;

  // Definizione del costruttore
    function __construct($_title, $_year) {
        $this->title = $_title;
        $this->year = $_year; 
    }

  function getTitle(){
    return $this->title;
  }
}

?>
