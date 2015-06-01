<?php
  
  header("Cache-Control: no-cache, must-revalidate");
  header("Expires: Mon, 26 Jul 1995 05:00:00 GMT");

  define('CONTENT_ONLY', TRUE);

  require('root/global.php');
  global_reporting(0);
  
  header("Content-type: text/html; charset=" . EFFICIENT_CHARSET);
  
  $db = new MySQL();
  
  $monster = $_GET['q'];  
  $type = $_GET['type'];  
  $res = array();

  echo "<span class='ffruit'>" . message('ajax_suggest') . ":</span> ";
  if(strlen($monster) > 1 && ($type == 'monster' || $type == 'item')) {
    
    if($type == 'monster') {
      $idvar    = Settings::get('db_struct', 'mob_src', 'id');
      $dbname   = Settings::get('db_struct', 'tables', 'mob_src');
      $namevar  = Settings::get('db_struct', 'mob_src', 'name2');
      $db->query("SELECT DISTINCT $namevar, $idvar FROM $dbname WHERE $namevar LIKE '%" . $db->escape($monster) . "%' LIMIT 4;");
    }
    else {
      $idvar    = Settings::get('db_struct', 'item_src', 'id');
      $namevar  = Settings::get('db_struct', 'item_src', 'name1'); 
      $dbname   = Settings::get('db_struct', 'tables', 'item_src');
      $slotvar  = Settings::get('db_struct', 'item_src', 'slots');
      $db->query("SELECT DISTINCT $namevar, $idvar, $slotvar FROM $dbname WHERE $namevar LIKE '%" . $db->escape($monster) . "%' LIMIT 4;");
    }
    
    
    while($curItem = $db->fetchArray()) {
      if($type == 'item' && $curItem[$slotvar] > 0) {
        $curItem[$namevar] .= "[" . $curItem[$slotvar] . "]";
      }
      $src_act = ($type == 'item') ? 'itemsearch' : 'mobsearch';
      $res[] = "<a class=\"headline\" href=\"?act={$src_act}&amp;cid=on&amp;id={$curItem[$idvar]}\">".$curItem[$namevar] . "</a>";
    }

    echo (!count($res)) ? sprintf(message('ajax_noRes'), message('ajax_'.$type)) : implode($res,', ');

    $db->free();

  }

  else {
    printf(message('ajax_inform'), message('ajax_'.$type));
  }

?>