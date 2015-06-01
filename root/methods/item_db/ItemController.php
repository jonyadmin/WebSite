<?php if(!defined('EFFICIENT_ROOT')) exit;

  class ItemController extends Controller {
  
  public $result, $droprate, $fileViewID, $itemDisplayType;
  
  public function __construct($droprates, $db_struct, $res_paths, $file_ext) {
    $this->droprate = $droprates;
    $this->dbstruct = $db_struct;
    $this->respaths = $res_paths;
    $this->mediaext = $file_ext;
  }

  public function prepareView() {
      
      // Set master type
      
      $this->resultDisplayType = $this->getAttr('type');

      // Exception for cards (use ID 4000 for item view)
      
      $viewID = $this->getAttr('id');
      $this->fileViewID = ($viewID > 4000 && $viewID < 4700) ? 4001 : $viewID;
      
      // Set image resource paths
      
      $this->fItem       = $this->respaths['item'] . "/{$this->fileViewID}." . $this->mediaext['item'];
      $this->fCard       = $this->respaths['card'] . '/' . $this->getAttr('id') . '.' . $this->mediaext['card'];
      $this->fCollection = $this->respaths['collection'] . "/" . $this->fileViewID . "." . $this->mediaext['collection'];
      
      // Name
      
      $this->setAttr('name1', str_replace("%_%"," ",$this->getAttr('name1'))); // we wouldn't want our name to contain underscores :(
      
      // Zeny
      
      $value_b = $this->getAttr('value_b');
      $value_s = $this->getAttr('value_s');
      
        if(!ctype_digit($value_b) && ctype_digit($value_s)) {
          $value_n = ($value_s*2);
        } elseif(ctype_digit($value_b)) {
          $value_n = $value_b;
        } elseif(!ctype_digit($value_b) && !ctype_digit($value_s)) {
          $value_n = 20;
        }
          
      $this->setAttr('value_b', (($value_n) . "z / " . ($value_n/2) . "z"));
      
      // Uncompress gzcompressed descriptions
      if(Settings::get('main', 'gzcompressed_desc') === TRUE && $this->getAttr('desc') !== NULL) {
        $this->setAttr('desc', gzuncompress($this->getAttr('desc')));
      }
      
      // Quick fix for random underlines in descriptions
      $this->setAttr('desc', str_replace("_"," ",$this->getAttr('desc')));

      // Monster which drops current item
      // Note: This uses base item type and need to be set before switching it
      
      $mobList = unserialize($this->getAttr('droppers'));

      $alice=(string)'';
    
      if(is_array($mobList)) {

        foreach($mobList as $g => $monster) {
        
          // The following keys in $monster are the values set in the array when importing the droppers
          // not the table column names... (yeah, it's ugly none the less)
          
          $m['name']    = $monster['iName'];
          $m['id']      = $monster['id'];
          $m['itype']   = $monster['type'];
          $m['dropper'] = number_format($monster['dropChance']/100, 2, '.', '');

            // Adjust drop% for alternate rates
            if($m['itype'] == 2) $m['dropper'] *= $this->droprate['item_rate_mvp'];
            else {
              switch($m['itype']) {
                case 0:   $m['dropper'] *= $this->droprate['item_rate_heal'];   break; // Healing item
                case 2:   $m['dropper'] *= $this->droprate['item_rate_use'];    break; // Usable item
                case 11:  $m['dropper'] *= $this->droprate['item_rate_use'];    break; // Delayed usable item
                case 3:   $m['dropper'] *= $this->droprate['item_rate_common']; break; // Misc
                case 4:   $m['dropper'] *= $this->droprate['item_rate_equip'];  break; // Weap
                case 5:   $m['dropper'] *= $this->droprate['item_rate_equip'];  break; // Equip
                case 6:   $m['dropper'] *= $this->droprate['item_rate_card'];   break; // Card
                case 7:   $m['dropper'] *= $this->droprate['item_rate_use'];    break; // Pet egg
                case 8:   $m['dropper'] *= $this->droprate['item_rate_use'];    break; // Pet equip
                case 10:  $m['dropper'] *= $this->droprate['item_rate_use'];    break; // Ammo
                default:  $m['dropper'] *= $this->droprate['item_rate_common'];        // Default
              }
            }
            
            if($m['dropper'] > 100) $m['dropper'] = 100;
            
          $mBind = ($m['itype'] == 2) ? " [<span class=\"alertMVP\">" . message('db_bossmob') . "!</span>]" : '';
          //$alice .= "<a href=\"http://" . CAILL_PATH . "/mobsrc/?cid=on&amp;id=". $m['id'] ."\">". $m['name'] ."</a>$mBind (". $m['dropper'] ."%), "; 
          $alice .= "<a onclick=\"setDisplay('smokescreen');showprop('ajaxFrame','{$m['id']}', 'mobsearch');\">". $m['name'] ."</a>$mBind (". $m['dropper'] ."%), "; 
        }
        
      }
      
      $alice = (strlen($alice) == 0) ? message('db_item_nodrops') : substr_replace($alice,"",-2);
      
      $this->setAttr('droppers', $alice);
      
      // Item type
      
      $item_types = array(
        0 => message('db_item_0'),
        2 => message('db_item_2'),
        3 => message('db_item_3'),
        4 => message('db_item_4'),
        5 => message('db_item_5'),
        6 => message('db_item_6'),
        7 => message('db_item_7'),
        8 => message('db_item_8'),
        10 => message('db_item_10'),
        11 => message('db_item_11'),
        -1 => message('db_item_01'),
      );
      
      $type = $this->getAttr('type');
      $this->setAttr('type',  (isset($item_types[$type]) ? $item_types[$type] : $item_types[-1]));
    
      // Equip location
      
      $loc_types = array(
        1 =>   message('db_iloc_1'),
        2 =>   message('db_iloc_2'),
        4 =>   message('db_iloc_4'),
        8 =>   message('db_iloc_8'),
        16 =>  message('db_iloc_16'),
        32 =>  message('db_iloc_32'),
        34 =>  message('db_iloc_34'),
        64 =>  message('db_iloc_64'),
        128 => message('db_iloc_128'),
        136 => message('db_iloc_136'),
        256 => message('db_iloc_256'),
        512 => message('db_iloc_512'),
        768 => message('db_iloc_768'),
        769 => message('db_iloc_769'),
        -1  => message('db_iloc_01'),
      );
      
      $loc = $this->getAttr('e_loc');
      $this->setAttr('e_loc', (isset($loc_types[$loc]) ? $loc_types[$loc] : $loc_types[-1]));

    }

    public function output($res, $resLim, $resOffset) {

      $e = 0;
      $i = 0;
      $output = (string)"";
              
      while($result = mysql_fetch_array($res)) {
      
        $e++;
      
        if($i >= $resLim) {
        break;
        } 
        
        if($e <= $resOffset) {
        continue;
        }
          
        $this->result = $result;
        $this->prepareView();

          // This switch selects the layout file to use for current item
          
          switch($this->resultDisplayType) {

            // Weapons and equipment
            case 4: 
            case 5: include('layout/item/item_form_equip.php'); break;
            // Cards
            case 6: include('layout/item/item_form_card.php'); break;
            // Default
            default: include('layout/item/item_form_default.php');
            
          }
                  
        $i++;
        
      }
      
      return $output;
        
    }
    
  }

?>