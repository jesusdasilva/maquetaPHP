<?php

define('PROTOCOLO_WEB','http://'); //Protocolo web

define('URL',$_SERVER['REQUEST_URI']); //URL del navegador

//Rutas
define('RUTA_IMG',PROTOCOLO_WEB.$_SERVER['HTTP_HOST'].'/img/');//Ruta de los css
define('RUTA_CSS',PROTOCOLO_WEB.$_SERVER['HTTP_HOST'].'/css/');//Ruta de los css
define('RUTA_JS',PROTOCOLO_WEB.$_SERVER['HTTP_HOST'].'/js/');//Ruta de los jS
