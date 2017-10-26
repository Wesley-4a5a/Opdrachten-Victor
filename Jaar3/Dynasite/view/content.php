<?php

$view = 'home';

if(isset($_GET['view'])){
    $view = $_GET['view'];
}

$stmt = $conn->prepare("SELECT content FROM page where titel = '$view'");
$stmt->execute();

//$result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
foreach($result as $row){
  foreach($row as $hond){
    echo $hond;
  }
}
 ?>
