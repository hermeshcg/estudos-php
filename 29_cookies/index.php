<?php

setcookie('user', 'Hermes', time()+3600);
setcookie('email', 'hermescaretta@gmail.com', time()+3600);
setcookie('ultima_pesquisa', 'carro', time()+3600);

var_dump($_COOKIE);