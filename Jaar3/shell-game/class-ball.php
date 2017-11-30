<?php


interface BallInterface
{
  /**
  * @returns string;
  */
  public function show();

  /**
  * @returns string;
  */
  public function __toString();
}


final class Ball implements BallInterface
{

  public $color = null;

  public function __construct($color)
  {
    $this->color = $color;
  }


  public function show(){
    return "<div class='ball ". $this->color ."'></div>";
  }

  public function __toString(){
    return $this->show();
  }
}



 ?>
