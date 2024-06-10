<?php
class Pacientes extends Control
{

  public function index()
  {  
    // $pacienteModel =$this->load_model('PacienteModel');
    // $pacientes = $pacienteModel->list();
    $datos = [
      "title" => "Pacientes",
      "pacientes" =>[]//$pacientes
      ];
        
    $this->load_view('view_pacientes', $datos);
  }

  public function actualizar()
  {
    $id=$_POST["id"];
    $nombres=$_POST["nombre"];
    $pacienteModel =$this->load_model('PacienteModel');
    $resultado = $pacienteModel->update($id,$nombres);    
    echo $resultado;
  }

  public function listar()
  {
     $nombres=$_POST["nombre"];
     $pacienteModel =$this->load_model('PacienteModel');
     $pacientes = $pacienteModel->list($nombres);
     $resultado = [];
     foreach($pacientes as $row) {
      array_push($resultado,$row);
     }
     echo json_encode($resultado);
  }

}
?>