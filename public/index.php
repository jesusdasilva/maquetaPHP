<?php
/**
  * Controlador Frontal
  */


// Configuraciones
include 'config.php';

  // Enrrutador
  switch (URL) {
    case '/resumen':
      include('resumen_controller.php');
      $controller = new ResumenController();

      break;
    case '/grupo/buscar':
      include 'grupo_buscar.php';
      break;
    default:
      // code...
      echo URL;
      echo '<br> PÁGINA NO ENCONTRADA';
      break;
  }
/*


$app = new app($controller);
$app->run();


*/
