<?php

interface CupInterface
{
  /**
  * @returns string;
  */
  public function show();

  /**
  * @returns string;
  */
  public function liftUp();

  /**
  * @returns boolean;
  */
  public function putDown();

  /**
  * @returns boolean;
  */
  public function __toString();
}

class Cup implements CupInterface
{
  public $color = null;
  public $type = null;
  public $positionUp = false;
  public $ball = null;
  public $id = null;

  public function __construct($color, $type, $id)
  {
    $this->color = $color;
    $this->type = $type;
    $this->id = $id;
  }

  public function show(){
    if ($this->positionUp === true) {
      return "<a href=?show_cup=$this->id class='cup ". $this->color ." liftup'><img src='images/cup.png'>$this->ball</img></a>";
    }
    elseif($this->positionUp === false){
      return "<a href=?show_cup=$this->id class='cup ". $this->color ." putdown'><img src='images/cup.png'>$this->ball</img></a>";
    }

  }

  public function liftUp(){
    $this->positionUp = true;
  }

  public function putDown(){
    $this->positionUp = false;
  }

  public function __toString(){
    return $this->show();
  }

}



 ?>
