<?php
$nome = 'Hermes';

#concatenação dessa forma com aspas simples não funciona, pois vai interpretar tudo como texto
echo 'Meu nome é $nome';
#para concatenar com aspas simples é  preciso fazer dessa forma
echo 'Meu nome é '.$nome.' resto do text';
#para adicionar aspas simples dentro de um texto que foi iniciado com aspas simples é fazer isso aq
echo 'Meu nome é '.$nome.' resto do text \'32\'';
echo '<hr>';
#aspas duplas são interpretativas
echo "Meu nome é $nome";



?>