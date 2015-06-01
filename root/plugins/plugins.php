<?php if(!defined('EFFICIENT_ROOT')) exit;

  foreach(glob($options['plugins']['plugin_dir'].'/*', GLOB_ONLYDIR) as $dir) {
  
    if(file_exists($dir . "/global_options.php"))
      if(!@include($dir . "/global_options.php"))
        if(DEBUG == TRUE) 
          debugHandler("Failed to load global options for plug-in in folder <code>" . $dir . "</code>!
          If you can't fix it you should probably disable the plug-in.");
  } 

?>