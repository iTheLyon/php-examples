<?php  
    $contador=1;
    $sumanotas=0;
    while($contador<=3) {        
        echo "Ingrese su Notas : ";
        $nota =  fgets(STDIN);
        $sumanotas = $sumanotas + $nota;
        $contador++;//$contador=$contador+1
    }
    $notapromedio = $sumanotas/3;
    echo "\n El promedio de notas es :".$notapromedio."\n";

    //logica que me permite dar el mayor de 5 numeros
    $mayor=0;
    for($i=1;$i<=5;$i++) {
        echo "Ingrese un numero : ";
        $numero =  fgets(STDIN);      
        if($mayor<$numero) {
            $mayor=$numero;
        }
    }

    echo "El numero mayor es :".$mayor;
?>