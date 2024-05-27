<?php
if ($_SERVER["REQUEST_METHOD"] == "POST"){
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$edad = $_POST['edad'];
$talla = $_POST['talla'];
$peso = $_POST['peso'];

if (empty($nombre) ││ empty($apellido) ││ empty($edad) ││ empty($talla) ││ empty($peso) ││ empty($sintomas)) {
echo " todos los campos son obligatorios" ;
}
$servername = "Localhost";
$username = "root";
$password ="":
$dbname = "covid";
try{
    $conn = new PDO("mysql:host=$servername;dbname=$dbname",)
    $username , $ password);
}
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
?>