<?php
    include("15-polimorfismo.php");

    echo "AREA DE TRIANGULO\n";
    echo "INGRESE LA BASE :";
    $b=fgets(STDIN);
    echo "INGRESE LA ALTURA :";
    $h=fgets(STDIN);
    $triangulo = new Triangulo($b,$h);
    $area=$triangulo->calcularArea();
    echo "EL AREA DEL TRIANGULO ES ".$area;

    echo "\nAREA DE RECTANGULO\n";
    echo "INGRESE LA BASE :";
    $b=fgets(STDIN);
    echo "INGRESE LA ALTURA :";
    $a=fgets(STDIN);
    $rectangulo = new Rectangulo($b,$a);
    $area=$rectangulo->calcularArea();
    echo "EL AREA DEL RECTANGULO ES ".$area;
?>