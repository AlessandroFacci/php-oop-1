<?php

class Movie{
  public $title;
  public $type;
  public $duration;
  public $language;

  public function __construct(
    string $title,
    string $type,
    float $duration,
    string $language,
    )
    {
    $this->title = $title;
    $this->type = $type;
    $this->duration = $duration;
    $this->language = $language;
  }
}

?>