<?php
date_default_timezone_set('America/Sao_paulo');
echo "Dia d: ".date('d');
echo "<br>";
echo "Dia D: ".date('D');
echo "<hr>";
echo "Mes m: ".date('m');
echo "<br>";
echo "Mes M: ".date('M');
echo "<hr>";
echo "Ano y: ".date('y');
echo "<br>";
echo "Ano Y: ".date('Y');
echo "<hr>";
echo "data formatada: ".date('d/m/Y');
echo "<hr>";
echo "hora (H 24h | h 12h): ".date('H:i:s');
echo "<hr>";
$date = date('Y-m-d'); //salvar DATE no banco
$datetime = date('Y-m-d H:i:s'); //salvar DATETIME no banco
echo "DATE: ".$date;
echo "<br>";
echo "DATETIME: ".$datetime;
echo "<br>";
echo "Só time() retorna timestamp: ".time();
echo "<hr>";
$data_2 = mktime(15,30,00,02,12,2022);
echo "MKTIME (transforma em timestamp): ".$data_2;
echo "<br>";
echo "Para formatar em date: ".date('d/m - h:i', $data_2);

