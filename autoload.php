<?php

function __autoload($clase){
  require $clase.".php";
}

?>
