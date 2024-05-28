<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Registro de Paciente</title>
</head>
<body>
    <h1>Registro de Paciente</h1>
    <form id="formulario" action="21-pdo-post.php" method="post">    
        <label for ="nombre">Nombres:</label> 
        <input type="text" id="nombre" name="nombre" required><br>
        <label for= "apellido">Apellidos:</label>
        <input type ="text" id="apellido" name="apellido"><br>
        <label for="edad">Edad :</label>
        <input type="text" id="edad" name="edad" required /><br>
        <label for="talla">Talla(cm):</label>
        <input type="text" id="talla" name="talla" required /><br>
        <label for="peso">Peso (kg):</label>
        <input type="text" id="peso" name="peso"><br>
        <h2><u>Sintomas</u></h2>
        <input type="checkbox" name="tos" id="tos">
        <label for="tos">Tos</label><br>
        <input type="checkbox" name="fiebre" id="fiebre">
        <label for="fiebre">Fiebre</label><br>
        <input type="checkbox" name="disnea" id="disnea">
        <label for="disnea">Disnea</label><br>
        <input type="checkbox" id = dolor_muscular name ="dolor_muscular">
        <label for="dolor_muscular">Dolor muscular</label><br>
        <input type="checkbox" id="gripe" name="gripe">
        <label for="gripe">Gripe</label><br>
        <input type="checkbox" id="Presion_alta" name ="Presion_alta">
        <label for="Presion_alta">Presion Alta</label><br>    
        <input type="checkbox" id="Fatiga" name="Fatiga">
        <label for="Fatiga">Fatiga</label><br>
        <input type="checkbox" id="Garraspera" name="Garraspera">
        <label for="Garraspera">Garraspera</label><br>
        <label for="fecha">**Fecha de vacunacion:**</label>
        <input type="date" id="fecha" name="fecha">
        <div class="Botones">
            <br>
            <button type="submit">Guardar</button>
            <button>Cancelar</button>
        </div>
    </form>    
</body>
</html>