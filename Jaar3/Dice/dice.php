<?php


abstract class dice
{

  protected $dice = null;

  public function __construct()
  {
  }

  public function getNumber($dice){
    return $this->dice;
  }

  protected function roll(){
    $this->dice = rand(1,6);
  }
}

class whiteDice extends dice
{
  public function color(){
    $this->roll();
    return "<img src=png/$this->dice.png>";
  }
}

class negroDice extends dice
{
  public function color(){
    $this->roll();
    return "<img src=png/b$this->dice.png>";
  }
}

class DRIEdDice extends dice
{
  public function color(){
    $this->roll();
    return "<img src=png/3d$this->dice.png>";
  }
}

$white = new whiteDice();
for ($i=0; $i < 6; $i++) {
echo $white->color();
}

$black = new negroDice();
for ($i=0; $i < 6; $i++) {
echo $black->color();
}

$DRIEDIE = new DRIEdDice();
for ($i=0; $i < 6; $i++) {
echo $DRIEDIE->color();
}

 ?>

 <style media="screen">
   img{
     width: 66px;
     height: 66px;
   }
 </style>
