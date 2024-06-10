
function buscarPacientes() {
    const $nombre = $("#nombre").val();
    //alert("Buscando..."+nombre);
    let datos ={
        nombre : $nombre
    };
    $.ajax({
        url : URL+"/pacientes/listar",
        type : "post",
        data : datos,
        success : function(result) {
            //debugger;
            console.log(result);
            const pacientes=$.parseJSON(result);
            vaciarTabla("#tabla");
            pacientes.forEach(item => {
                agregarFilas("#tabla",item);
            });

        }
    })


    return;
}


function agregarFilas(id,paciente) {
    const html=
    "<tr class='fila'>"+
    "<td>"+paciente.id+"</td>"+
    "<td>"+paciente.nombres+"</td>"+
    "<td>"+paciente.edad+"</td>"+    
    "<td>"+paciente.talla_m+"</td>"+
    "<td>"+paciente.peso_kg+"</td>"+
    "<td>"+paciente.sintoma_tos+"</td>"+
    "<td>"+paciente.sintoma_fiebre+"</td>"+
    "<td>"+paciente.sintoma_disnea+"</td>"+
    "<td><button type='button' onclick=editar("+paciente.id+",'"+paciente.nombres+"','"+paciente.edad+"');>Editar</button></td>"+
    "</tr>";
    $(id+" tr:last").after(html);
}

function vaciarTabla(id) {
    $(".fila").remove();
}
function editar(id,nombres,edad) {
    $('#exampleModal').modal('show');    
    $("#nombre2").val(nombres);
    $("#id").val(id);
}

function actualizar() {
    const $nombre = $("#nombre2").val();
    const $id = $("#id").val();
    
    let datos ={
        id : $id,
        nombre : $nombre
    };
    $.ajax({
        url :URL+"/pacientes/actualizar",
        type : "post",
        data : datos,
        success : function(result) {   
            if(result=="") {
                alert("Se guardo los datos correctamente");            
            }
            else {
                alert(result);            
            }
        }
    })


    return;
}

function cancelar() {
    $('#exampleModal').modal('hide');    
}