<?php

include 'config.php';

if (preg_match('/\.(?:png|jpg|jpeg|gif|css|js|svg)$/', $_SERVER["REQUEST_URI"])) {
    return false;    // serve the requested resource as-is.
} else {
  include 'index.php';
}
