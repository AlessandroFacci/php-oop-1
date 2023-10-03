<?php 
class Production{
  public $title;
  
  public function __construct(
    string $title
    )
    {
    $this->title = $title;
  
  }

  public function getDetails(){
    return "$this->title";
  }


};

?>