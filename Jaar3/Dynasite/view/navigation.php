<?php

$view = 'home';

if(isset($_GET['view'])){
    $view = $_GET['view'];
}

$stmt = $conn->prepare("SELECT titel FROM page");
$stmt->execute();

//$result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<nav id="main-nav">
    <ul>
<?php
foreach($result as $row){
  foreach($row as $hond){
    if($view == $row['titel']){
          echo '<li class=active><a href=?view='.$hond.'>'.$hond.'</a></li>';
    }
    else{
          echo '<li><a href=?view='.$hond.'>'.$hond.'</a></li>';
    }

  }
}
?>

<nav id="main-nav">
    <ul>
