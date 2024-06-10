<?php require_once APP . '/views/inc/header.php' ?>

<div class="container-fluid bg-light py-5">
  <div class="container">
    <h1 class="display-4">Busqueda de Pacientes</h1>
    <input type="text" placeholder="Escribe aqui" name="nombre" id="nombre" /><br>
    <label id="tos" name="tos">Tos</label><input type="checkbox" for="tos">
    <button type="button" onclick="buscarPacientes();">Buscar</button>
    <table style="border: 1px solid black;" id="tabla">      
        <tr>
            <td>Id</td>
            <td>Paciente</td>
            <td>Edad</td>
            <td>Talla</td>
            <td>Peso</td>
            <td>Tos</td>
            <td>Fiebre</td>
            <td>Disnea</td>
            <td>Acciones</td>
        </tr>                 
    </table>
  </div>
</div>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Formulario</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                    aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <label for="name" class="form-label">Nombre:</label>
                    <input type="hidden" class="form-control" id="id" name="id"/>
                    <input type="text" class="form-control" id="nombre2" name="nombre2"/>
                    <button type="button" class="btn-accept" onclick="actualizar();">Guardar</button>&nbsp;
                    <button type="button" class="btn-warning" onclick="cancelar();">Cancelar</button>
                </div>
            </div>
        </div>
    </div>

<?php require_once APP . '/views/inc/footer.php' ?>