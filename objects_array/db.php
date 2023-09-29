<?php

require_once __DIR__ . './../models/movie.php';


$avengers1 = new Movie (
"The Avengers",
"Action",
"2h 23m",
"English"
);

$avengers2 = new Movie (
  "Avengers: Age of Ultron",
  "Action",
  "2h 21m",
  "English"
);

$avengers3 = new Movie (
  "Avengers: Infinity War",
  "Action",
  "2h 29m",
  "English"
);

$avengers4 = new Movie (
  "Avengers: Endgame",
  "Action",
  "3h 2m",
  "English"
);

$avengers_films =  [
  $avengers1,
  $avengers2,
  $avengers3,
  $avengers4,
];

?>