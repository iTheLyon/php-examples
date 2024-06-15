<?php
class ReportePacientes  extends Control
{
    public function index()
    {  
       
        require_once __DIR__.'../../../vendor/autoload.php';
        $datos=array("titulo"=>"Reporte de Pacientes (SENATI)");
        $html = $this->load_view('view_reporte', $datos,true);      
        $mpdf = new \Mpdf\Mpdf();
        $mpdf->WriteHTML($html);
        $mpdf->Output("reporte.pdf","D");
    }

}