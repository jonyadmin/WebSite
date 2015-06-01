<?php if(!defined('EFFICIENT_ROOT')) exit;

function SEARCH_MOBS($GET, $dbstruct) {

  global $options;

  $mdbs = $dbstruct['mob_src'];

    // function for adding weight and price search to query
    function query_add(&$query,$value,$checkbox,$limiter,$isearch_value,&$continue) {
    
      if(!empty($checkbox)) {
        switch($limiter) {
            case 1:   $bind  = ">"; break;
            case 2:   $bind  = "<"; break;
            default:  $bind  = "="; 
            }
            
      $query .= " " . bindQuery($continue) . " " . $isearch_value . $bind . $value;
      $continue = 1;
      }
      
    }
// --- Import GET data

  $getVariables = array(
  'cid',
  'ccsrc',
  'ciid',
  'cname',
  'cmvp',
  'clevel',
  'cexp',
  'cjexp',
  'crace',
  'chp',
  'csize',
  'cdisplayorder',
  'cascorder',
  'celement',
  'olevel',
  'ohp',
  'oexp',
  'ojexp',
  'oelement',
  'osize',
  'id',
  'iid',
  'level',
  'name',
  'hp',
  'exp',
  'jexp',
  'displayorder',
  'ascorder',
  'element',
  'race'
  );
  
  
    foreach($GET as $getKey => $getData) {
      if(in_array($getKey, $getVariables)) {
      $$getKey = $getData;
      }
    }

  // --- Check if ID, LEVEL are numeric values, unset checkboxes on error
  
    if(!ctype_digit($id) || $id <= 0) {
    unset($cid);
    }
    
    if(!ctype_digit($iid)) {
    unset($ciid);
    }
    
    if(!ctype_digit($lvl)) {
    unset($clvl);
    }
    
    if(!ctype_digit($olvl)) {
    unset($clvl);
    }
    
    if(!ctype_digit($hp)) {
    unset($chp);
    }
    
    if(!ctype_digit($ohp)) {
    unset($chp);
    }
 
    if(!ctype_digit($exp)) {
    unset($cexp);
    }
    
    if(!ctype_digit($oexp)) {
    unset($cexp);
    }
    
    if(!ctype_digit($jexp)) {
    unset($cjexp);
    }
    
    if(!ctype_digit($ojexp)) {
    unset($cjexp);
    }
    
    if(!ctype_digit($osize)) {
    unset($csize);
    }
    
   if(isset($displayorder)) {
    if(!ctype_digit($displayorder)){
    unset($cdisplayorder);
    }
   }
   if(isset($ascorder)) {
    if(!ctype_digit($ascorder)){
    unset($cascorder);
    }
   }
        
  // --- Check if element is a number from 0-9 and oelement is either 2, 4, 6 or 8
    
    if(!ctype_digit($element) || $element<0 || $element>10) {
    unset($celement);
    }
    
    if(!ctype_digit($oelement) || $oelement>9 || $oelement<1 || $oelement%2!=0) {
    unset($celement);
    }

  // --- Check if race is number from 0-9
  
    if(!ctype_digit($race) || $race > 9 || $race < 0) {
    unset($crace);
    }

// --- Build QUERY

$MOB_SEARCH = "SELECT * FROM " . $dbstruct['tables']['mob_src'];

// if either of item ID or custom item view option is set 
// the script will not check any other values

/*  // View custom items
  if($ccsrc) {
  $customMobs = explode(" ", CUSTOM_MOBS);
    $g;
    foreach($customMobs as $customMob) {
    $MOB_SEARCH .= ($g == FALSE) 
    ? " WHERE " . $mdbs['id'] . "='$customMob'" 
    : " OR " . $mdbs['id'] . "='$customMob'";
    $g++;
    }
  }*/

  // --- in-game id
  if(isset($cid)) { $MOB_SEARCH .= " WHERE " . $mdbs['id'] . "='$id'"; 
  }
  
  // in case no item id is set search the other values
  else {
  
    // --- name (displayed)
    if(!empty($cname)) { 
    $MOB_SEARCH .= " WHERE " . $mdbs['name2'] . " LIKE '%" . addslashes($name) . "%'"; 
    $continue = 1; 
    }
    
    // --- Is monster MvP?
    if($cmvp == TRUE) {
    $MOB_SEARCH .= " " . bindQuery($continue) . " " . $mdbs['mexp'] . ">'0'";
    $continue = 1;
    }
    
    // --- Search for drop ID
    
    if($ciid == TRUE) {
    $MOB_SEARCH .= " " . bindQuery($continue) . " " . $mdbs['drops'] . " LIKE '%:\"" . $iid . "\";s:%'"; 
    $continue = 1;
    }

    // --- Checkbox, select dropdown & input for monster LEVEL
    query_add($MOB_SEARCH,$level,$clevel,$olevel,$mdbs['mob_lvl'],$continue);
    
    // --- Checkbox, select dropdown & input for monster Hit Points
    query_add($MOB_SEARCH,$hp,$chp,$ohp,$mdbs['mob_HP'],$continue);
    
    // --- Checkboxes, dropdorwns and input for bexp & jexp
    query_add($MOB_SEARCH,$exp/$options['exp_rates']['bexp'],$cexp,$oexp,$mdbs['exp'],$continue);
    query_add($MOB_SEARCH,$jexp/$options['exp_rates']['jexp'],$cjexp,$ojexp,$mdbs['jexp'],$continue);

    // --- Size of monster
    if($csize == TRUE) {
      switch($osize) {
      case 1: $MOB_SEARCH .= " " . bindQuery($continue) . " " . $mdbs['size'] . "=2"; break;
      case 2: $MOB_SEARCH .= " " . bindQuery($continue) . " " . $mdbs['size'] . "=1"; break;
      case 3: $MOB_SEARCH .= " " . bindQuery($continue) . " " . $mdbs['size'] . "=0"; break;
      } $continue = 1;
    }

    // --- Element
    if($celement == TRUE) {
    $MOB_SEARCH .= " " . bindQuery($continue) . " " . $mdbs['element'] . "=" . addslashes($oelement) . addslashes($element);
    $continue = 1;
    }
    
    // --- Race
    if($crace == TRUE) {
    $MOB_SEARCH .= " " . bindQuery($continue) . " " . $mdbs['race'] . "=" . addslashes($race);
    $continue = 1;
    }
   
    // --- Display order
   
   
    if(isset($cdisplayorder) && isset($displayorder)) {
      switch($displayorder) {
        case 100: $ORDERTYPE = $mdbs['name2'];           break;
        case 200: $ORDERTYPE = $mdbs['id']; break;
        case 300: $ORDERTYPE = $mdbs['exp']; break;
        case 400: $ORDERTYPE = $mdbs['jexp']; break;
        default:  $ORDERTYPE = $mdbs['id'];
      }
      $MOB_SEARCH  .= " ORDER BY " . $ORDERTYPE;
      if(isset($cascorder) && isset($ascorder)) {
        $MOB_SEARCH .= ' ' . ((intval($ascorder) == 200) ? 'DESC' : 'ASC');
      }
    }
    
  }

  // Debug: display query

    if(DEBUG == TRUE) {
      debugHandler("Current query is <code>" . $MOB_SEARCH . "</code>");
    }
  
  // --- return query;

  return $MOB_SEARCH;

}

?>