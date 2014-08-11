<?php

/*
  Iniciando namespaces
*/

include_once "autoload.php";

use app\config\config;

$clase = new config();

echo $clase->config();


?>
