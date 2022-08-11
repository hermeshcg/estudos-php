<?php
//xor (ou exclusivo) -> só pode ser um dos dois

$nome = "Hermes";
$idade = 20;

if(($idade = 20) xor ($nome = "Hermes")): //retorna false
    echo "True";
else:
    echo "False";
endif;

?>