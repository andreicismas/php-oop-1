<?php

class Movie {
    // variabili d'istanza
    public $title;
    public $year;
    public $genre;
    public $country = "US";
    public $age;
    // definito un costruttore
    function __construct($movTitle, $movYear, $movGenre) {
        $this->title = $movTitle;
        $this->year = $movYear;
        $this->genre = $movGenre;
    }
}