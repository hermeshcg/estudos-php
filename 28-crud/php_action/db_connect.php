<?php
//conectando com o banco mano
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "php_crud";

$connect = mysqli_connect($servername, $username, $password, $dbname);
mysqli_set_charset($connect, "utf8");

if (mysqli_connect_error()) :
  echo "Falha na conexão com o bando de dados" . mysqli_connect_error();
endif;
