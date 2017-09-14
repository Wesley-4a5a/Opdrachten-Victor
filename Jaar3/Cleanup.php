<?php

$stri = "    dEzE TeksT WoRdT oPgeSchoOnd; MeDE MOGelIJk GemAAkT dooR wILsOn.";

function cleanUp($stri){
  return ucwords(strtolower($stri));
}

echo cleanUp($stri);

 ?>
