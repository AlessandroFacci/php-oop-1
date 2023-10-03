<?php

require_once __DIR__ . '/genre.php';
require_once __DIR__ . '/production.php';

class Movie extends Production {


  public $genre;
  public $duration;
  public $language;

  public function __construct(
    string $title,
    Genre $genre,
    string $duration,
    string $language,
    )
    {
      parent::__construct($title);
    $this->genre = $genre;
    $this->duration = $duration;
    $this->language = $language;
  }


  public function getDetails(){
    return "
    <strong>Titolo:</strong> $this->title <br>
    <strong>Genere:</strong> {$this->genre->type} <br>
    <strong>Durata:</strong> $this->duration <br>
    <strong>Lingua:</strong> $this->language <br>
    ";
  }
}


?>