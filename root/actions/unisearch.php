<?php if(!defined('EFFICIENT_ROOT')) exit;

  benchmark('Executing search');
  benchmark('Init search libraries');

  if(USE_CACHE == TRUE) {
  require('root/methods/Cache.php');
  }
  
  require('root/methods/ResultHandler.php');

  benchmark('Init search libraries', 'stop');

  // Using cache to get content
  if(USE_CACHE == TRUE) {
  
  $cache = new Cache($_GET, CACHE_PATH);
  
    try {
      benchmark('Fetching cache');
      $cache->getCache();
      benchmark('Fetching cache', 'stop');
    }
    // Cache not found, we have to generate anyway
    catch(Exception $e) {
      try {
      $search = new ResultHandler(@$SEARCH_GENERIC($_GET, Settings::get('db_struct')), $_GET);
        try {
        $cache->writeCache($search->exec($controller))->getCache();
        }
        // Something failed hard, cache is probably broken, we have to generate content
        catch(Exception $Chc_err) {
          debugHandler('Cache Error: ' . $Chc_err->getMessage());
          $search->exec();
        }
      }
      catch(Exception $ResHandle_err) {
        errorHandler($ResHandle_err->getMessage(), TRUE);
      }
    }
  
  }
  
  // Not using cache, generating all content right now
  else {
      
  benchmark('Generating search content');
      
    try {
    $search = new ResultHandler(@$SEARCH_GENERIC($_GET, Settings::get('db_struct')), $_GET);
    echo $search->exec($controller);
    }
    // Something fucked up, falling back on error message
    catch(Exception $ResHandle_err) {
      errorHandler($ResHandle_err->getMessage(), TRUE);
    }

  benchmark('Generating search content', 'stop');
  
  }

benchmark('Executing search', 'stop');
  
?>
