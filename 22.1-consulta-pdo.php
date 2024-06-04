<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nombre=$_POST["nombre"];
        header("Location: 22-lista-pdo.php?consulta=1&nombre=$nombre");
        exit();
    }
?>