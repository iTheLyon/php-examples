<?php
    echo "----------------------------------------------\n";
    echo "*****************SEMAFORO*********************\n";
    echo "Elija un color \n";
    echo "Rojo (R)\n";
    echo "Amarillo (A)\n";
    echo "Verde (V)\n";
    echo "Ingrese su Color:";
    $letra = fgetc(STDIN);
    $mensaje="";
    switch (strtoupper($letra)) {
        case "R":
            $mensaje="Pare!";
            break;
        case "A":
            $mensaje="Espera!";
            break;
        case "V":
            $mensaje="Avanza!";
            break;
        default:
            break;
    }

    echo $mensaje;
    ?>