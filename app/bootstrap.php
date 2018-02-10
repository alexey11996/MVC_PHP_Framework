<?php
//Load config
  require_once 'config/config.php';
//Load libraries  
  // require_once 'libraries/Core.php';
  // require_once 'libraries/Controller.php';
  // require_once 'libraries/Database.php';

  //Autoload Core Lobraries
  spl_autoload_register(function($classname){
    require_once 'libraries/' . $classname . '.php';
  });

