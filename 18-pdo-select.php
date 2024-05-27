<?php

try {
    $dsn="mysql:host=localhost;dbname=covid";//dsn: data source name , nombre origen de datos
    $user="root";//user : usuario
    $pass="";//pass : clave de usuario
    $db = new PDO($dsn, $user, $pass);
    echo "Hola base de datos tengo conexion\n";
    $pacientes = $db->query('SELECT * FROM pacientes where 14<=edad AND edad<=19');//edad BETWEEN 18 AND 19
    foreach ($pacientes as $row) {
        echo $row["nombres"]." ".$row["apellidos"].", EDAD : ".$row["edad"]."\n";
    }    
} catch (PDOException $e) {
    // attempt to retry the connection after some timeout for example
    echo "Error : ".$e->getMessage();
}
?>