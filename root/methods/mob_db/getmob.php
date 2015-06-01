<?php if(!defined('EFFICIENT_ROOT')) exit; 

  function getMob($id) {
    
    try {
      $db = new MySQL();
    }
  
    catch(Exception $e) {
      errorHandler(message('e_sql_con2'));
      return;
    }
    
    try {
      $inc_path = 'root/methods/mob_db/MonsterController.php';
      if(@include($inc_path)) {
        $res = smysql_query("SELECT * FROM `" . Settings::get('db_struct', 'tables', 'mob_src') . "` WHERE `" . Settings::get('db_struct', 'mob_src', 'id') . "`=" . $id);
        $mob = new MonsterController(Settings::get('main', 'drop_rates'), Settings::get('main', 'exp_rates'), Settings::get('main', 'eleProperties'), Settings::get('db_struct', 'mob_src'), Settings::get('main', 'db_res_paths'), Settings::get('main', 'file_types'));
        return $mob->exec($res, 1, 0);
      }
      else {
        errorHandler(sprintf(message('e_error_inc'), $inc_path, __FUNCTION__));
        return;
      }
    }
    
    catch(Exception $e) {
      errorHandler(sprintf(message('e_error_func'), __FUNCTION__));
    }
        
    $db->free();
  
  }


?>