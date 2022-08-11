<?php
$contador = 0;
while($contador <= 10):
  echo $contador;
  $contador++;
endwhile;

do {
  echo $contador;
  $contador++;
} while ($contador <= 10);

?>