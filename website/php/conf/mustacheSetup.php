<?php
  require_once $_SERVER["DOCUMENT_ROOT"]."/lib/thirdparty/mustache.php/src/Mustache/Autoloader.php";
  Mustache_Autoloader::register();

  $mustache = new Mustache_Engine(array(
    'loader' => new Mustache_Loader_FilesystemLoader($_SERVER["DOCUMENT_ROOT"].'/html'),
    'partials_loader' => new Mustache_Loader_FilesystemLoader($_SERVER["DOCUMENT_ROOT"].'/html/partials'),
    'cache' => $_SERVER["DOCUMENT_ROOT"].'/cache/mustache',
    'logger' => new Mustache_Logger_StreamLogger('php://stderr')
  ));
?>
