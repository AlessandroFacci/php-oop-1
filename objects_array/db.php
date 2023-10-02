<?php

require_once __DIR__ . './../models/tvserie.php';
require_once __DIR__ . './../models/movie.php';
require_once __DIR__ . './../models/genre.php';
require_once __DIR__ . './../models/production.php';



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

$the_defenders = new TvSeries(
'The defenders',
 2017,
 2017,
 8,
 1
);

$iron_fist = new TvSeries(
  'Iron Fist',
  2017,
  2018,
  24,
  2
 );

 $daredevil = new TvSeries(
  'Daredevil',
  2015,
  2018,
  39,
  3
 );

 $luke_cage = new TvSeries(
  'Luke Cage',
  2016,
  2018,
  26,
  2
 );

 $jessica_jones = new TvSeries(
  'Jessica Jones',
  2016,
  2018,
  26,
  2
 );

 $the_punisher = new TvSeries(
  'The Punisher',
  2017,
  2019,
  26,
  2
 );

 $agents_of_schiels = new TvSeries(
  'Agents of S.H.I.E.L.D.',
  2013,
  2020,
  136,
  7
 );


$marvel_series = [
  $the_defenders,
  $iron_fist,
  $daredevil, 
  $luke_cage,
  $jessica_jones,
  $the_punisher,
  $agents_of_schiels
];



$avengers_films =  [
  $avengers1,
  $avengers2,
  $avengers3,
  $avengers4,
];

?>