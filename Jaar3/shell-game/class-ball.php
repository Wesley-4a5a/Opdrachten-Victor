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
    return "<img src='images/ball.png' class='ball ". $this->color ."'></img>";
  }

  public function __toString(){
    return $this->show();
  }
}



 ?>
