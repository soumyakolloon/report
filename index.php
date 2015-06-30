<?php
  require_once('connection.php');
  define('base_url', 'http://localhost/report');
  if (isset($_GET['controller']) && isset($_GET['action'])) {
    $controller = $_GET['controller'];
    $action     = $_GET['action'];
  } else {
    $controller = 'pages';
    $action     = 'index';
  }
   ob_start();
  session_start();
  require_once('views/layout.php');
?>