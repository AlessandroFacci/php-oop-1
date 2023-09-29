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

  ){
    $this->title = $title;
    $this->type = $type;
    $this->duration = $duration;
    $this->language = $language;
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>

</body>

</html>