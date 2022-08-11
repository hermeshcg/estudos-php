<?php
/* 
  $GLOBALS
  $_SERVER
  $_REQUEST
  $_POST
  $_GET
  $_FILES
  $_ENV
  $_COOKIES
  $_SESSION
*/

//uso globals
$x = 12;
$y = 12;

function soma(){
  echo $GLOBALS['x'] + $GLOBALS['y'];
}

soma();
?>