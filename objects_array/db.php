<?php

require_once __DIR__ . './../models/movie.php';
require_once __DIR__ . './../models/genre.php';
require_once __DIR__ . './../models/production.php';


$marvel_studios = new Production(
  'Marvel Studios'
);

$action = new Genre(
  'Action'
);


$avengers1 = new Movie (
"The Avengers",
$action,
"2h 23m",
"English"
);

$avengers2 = new Movie (
  "Avengers: Age of Ultron",
  $action,
  "2h 21m",
  "English"
);

$avengers3 = new Movie (
  "Avengers: Infinity War",
  $action,
  "2h 29m",
  "English"
);

$avengers4 = new Movie (
  "Avengers: Endgame",
  $action,
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