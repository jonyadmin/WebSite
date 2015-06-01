<?php if(!defined('EFFICIENT_ROOT')) exit; 

  class Cache {
  
  public $ident;
  public $uri;
  public $path;
  
    public function __construct($req_data, $path) {
    
    $this->ident = md5(serialize($req_data));
    $this->uri = $path . "/" . $this->ident . ".tmp";
    
    }
    
    public function getCache() {
    
      $cache = @file_get_contents($this->uri);
      
      if($cache === FALSE) {
        throw new Exception('The requested cache content was not found.');
      }
      else {
      echo gzuncompress($cache);
      return TRUE;
      }
    }
  
    public function writeCache($data) {
      
      if(file_exists($this->uri)) {
        throw new Exception('Request to cache content failed. Cache file already present.');
      }
      
      $handle = fopen($this->uri, 'w');
      
      if(!fwrite($handle, gzcompress($data))) {
        throw new Exception('Failed to write cache content to file. (File write permission error?)');
      }
      
      if(DEBUG == TRUE && !defined('CONTENT_ONLY') && USE_CACHE == TRUE) {
        debugHandler('Cache generated to <code>' . $this->uri . '</code>');
      }
      
      fclose($handle);
      return $this;
      
    }
  
  }


?>