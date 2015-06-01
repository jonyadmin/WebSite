<?php if(!defined('EFFICIENT_ROOT')) exit();

  class Settings {
  
    static function set($src=FALSE) {
    
      static $settings;

      if(!is_array($settings)) {
        $settings = array();
      }
      if(is_array($src)) {
        $settings = array_merge($settings, $src);
      }
      
      return $settings;
    
    }
  
    static function get($src) {
      
    static $settings;
    
      if(!is_array($settings)) {
        $settings = array();
      }
      
      if(!array_key_exists($src, $settings)) {
        $settings[$src] = ErodsConfig::LoadConfig($src);
      }

      $fconf = Settings::set();
      
      $opt = $settings[$src];
      $svd = array_key_exists($src, $fconf) ? $fconf[$src] : NULL;
      
      $num_args = func_num_args();
      
      for($i=1; $i<$num_args; $i++) {
        
        if(isset($svd[func_get_arg($i)]) && $svd !== NULL) {
          $svd = $svd[func_get_arg($i)];
        }
        else {
          $svd = NULL;
        }
        
        if(isset($opt[func_get_arg($i)])) {
          $opt = $opt[func_get_arg($i)];
        }
        else {
          return FALSE;
        }
      
      }
      
      return ($svd !== NULL) ? ((is_array($svd) && is_array($opt)) ? $svd+$opt : $svd) : $opt;
      
    }
  
  }
  
  class ErodsConfig {
  
    static function LoadConfig($src) {
    
      $inc = PATH_CONFIG .'/'.$src.'.php';
      
      if(file_exists($inc)) {
        return include($inc); 
      }
      else {
        return FALSE;
      }
      
    }
  
  }


?>