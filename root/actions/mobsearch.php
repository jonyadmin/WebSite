<?php 

  require('root/methods/mob_db/search.php');
  require('root/methods/mob_db/MonsterController.php');
  
  $SEARCH_GENERIC = 'SEARCH_MOBS';

  $controller = new MonsterController(Settings::get('main', 'drop_rates'), Settings::get('main', 'exp_rates'), Settings::get('main', 'eleProperties'), Settings::get('db_struct', 'mob_src'), Settings::get('main', 'db_res_paths'), Settings::get('main', 'file_types'));

  require('unisearch.php');
  
?>