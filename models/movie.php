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
    return "$this->title" . ' ' . $this->genre->type . " - $this->duration - $this->language" ;
  }

}


?>