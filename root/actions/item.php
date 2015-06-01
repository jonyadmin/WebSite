<?php if(!defined('EFFICIENT_ROOT')) exit; 

  if(Settings::get('main', 'enable_custom_src') === TRUE) {
    require('layout/' . ACTION . '/search_form_custom.php');
  }
    
  else {
    require('layout/' . ACTION . '/search_form.php');
  }

?>