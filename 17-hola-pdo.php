<?php

try {
    $dsn="mysql:host=localhost;dbname=covid";//dsn: data source name , nombre origen de datos
    $user="root";//user : usuario
    $pass="";//pass : clave de usuario
    $dbh = new PDO($dsn, $user, $pass);
    echo "Hola base de datos tengo conexion";
} catch (PDOException $e) {
    // attempt to retry the connection after some timeout for example
    echo "Error : ".$e->getMessage();
}
?>