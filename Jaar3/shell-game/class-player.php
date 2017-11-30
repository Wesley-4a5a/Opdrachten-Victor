<?php

abstract class Player
{

  public $name = null;
  public $amount = null;

  public function __construct($name, $amount = 0)
  {
    $this->name = $name;
    $this->amount = $amount;
  }

  public function show(){
    return "<div class='player'><strong>$this->name: $this->amount </strong>";

  }

  abstract public function __toString();

}

class HumanPlayer extends Player
{
    public function __toString(){
      return $this->show();
    }
}

Class ComputerPlayer extends Player
{

    public function __toString(){
      return null;
    }
}


 ?>
