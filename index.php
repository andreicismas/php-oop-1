<!-- 
Oggi pomeriggio ripassate i primi concetti di classe e di variabili e metodi d'istanza che abbiamo visto stamattina e create un file index.php in cui:
- è definita una classe ‘Movie’
   => all'interno della classe sono dichiarate delle variabili d'istanza
   => all'interno della classe è definito un costruttore
   => all'interno della classe è definito almeno un metodo
- vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà -->

<?php

include  "./class/class.php";

//Assegnazione valori tramite costruttore
$myMovie_1 = new Movie("King Kong vs. Godzilla.", 2021, " monster film");
$myMovie_2 = new Movie("A Quiet Place", 2018, " horror film");
$myMovie_3 = new Movie("Raya and the Last Dragon", 2021, " fantasy");
$myMovie_4 = new Movie("Sister", 2021, "drama film");
$myMovie_5 = new Movie("Detective Chinatown 3", 2021 , " comedy-mystery");
//movie 1
$myMovie_1->getMovieAge();
$myMovie_1->renderMovie();
//movie 2
$myMovie_2->getMovieAge();
$myMovie_2->renderMovie();
//movie 3
$myMovie_3->getMovieAge();
$myMovie_3->renderMovie();
//movie 4
$myMovie_4->getMovieAge();
$myMovie_4->renderMovie();
//movie 5
$myMovie_5->getMovieAge();
$myMovie_5->renderMovie();
