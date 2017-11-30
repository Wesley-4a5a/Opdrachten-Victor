<?php


class Game
{
  public $amountPerGame;


  public function __construct($amount)
  {
    if(isset($_COOKIE['Amount'])){
      $this->amountPerGame = $_COOKIE['Amount'];
    }
    else{
    $this->amountPerGame = $amount;
    }
  }

  public function getAmount(){

    return "<strong> Current score: $this->amountPerGame</strong></div>";
  }

  public function start(){
    $random = rand(1,3);
    $_SESSION["ball"] = $random;
    echo 'New game started!';
  }

}


 ?>
