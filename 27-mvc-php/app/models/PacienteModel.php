<?php
class PacienteModel extends Control
{

    public function __construct() {
        
    }

    public function list($nombres) {
        $user="root";//user : usuario
        $pass="root";//pass : clave de usuario
        $port="3308";
        $dsn="mysql:host=localhost;dbname=covid;port=$port";//dsn: data source name , nombre origen de datos
        $db = new PDO($dsn, $user, $pass);
        $pacientes = $db->query("SELECT * FROM pacientes WHERE nombres like '%$nombres%'");
        return $pacientes;
    }

    public function update($id,$nombres) {
        try {
        $user="root";//user : usuario
        $pass="root";//pass : clave de usuario
        $port="3308";
        $dsn="mysql:host=localhost;dbname=covid;port=$port";//dsn: data source name , nombre origen de datos
        $db = new PDO($dsn, $user, $pass);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $db->beginTransaction();
        $sql="UPDATE pacientes SET nombres = '$nombres' WHERE id=$id";
        $db->exec($sql);    
        $db->commit();
        return "";        
    } catch (PDOException $e) {
        $db->rollBack();
        // attempt to retry the connection after some timeout for example
        echo "Error : ".$e->getMessage();
    }
    }

}
?>