<?php
  require  'vendor/autoload.php';
  Flight::route("/", function(){
    echo "Hello world";
  });


  Flight::start();
  require_once __DIR__.'/routes/listRoutes.php';
 ?>
