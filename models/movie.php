<?php

require_once __DIR__ . '/type.php';
class Movie{
  public $title;
  public $type;
  public $duration;
  public $language;

  public function __construct(
    string $title,
    Type $type,
    string $duration,
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