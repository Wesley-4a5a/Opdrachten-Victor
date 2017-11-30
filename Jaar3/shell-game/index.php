<?php
session_start();
//Including the required classes
include 'class-ball.php';
include 'class-player.php';
include 'class-cup.php';
include 'class-game.php';

//amount
$amount = new Game(100);

//Instance of a new Ball with setter method.
$ball = new Ball('blue');

//Instance of a new player
$player = new HumanPlayer('Will', $_COOKIE['Amount']);

//Instance of a new Cup

$cups[1] = new Cup('yellow', 'plastic', 1);
$cups[2] = new Cup('blue', 'plastic', 2);
$cups[3] = new Cup('red', 'plastic', 3);




if(ISSET($_GET['show_cup'])){
  $cups[$_GET['show_cup']]->liftUp();
}

if(ISSET($_GET['startGame'])){
  $amount->start();
}

if(ISSET($_SESSION["ball"])){
    $cups[$_SESSION["ball"]]->ball = $ball->show();
}
if(ISSET($_GET["show_cup"])){
  if($_SESSION["ball"] == $_GET["show_cup"]){
  setcookie('Amount', $amount->amountPerGame+=20);

  ?>
 <script>alert('FLIKKER je hebt gewonnen.');</script>
  <?php
  $amount->start();
  $cups[1]->putDown();
  $cups[1]->show();
  $cups[2]->putDown();
  $cups[2]->show();
  $cups[3]->putDown();
  $cups[3]->show();
}
else{
  echo 'Too bad';

}
}


include 'view.php';

 ?>
