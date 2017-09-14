<?php


$result = mt_rand(1, 4);
echo 'Conditional<br />';
if($result == 1){
echo 'KOP';
}
elseif($result == 2){
echo 'MUNT';
}
else{
echo 'REMISE';
}

echo '<br /><br />Switch<br />';

switch ($result) {
  case '1':
     echo 'KOP';
    break;
    case '2':
     echo 'MUNT';
      break;
  default:
     echo 'REMISE';
    break;
}

echo '<br />';
$max = 10;

for ($x = 1; $x<=$max; $x++){
  echo $x*5 . "<br />";
}
$a=0;
echo '<br />';
while ($a <= 90){
  echo $a = $a + 10 . '<br />';
}



?>
