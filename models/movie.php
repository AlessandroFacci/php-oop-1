<?php

require_once __DIR__ . '/genre.php';
require_once __DIR__ . '/production.php';

class Movie extends Production {

  public $title;
  public $genre;
  public $duration;
  public $language;

  public function __construct(
    string $production_house,
    string $title,
    Genre $genre,
    string $duration,
    string $language,
    )
    {
      parent::__construct($production_house);
    $this->title = $title;
    $this->genre = $genre;
    $this->duration = $duration;
    $this->language = $language;
  }

 

}


?>