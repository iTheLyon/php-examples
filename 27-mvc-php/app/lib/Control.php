<?php
class Control
{
  public function load_model($model)
  {
    require_once '../app/models/' . $model . '.php';

    return new $model;
  }

  public function load_view($view, $datos = [],$retorno =false)
  {
    if(file_exists('../app/views/pages/' . $view . '.php'))
    {
      if($retorno == false)
        require_once '../app/views/pages/' . $view . '.php';
      else {
        ob_start();
        extract($datos);
        require '../app/views/pages/' . $view . '.php';
        $output = ob_get_clean();
        return $output;
      }
    }
    else
    {
      die("404 NOT FOUND");
    }
  }
}
?>