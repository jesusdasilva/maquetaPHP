<?php
/**
 * Resumen Controller
 */
 include 'views/resumen/resumen_view.php';
 include 'models/resumen/resumen_model.php';


class ResumenController
{

  function __construct($acction)
  {
    // code...
  }
  /**
   * Index Acction
   */
  public function index(){

    $model = new resumen_model();
    $datos = $model->buscarTodos();
    $view = new resumen_view();

    return($view->render('index.php',['datos'=> $datos,]));

  }
}
