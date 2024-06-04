<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Busqueda de Pacientes</title>
</head>
<body>
    
    <center><h1>Busqueda de Pacientes</h1>
    </center>
    <form action="22.1-consulta-pdo.php" method="POST">
    <input type="text" placeholder="Escribe aqui" name="nombre" id ="nombre" /><br>
    <label id="tos" name="tos">Tos</label><input type="checkbox" for="tos">
    <button type="submit">Buscar</button>
    <table style="border: 1px solid black;">
        <tr>
            <td>Paciente</td>
            <td>Edad</td>
            <td>Talla</td>
            <td>Peso</td>
            <td>Tos</td>
            <td>Fiebre</td>
            <td>Disnea</td>
            <td>Acciones</td>
        </tr>
        <?php         
            
            if(isset($_GET["consulta"]) ) {
                echo $_GET["nombre"];
                $pacientes=array(
                    0=>array("Nombres"=>"Juan","Edad"=>18,"Talla"=>150,"Peso"=>150,"Tos"=>1,"Fiebre"=>0,"Disnea"=>1),
                    1=>array("Nombres"=>"Jose","Edad"=>28,"Talla"=>130,"Peso"=>150,"Tos"=>1,"Fiebre"=>0,"Disnea"=>1),
                    2=>array("Nombres"=>"Jose","Edad"=>28,"Talla"=>130,"Peso"=>150,"Tos"=>1,"Fiebre"=>0,"Disnea"=>1),
                    3=>array("Nombres"=>"Jose","Edad"=>28,"Talla"=>130,"Peso"=>150,"Tos"=>1,"Fiebre"=>0,"Disnea"=>1),
                    4=>array("Nombres"=>"Jose","Edad"=>28,"Talla"=>130,"Peso"=>150,"Tos"=>1,"Fiebre"=>0,"Disnea"=>1),
                    5=>array("Nombres"=>"Jose","Edad"=>28,"Talla"=>130,"Peso"=>150,"Tos"=>1,"Fiebre"=>0,"Disnea"=>1),
                    6=>array("Nombres"=>"Jose","Edad"=>28,"Talla"=>130,"Peso"=>150,"Tos"=>1,"Fiebre"=>0,"Disnea"=>1)
                );
                    foreach ($pacientes as $row) {
                        echo "<tr>";
                        echo "<td>".$row["Nombres"]."</td>";
                        echo "<td>".$row["Edad"]."</td>";
                        echo "<td>".$row["Talla"]."</td>";
                        echo "<td>".$row["Peso"]."</td>";
                        echo "<td>".($row["Tos"]==1 ? "Si" : "No")."</td>";
                        echo "<td>".($row["Fiebre"]==1 ? "Si" : "No")."</td>";
                        echo "<td>".($row["Disnea"]==1 ? "Si" : "No")."</td>";
                        echo "<td> <button>Editar</button><button>Eliminar</button></td>";
                        echo "</tr>";
                    }    
            }
        ?>        
    </table>
    </form>
</body>
</html>
