<?php if(!defined('EFFICIENT_ROOT')) exit; 

    try {

      $db = new MySQL();
      
      $allmaps = $db->query("SELECT DISTINCT " . Settings::get('db_struct', 'spawns', 'map') . ", " . Settings::get('db_struct', 'spawns', 'title') . " FROM " . Settings::get('db_struct', 'tables', 'spawns') . " ORDER BY " . Settings::get('db_struct', 'spawns', 'title'));

      $list_maps1=$list_maps2=array(); 
      $listMapsByID=$listMapsByName="";
      
        while($map = $db->fetchArray()) {
        $list_maps1[] =  $map[Settings::get('db_struct', 'spawns', 'map')];
        $list_maps2[$map[Settings::get('db_struct', 'spawns', 'map')]] = $map[Settings::get('db_struct', 'spawns', 'title')] . " [" . $map[Settings::get('db_struct', 'spawns', 'map')] . "]";
        }
      $db->free();
      
      asort($list_maps1);
      require('layout/' . ACTION . '/field_search.php');
      
    }
    
    catch(Exception $e) {
      if(defined('DEBUG')) {
        debugHandler(message('map_fieldunv') . $e->getMessage());
      }
      else {
        errorHandler(message('map_fieldunv'));
      }
    }
    
?>