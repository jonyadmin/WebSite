<?php if(!defined('EFFICIENT_ROOT')) exit;

function SEARCH_ITEMS($get, $dbstruct) {
  
  $idbs = $dbstruct['item_src'];

  // Import active GET data

  $getVariables = array(
  'cid',
  'ccsrc',
  'cname',
  'cweight',
  'oweight',
  'ctype',
  'cprice',
  'oprice',
  'cdesc',
  'cdisplayorder',
  'id',
  'name',
  'desc',
  'weight',
  'type',
  'price',
  'displayorder'
  );
  
  foreach($get as $getKey => $getData) {
    if(in_array($getKey, $getVariables)) {
    ${$getKey} = $getData;
    }
  }

  // Check if ID, WEIGHT, ITEM TYPE, DISPLAYORDER and PRICE are numeric values
  
   if(isset($id) && isset($cid)) {
    if(!intval($id)){
    unset($cid);
    }
   }
   
   if(isset($weight) && isset($cweight)) {
    if(!intval($weight)){
    unset($cweight);
    }
   }
   
   if(isset($type) && isset($ctype)) {
    if(!intval($type)){
    unset($ctype);
    }
   }
   
   if(isset($price) && isset($cprice)) {
    if(!intval($price)){
    unset($cprice);
    }
   }

   if(isset($displayorder)) {
    if(!intval($displayorder)){
    unset($cdisplayorder);
    }
   }

  // Build QUERY

  $continue=0;

  $ITEM_SEARCH = "SELECT * FROM " . $dbstruct['tables']['item_src'];

  /*

  // View custom items
  if(isset($ccsrc)) {
  $customItems = explode(" ", CUSTOM_ITEM);
    $g=0;
    foreach($customItems as $customItem) {
      if($g == FALSE) {
      $ITEM_SEARCH .= " WHERE";
      }
      else {
      $ITEM_SEARCH .= " OR";
      }
    $ITEM_SEARCH .= " " . COL_IID . "='$customItem'";
    $g++;
    }
  }

  */

// Note: if item ID is set the DB will not check any other values
  // in-game id
  
  if(isset($cid))
    $ITEM_SEARCH .= " WHERE " . $idbs['id'] . "='$id'"; 
  
  // in case no item id is set search the other values
  else {
  
    // name (displayed)
    if(!empty($cname))   { $ITEM_SEARCH .= " WHERE " . $idbs['name1'] . " LIKE '%" . addslashes($name) . "%'"; $continue = 1; 
    }
    
    
    // function for adding weight and price search to query
    function query_add($query,$value,$checkbox,$limiter,$isearch_value,&$continue) {
    
      if(!empty($checkbox)) {
        switch($limiter) {
            case 1:   $bind  = ">"; break;
            case 2:   $bind  = "<"; break;
            default:  $bind  = "="; 
            }
            
      $query .= " " . bindQuery($continue) . " " . $isearch_value . $bind . $value;
      $continue = 1;
      }
      
      return $query;
      
    }
  
    if(isset($cweight)) 
    $ITEM_SEARCH = query_add($ITEM_SEARCH,$weight*10,$cweight,$oweight,$idbs['weight'],$continue);    
    
    if(isset($cprice))  
    $ITEM_SEARCH  = query_add($ITEM_SEARCH,$price,$cprice,$oprice,$idbs['value_b'],$continue);

    // item type
    if(isset($ctype))   {
        if($type == 13) {
        $ITEM_SEARCH  .= " ". bindQuery($continue) ." " . $idbs['type'] . "='2' OR " . $idbs['type'] . "='11'";
        }
        else {
        $ITEM_SEARCH  .= " ". bindQuery($continue) ." " . $idbs['type'] . "=$type";
        }
    $continue = 1; 
    }

    // Description search
    
    if(isset($cdesc)) {
      $desc = split(',',preg_replace("/ /","",$desc));
        
      foreach($desc as $ea_desc) {
      
      $LINKER = ($continue == 1) ? "AND" : "WHERE";
      
        if(strlen($ea_desc) < 3) { 
        continue; 
        }
        
        else { 
        
          if(substr($ea_desc, 0, 1) == " ") {
          $ea_desc = substr($ea_desc, 1);
          }
          
        $ITEM_SEARCH  .= " $LINKER " . $idbs['desc'] . " LIKE '%" . addslashes($ea_desc) . "%'";
        $continue = 1;
        
        }
        
      }

    }

  }
  
  // Display order
    
  if(isset($cdisplayorder) && isset($displayorder)) {
    switch($displayorder) {
      case 100: $ORDERTYPE = $idbs['name1'];           break;
      case 200: $ORDERTYPE = $idbs['name1'] . " DESC"; break;
      default:  $ORDERTYPE = $idbs['id'];
    }
    $ITEM_SEARCH  .= " ORDER BY " . $ORDERTYPE;
  }

  // Debug: display query

    if(DEBUG == TRUE)
      debugHandler("Current query is <code>" . $ITEM_SEARCH . "</code>");

  // Query the database

    return $ITEM_SEARCH;
  
}

?>