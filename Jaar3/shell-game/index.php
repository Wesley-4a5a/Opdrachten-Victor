<?php
session_start();
//Including the required classes
include 'class-ball.php';
include 'class-player.php';
include 'class-cup.php';


//Instance of a new Ball with setter method.
$ball = new Ball('blue');

//Instance of a new player
$player = new Player('Will', 5);

//Instance of a new Cup

$cups[1] = new Cup('yellow', 'plastic', 1);
$cups[2] = new Cup('blue', 'plastic', 2);
$cups[3] = new Cup('red', 'plastic', 3);




if(ISSET($_GET['show_cup'])){
  $cups[$_GET['show_cup']]->liftUp();
}

if(ISSET($_GET['startGame'])){
  $random = rand(1,3);
  $_SESSION["ball"] = $random;
  echo 'lol';
}

if(ISSET($_SESSION["ball"])){
    $cups[$_SESSION["ball"]]->ball = $ball->show();
}

if($_SESSION["ball"] == $_GET["show_cup"]){
  echo 'FLIKKER';
}

include 'view.php';

 ?>
