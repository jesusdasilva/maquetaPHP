<?php
/**
* Controlador Frontal
*/

// Configuraciones
include 'config.php';

  // Enrrutador
  switch (URL) {
    case '/resumen':
      include('resumen.php');
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
