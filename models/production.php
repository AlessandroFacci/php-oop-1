<?php 
class Production{
  public $production_house;
  public $title;



  public function __construct(
    string $production_house,
    string $title,
   
    )
    {
    $this->production_house = $production_house;;
    $this->title = $title;
  }
};

?>