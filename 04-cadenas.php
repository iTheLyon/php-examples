<?php
    $cadena="El curso ha terminado";
    echo "<h1>";
    echo "El texto en mayuscula ".strtoupper($cadena)."<br>";
    echo "El texto en minuscula ".strtolower($cadena)."<br>";
    echo "El texto tiene ".strlen($cadena)." caracteres<br>";
    echo "El texto dice ahora ".
    str_replace("terminado","finalizado",$cadena)."<br>";
    echo "</h1>";
?>
