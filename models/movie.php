<?php
require_once __DIR__ . './../ objects_array/db.php';
class Movie{
  public $title;
  public $type;
  public $duration;
  public $language;

  public function __construct(
    string $title,
    string $type,
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