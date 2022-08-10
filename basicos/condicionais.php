<?php
$numero = 10;

if ($numero == 10):
    echo "É igual a 10";
elseif ($numero<=9) :
    echo "É menor ou igual a 9";
else: 
    echo "É diferente de 10";
endif;

//ternario é igual no js

/* switch case */
$cor="vermelho";

switch ($cor) {
    case 'vermelho':
        echo "Sua cor preferida é vermelho";
    break;
    case 'verde':
        echo "Sua cor preferida é verde";
    break;
    case 'azul':
        echo "Sua cor preferida é azul";
    break;
    default:
        echo "Sua cor preferida não é rgb";
    break;
}
?>