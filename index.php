<?php

  session_start();

  // --- Require global content

  require('root/global.php');

  global_reporting(3);
    
  header("Content-type: text/html; charset=" . EFFICIENT_CHARSET);

    // ..start measuring execution time
    benchmark('Main script');
  
    // Fetching main HTML layout
    require('layout/head.php');

    require('layout/main.php');

    if(version_compare(PHP_VERSION, $ver='5.2', '<')) {
      errorHandler("This server is not running PHP $ver. ERODS-FUSION hasn't been tested in PHP " . PHP_VERSION . ". Consider upgrading. (You may disable this warning from index.php!)");
    }
    elseif(!extension_loaded('mysql')) {
      errorHandler("The MySQL extension <code>php_mysql</code> isn't loaded. It's neccesary to properly install this in order to run ERODS-FUSION.");
    }
    else {            
      require('root/main.php');
    }
  
    // HTML closing
    require('layout/main_close.php');

  // --- over and out!

?>