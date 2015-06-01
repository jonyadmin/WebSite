<?php

 /* if(!set_magic_quotes_runtime(0)) {
    exit('Unable to disable runtime magic quotes. Disable runtime_magic_quotes in your PHP.ini before attempting to use ERODS.');
  }*/

  define('EFFICIENT_ROOT', TRUE);
  define('PATH_CONFIG', 'root/settings');
  define('DEBUG', FALSE);

  require("root/methods/Settings.php");
  require("root/methods/Language.php");
  require('root/common.php');

  $_GET['act'] = str_replace(array("/", ".", "\\"), "", ((!isset($_GET['act'])) ? 'default' : $_GET['act']));
  
  define('ACTION', $_GET['act']);
  define('GROUP_ID', ((Settings::get('interface', 'act_group', ACTION) === TRUE) ? Settings::get('interface', 'act_group', ACTION) : 0 ));
  define('VIEW_ID', ((Settings::get('interface', 'groups', GROUP_ID, 'opt') === TRUE) ? GROUP_ID : 0 ));
  define('PAGE_TITLE', 'RagnaChaos - DataBase ' . ((Settings::get('interface', 'groups', GROUP_ID, 'name') !== FALSE && GROUP_ID != 0) ? '&raquo; ' . Settings::get('interface', 'groups', GROUP_ID, 'name') : '' ));

  // User
  if(!isset($_SESSION['auth'])) $_SESSION['auth'] = FALSE;
  define('AUTH', $_SESSION['auth']);
  
  // Load user options
  if(isset($_SESSION['options'])) {   
    foreach($_SESSION['options'] as $cat => $opt) {
      foreach($opt as $t => $val) {
      if($t == 'sql' || $t == 'global_vars') {
        ob_flush();
        die();
      }
      $options[$cat][$t] = $val;   
      }
    }
    Settings::set(array('main' => $options));  
  }

  // Set constants
  foreach(Settings::get('main', 'global_vars') as $const => $val) {
    define($const, $val);
  }

  // Set default language databases
  
  function setLangDatabase($str) {
    return $str . '_' . (isset($_SESSION['language']) && strlen($_SESSION['language']) >= 2 && strlen($_SESSION['language']) <= 4 ? $_SESSION['language'] : Settings::get('main', 'global_vars', 'DEFAULT_LANGUAGE'));
  }
  
  Settings::set(array('db_struct' => array('tables' => array_map('setLangDatabase', Settings::get('db_struct', 'tables')))));

  // --- Load plugins
  
  benchmark('Plugins');
  
  if(Settings::get('main', 'plugins', 'enable_plugins') == TRUE) {
    require(Settings::get('main', 'plugins', 'plugin_dir') . "/plugins.php");
  }
  
  benchmark('Plugins', 'stop');

  
?>
