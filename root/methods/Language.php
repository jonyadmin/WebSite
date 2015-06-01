<?php if(!defined('EFFICIENT_ROOT')) exit();

  function message($str) {
      
    static $lang;
    
    if(!is_array($lang)) {
      $lang = include('language/'. Settings::get('main', 'global_vars', 'DEFAULT_LANGUAGE') .'.php');
    }
     
    return array_key_exists($str, $lang) ? $lang[$str] : '*';
  
  }


?>