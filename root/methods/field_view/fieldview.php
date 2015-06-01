<?php if(!defined('EFFICIENT_ROOT')) exit;

  $map_name = $_GET['field'];

  $check_map = $db->query("SELECT " . Settings::get('db_struct', 'spawns', 'title') . " FROM " . Settings::get('db_struct', 'tables', 'spawns') . " WHERE " . Settings::get('db_struct', 'spawns', 'map') . "='" . $db->escape($map_name) . "' LIMIT 1")->fetchArray();

    if($check_map[0]==TRUE) {

        $thisMapQuery = $db->query("SELECT * FROM " . Settings::get('db_struct', 'tables', 'spawns') . " WHERE " . Settings::get('db_struct', 'spawns', 'map') . "='$map_name'");

        $thisMapTotalSpawn = array();
      
        while($spawn = $db->fetchArray()) {

          if(isset($thisMapTotalSpawn[$spawn['mob_id']]['amount']) && is_numeric($thisMapTotalSpawn[$spawn['mob_id']]['amount'])) {
            $thisMapTotalSpawn[$spawn['mob_id']]['amount'] += $spawn['amount'];
          }
          
          else {
            $thisMapTotalSpawn[$spawn['mob_id']] = array (
            'mob_name'  => $spawn['mob_name'],
            'amount'    => $spawn['amount']
            );
          }
        
        }
        
        $db->free();
      
        $thisMapReadAbleSpawns  = "";
        $thisMapMonsterIdents   = "";
      
        foreach($thisMapTotalSpawn as $mobID => $spawnProp) {
        
        $thisMapReadAbleSpawns .= "<li><a href=\"#monster$mobID\">". $spawnProp['mob_name'] ."</a> [". $spawnProp['amount'] ."]</li>";
        
        $thisMapMonsterIdents .= "OR " . Settings::get('db_struct', 'mob_src', 'id') . "=$mobID ";
        
        }
      
      $thisMapGetMonsters = $db->query("SELECT * FROM " . Settings::get('db_struct', 'tables', 'mob_src') . " WHERE" . substr($thisMapMonsterIdents,2)); 

      $mobResult = new MonsterController(Settings::get('main', 'drop_rates'), Settings::get('main', 'exp_rates'), Settings::get('main', 'eleProperties'), Settings::get('db_struct', 'mob_src'), Settings::get('main', 'db_res_paths'), Settings::get('main', 'file_types'));
      
      $monsterTables = $mobResult->output($db->query, 100, 0);
      
        $db->free();
      
      $STATISTICS = $mobResult->statistics;

      $resPaths = Settings::get('main', 'db_res_paths');
      $fileType = Settings::get('main', 'file_types');

      function setMapStatistics($thisMapStatistics) {
        foreach($thisMapStatistics as $thisMapMonsterProperty => $thisMapMonsterAmount) {          
          if($thisMapMonsterAmount == TRUE) {
            return "<li>" . $thisMapMonsterProperty . " (" . $thisMapMonsterAmount . ")</li>\n";
          }
        }
      }

      include('layout/field/field_view.php');
      
    }

    else {
      echo errorHandler(sprintf(message('map_noRes'), $map_name));
    }
  
?>