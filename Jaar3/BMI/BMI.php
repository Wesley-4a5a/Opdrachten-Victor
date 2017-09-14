<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form method='POST' action=''>
      Gewichtig: <input type='number' name='weight' />
      Highte: <input type='number' step='.01' name='height' />
      <input type='submit' name='submit' value='bekeren' />
    </form>
  </body>
</html>

<?php
$height;
$weight;
if(ISSET($_POST['submit'])){
  $height = $_POST['height'];
  $weight = $_POST['weight'];
  echo 'Uwe BMI is: ' . calculate($height, $weight);
}
function calculate($height, $weight){
  $bmiCalc = $weight/($height*$height);
  return $bmiCalc;
}

 ?>
