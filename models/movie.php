<?php

require_once __DIR__ . '/genre.php';
class Movie{
  public $title;
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
    $this->title = $title;
    $this->genre = $genre;
    $this->duration = $duration;
    $this->language = $language;
  }

 

}

?>