<?php
require_once 'config/config.php';


// echo "<h1>HOLA TACNA!!!</h1>";
// exit;
spl_autoload_register(function($lib){
    require_once 'lib/' . $lib . '.php';
  });

?>