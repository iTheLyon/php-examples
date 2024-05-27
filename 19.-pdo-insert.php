<?php

try {
    $dsn="mysql:host=localhost;dbname=covid";//dsn: data source name , nombre origen de datos
    $user="root";//user : usuario
    $pass="";//pass : clave de usuario
    $db = new PDO($dsn, $user, $pass);
    echo "Hola base de datos tengo conexion\n";
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $db->beginTransaction();
    $sql="INSERT INTO `pacientes` (`nombres`, `apellidos`,
     `edad`, `talla_m`, `peso_kg`, `sintoma_tos`,
      `sintoma_fiebre`, `sintoma_disnea`, `sintoma_dolormuscular`,
       `sintoma_gripe`, `sintoma_presionalta`, `sintoma_fatiga`,
        `sintoma_garraspera`, `ultima_fecha_vacunacion`, `resultado`)
         VALUES ('Pedrito', 'Palotes', 14, 1.45, 36.00, 
         '0', '0', '0', '0', '0', '0', '0', '0', '2024-05-27', '');";
    $db->exec($sql);    
    $db->commit();
    // $pacientes = $db->query('SELECT * FROM pacientes where 18<=edad AND edad<=19');//edad BETWEEN 18 AND 19
    // foreach ($pacientes as $row) {
    //     echo $row["nombres"]." ".$row["apellidos"].", EDAD : ".$row["edad"]."\n";
    // }    

} catch (PDOException $e) {
    $dbh->rollBack();
    // attempt to retry the connection after some timeout for example
    echo "Error : ".$e->getMessage();
}
?>