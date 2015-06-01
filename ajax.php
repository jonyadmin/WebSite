<?php
  
  session_start();
  
    // AJAX functionality is limited to itemsearch and monster search for now
    if($_GET['act'] != 'itemsearch' && $_GET['act'] != 'mobsearch')
      exit(0);

  define('CONTENT_ONLY', TRUE);
  
  // A small hack to distinguish between regular requests and AJAX requests for the cache
  // Note to myself: alternatively CONTENT_ONLY=TRUE could disable cache
  $_GET['content_only'] = TRUE;

  require('root/global.php');
  
  global_reporting(0);
  
  header("Content-type: text/html; charset=" . EFFICIENT_CHARSET);
  
      require('root/main.php');


?>