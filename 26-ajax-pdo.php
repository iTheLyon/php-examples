<?php
 if ($_SERVER["REQUEST_METHOD"] == "POST") {
    try {
        $nombre = $_POST["nombre"];
        $dsn="mysql:host=localhost;dbname=covid";
        $user="root";//user : usuario
        $pass="";//pass : clave de usuario
        $db = new PDO($dsn, $user, $pass);        
        $pacientes = $db->query("
        SELECT * FROM pacientes 
        where nombres like '%$nombre%'");
        $resultado=[];
        foreach ($pacientes as $row) {
            array_push($resultado,$row);
        }         
        echo json_encode($resultado);        
    } catch (PDOException $e) {        
        echo "Error : ".$e->getMessage();
    }
}
?>