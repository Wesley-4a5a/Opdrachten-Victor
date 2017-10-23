<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Die Boom</title>
  </head>
  <body>
    <form class="" action="" method="post">
      <input type='number' name='number' />
      <input type='submit' name='submit' value='Retrieve Random nummers die je dan laten denken dat het om een familie gaat o.i.d.' />
    </form>

    <br />

  </body>
</html>

<?php

$flikker = array
  (
    [
        "value" => 6,
        "parent" => NULL,
    ],
    [
        "value" => 2,
        "parent" => 6,
    ],
    [
        "value" => 8,
        "parent" => 6,
    ],
    [
        "value" => 1,
        "parent" => 2,
    ],
    [
        "value" => 4,
        "parent" => 2,
    ],
    [
        "value" => 7,
        "parent" => 8,
    ],
    [
        "value" => 9,
        "parent" => 8,
    ],
    [
        "value" => 3,
        "parent" => 4,
    ],
    [
        "value" => 5,
        "parent" => 4,
    ],
  );

echo '<br /><br />';


if(ISSET($_POST['submit'])){
  foreach ($flikker as $key) {
    if($key['value'] == $_POST['number']){
      echo 'Parent: ' . $key['parent'] . '<br /> Value: ' . $key['value'];
    }
  }
}


if(ISSET($_POST['submit'])){
  $kleineFlikkers = [];
  foreach ($flikker as $key) {
    if($key['parent'] == $_POST['number']){
      array_push($kleineFlikkers, $key['value']);
    }
  }
  echo '<br />Children: ' . implode(', ', $kleineFlikkers);
}
//}

 ?>
