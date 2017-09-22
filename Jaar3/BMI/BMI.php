

<?php
session_start();
?>
<?php
if(!ISSET($_SESSION['colour'])){
  $_SESSION['colour'] = $_POST['colour'];
}
else{
  $_SESSION['colour'];
}

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form method='POST' action=''>
      <input onchange='setColour()' name='colour' type='color' id='colour' />
      Gewichtig: <input type='number' name='weight' />
      Highte: <input type='number' step='.01' name='height' />
      <input type='submit' name='submit' value='bekeren' />
    </form>
    <script>
      document.body.style.backgroundColor = ' <?= $_SESSION['colour'] ?> ';
    </script>
  </body>
</html>
<script>
var colour;
  function setColour(){
    var colour = document.querySelector('#colour').value;
    console.log(colour);
  }
</script>
<?php

$height;
$weight;
$flikkerBMI = array();
$flikkerBMI2 = array();
$_SESSION['hond'] = $flikkerBMI;
$_SESSION['aap'] = $flikkerBMI2;
if(ISSET($_POST['submit'])){
  $height = $_POST['height'];
  $weight = $_POST['weight'];
  $colour = $_POST['colour'];
  $_SESSION['colour'] = $colour;
  echo 'Uwe BMI is: ' . calculate($height, $weight);
  ?>
  <script>
    document.body.style.backgroundColor = ' <?= $_SESSION['colour'] ?> ';
  </script>
  <?php
  array_push($flikkerBMI, $weight, $height, calculate($height, $weight));
  array_push($flikkerBMI2, $flikkerBMI);
}
function calculate($height, $weight){
  $bmiCalc = $weight/($height*$height);
  return $bmiCalc;
}

echo "<table border='1'><tr><th>Geweight</th><th>Heighte</th><th>BMI</th></tr>";
foreach ($flikkerBMI2 as &$value) {
    echo "<tr><td>$value[0]</td><td>$value[1]</td><td>$value[2]</td></tr>";
}
echo "</table>";
//JE MOET DIE ARRAY RENAME NAAR DE SESSION ARRAY_PUSH($_SESSION['HOND']) ETC)
 ?>
