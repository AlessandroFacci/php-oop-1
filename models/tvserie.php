<?php


require_once __DIR__ . '/production.php';

class TvSeries extends Production {

  public $aired_from_year;
  public $aired_to_year;
  public $number_of_episodes;
  public $number_of_stagioni;
  
  public function __construct(
    string $title,
    int $aired_from_year,
    int $aired_to_year,
    int $number_of_episodes,
    int $number_of_stagioni,
  ){
  parent::__construct($title);
  $this->aired_from_year = $aired_from_year;
  $this->aired_to_year = $aired_to_year;
  $this->number_of_episodes = $number_of_episodes;
  $this->number_of_stagioni = $number_of_stagioni;
  }
 

  public function getDetails(){
    return"
    <strong>Titolo:</strong> $this->title <br>
    <strong>Anno primo episodio:</strong> $this->aired_from_year <br>
    <strong>Anno ultimo episodio:</strong> $this->aired_to_year <br>
    <strong>Numeri di episodi:</strong> $this->number_of_episodes <br>
    <strong>Numeri di stagioni:</strong> $this->number_of_stagioni <br>
    ";
  }
}
?>