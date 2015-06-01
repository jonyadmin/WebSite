<?php if(!defined('EFFICIENT_ROOT')) exit; 


  require('root/methods/item_db/search.php');
  require('root/methods/item_db/ItemController.php');  
  
  $SEARCH_GENERIC = 'SEARCH_ITEMS';

  $controller = new ItemController(Settings::get('main', 'drop_rates'), Settings::get('db_struct', 'item_src'), Settings::get('main', 'db_res_paths'), Settings::get('main', 'file_types'));

  // Include a search form in result?
  /*if(!defined('CONTENT_ONLY')) {
  include('layout/item/search_form_include.php');
  }*/

  require('unisearch.php');
    
?>
