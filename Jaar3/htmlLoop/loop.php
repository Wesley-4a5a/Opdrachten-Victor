<?php

$hobbies = [
  'Hacking',
  'Drinking',
  'Streaking',
  'Doing nothing',
  'Sleeping',
  'Larping',
  'Abathur',
];

echo '<ul>';
for ($i=0; $i < count($hobbies) ; $i++) {
  echo "
  <li>
  $hobbies[$i]
  </li>";
}
echo '</ul>';

 ?>



 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <title></title>
   </head>
   <body>
     <ul>
       <?php
        foreach($hobbies as $poulter):
            echo "<li>$poulter</li>";
        endforeach;

        ?>
     </ul>
   </body>
 </html>
