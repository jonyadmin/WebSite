<?php if(!defined("EFFICIENT_ROOT")) exit;

  if(!file_exists('root/actions/'. ACTION .'.php')) {
    if(Settings::get('main', 'plugins', 'enable_plugins') == TRUE && file_exists(Settings::get('main', 'plugins', 'plugin_dir') . '/'. ACTION .'.php')) {
      include($options['plugins']['plugin_dir'] . '/'. ACTION .'.php');
    }
    else {
      if(DEBUG == TRUE) {
        debugHandler((file_exists('root/actions/' . ACTION . '.php')) ? 'File <code>root/actions/'. ACTION .'.php</code> can\'t be included (perhaps permission error)' : 'File <code>root/actions/'. ACTION .'.php</code> not found');
      }
      errorHandler(message('e_notFound'), FALSE, 404);
    }
  }
  else {
    include('root/actions/'. ACTION .'.php');
  }

?>
