<?php

class Movie {
    // variabili d'istanza
    public $title;
    public $year;
    public $genre;
    public $country = "Romania";
    public $age;
    // definito un costruttore
    function __construct($movTitle, $movYear, $movGenre) {
        $this->title = $movTitle;
        $this->year = $movYear;
        $this->genre = $movGenre;
    }

    public function getTitle() {
        return  $this->title ;
    }

    public function getMovieAge() {
        return $this->age = "Released movie - " . $this->year;
    }
    
    public function renderMovie() {
        echo "<h2  >" . $this->getTitle() . "</h2>";
        echo "<p> Genere: " . $this->genre . "</p>";
        echo "<p>Country: " . $this->country . "</p>";
        echo "<p style = color:red >" . $this->age . "</p>";
    }
}