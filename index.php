<?php

include 'config.php';

if (preg_match('/\.(?:png|jpg|jpeg|gif|css|js)$/', $_SERVER["REQUEST_URI"])) {
    return false;    // serve the requested resource as-is.
} else {
  // Enrrutador
  switch (URL) {
    case '/resumen':
      include('resumen.php');
      break;

    default:
      // code...
      echo URL;
      break;
  }
}
