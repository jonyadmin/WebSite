<?php if(!defined('EFFICIENT_ROOT')) exit;

  // --- Print monster results

  // This is the MonsterController class from the Cailloux project.
  // I liked this one better than the other variant, so I decided to copy/paste this in with
  // minimal changes instead of trying to work with the old MOB_PRINT_RESULTS function.
  
  // Basic use goes like this:
  
  // Initialize
  // $var = new MonsterController(DROP_RATE, DB_STRUCT_MOB, MEDIA_RES_PATHS, MEDIA_FILE_TYPES);
  
  // Output result with something like this
  // $var->runMonsterRes(SQL_OUTPUT, OUTPUT_LIMIT, OUTPUT_OFFSET);

  class MonsterController extends Controller {
  
  public $layout, $lpath;
  public $droprate, $exprate, $eleprop;
  public $eattk, $defence;
  
  public function __construct($droprates, $exprates, $eleprops, $db_struct, $res_paths, $file_ext) {
    $this->droprate = $droprates;
    $this->dbstruct = $db_struct;
    $this->respaths = $res_paths;
    $this->mediaext = $file_ext;
    $this->exprate = $exprates;
    $this->eleprop = $eleprops;
  }

   /*********************************/
   /* Elemental damage calculation
   /*********************************/
   static function setElements($el) {

    $t=0;
    $elements = array('neutral', 'water', 'earth', 'fire', 'wind', 'poison', 'holy', 'shadow', 'ghost', 'undead');
    foreach($elements as $k=>$v) {
      $element_attack[$v] = (($el[$t] > 1) ? '<span style=\'color: #00aa00\'>' : (($el[$t] < 0) ? '<span style=\'color: #aa0000\'>' : '<span>')) . $el[$t]*100 . '</span>';
      $t++;
    }

    return $element_attack;

   }

    public function monsterMode($mode) {

      $array_mode = array(
        1     =>  message('db_mode01'),
        2     =>  message('db_mode02'),
        4     =>  message('db_mode03'),
        8     =>  message('db_mode04'),
        16    =>  message('db_mode05'),
        32    =>  message('db_mode06'),
        64    =>  message('db_mode07'),
        128   =>  message('db_mode08'),
        256   =>  message('db_mode09'),
        512   =>  message('db_mode10'), // Not used anymore
        1024  =>  message('db_mode11'),
        2048  =>  message('db_mode12'),
        4096  =>  message('db_mode13'),
        8192  =>  message('db_mode14'),
      );
        
      $result = array();
        
      $z="";

        for($i = 0;$i <= 13;$i++) {
           if($mode & pow(2,$i)) {
               $result[] = pow(2,$i);
           }
           elseif($i == 0) {
           $z .= '<li>' . message('db_mode00') . '</li>' . "\n";
           }
        }

        // Some modes are being skipped from being printed
        foreach($result as $k=>$v) {
          if($v == 1 || $v == 128 || $v == 512) {
            continue;
          }
          else {
            $z .= "<li>{$array_mode[$v]}</li>";
          }
        }
        
        if(!$z) {
          $z = "    <li>" . message('db_mode-1') . "</li>\n";
        }
        
        return "<ul>".$z."</ul>";
    }
    
    private function monsterSkills($array) {
    
      $Skills = unserialize($array);
      $sUtil  = array(); 
      $sTotal = "";
      
      if(is_array($Skills) && count($Skills) > 0) {
      
        foreach ($Skills as $key => $sData) {
          
          switch($sData['skillState']) {
            case 'idle':    $sState = message('db_sstate1'); break;
            case 'attack':  $sState = message('db_sstate2'); break;
            case 'follow':  $sState = message('db_sstate3'); break;
            case 'angry':   $sState = message('db_sstate4'); break;
            case 'chase':   $sState = message('db_sstate5'); break;
            case 'walk':    $sState = message('db_sstate6'); break;
            default: $sState = '???';
          }
          
          if($sData['skillName'] == "NPC_KEEPING" || $sData['skillName'] == "NPC_EMOTION" || $sData['skillName'] == "NPC_SMOKING" || $sData['skillName'] == "NPC_EMOTION_ON" || $sData['skillName'] == "")
            continue;
            
          elseif(array_key_exists($sData['skillID'].$sData['skillLvL'], $sUtil)) 
            continue;
            
          $sTotal .= "<li><a title=\"$sState\">" . message('db_skillvl')  . " " . $sData['skillLvL'] . " " . $sData['skillTitle'] . "</a></li>";
          $sUtil[$sData['skillID'].$sData['skillLvL']] = TRUE; 
          
        }
        
        $Skills = (empty($Skills)) ? "" : "<ul>$sTotal</ul>";
        
      } 
      
      else $Skills = "<ul><li>" . message('db_noskills') . "</li></ul>";
      
      return $Skills;
    
    }
    
    // Use: createItemDropTable([array with item drops], [drop type, 1=regular; 2=MvP drops])
    public function createItemDropTable($ItemDrops, $dropType) {

      $ItemDrops = unserialize($ItemDrops);

      $totalItems = count($ItemDrops);
     
       $g=0;
       $dropTable="";

      if(!is_array($ItemDrops))
        return "<center>N/A</center>";
      
      foreach($ItemDrops as $Item) {
      
        $i['id']      = $Item['id'];
        $i['name']    = $Item['name'];
        $i['type']    = $Item['type'];
        $i['dropper'] = number_format($Item['dropChance']/100, 2);
        
      if($dropType == 2) $i['dropper'] *= $this->droprate['item_rate_mvp'];
      
      else {
        switch($i['type']) {
          case 0:   $i['dropper'] *= $this->droprate['item_rate_heal'];   break; // Healing item
          case 2:   $i['dropper'] *= $this->droprate['item_rate_use'];    break; // Usable item
          case 11:  $i['dropper'] *= $this->droprate['item_rate_use'];    break; // Delayed usable item
          case 3:   $i['dropper'] *= $this->droprate['item_rate_common']; break; // Misc
          case 4:   $i['dropper'] *= $this->droprate['item_rate_equip'];  break; // Weap
          case 5:   $i['dropper'] *= $this->droprate['item_rate_equip'];  break; // Equip
          case 6:   $i['dropper'] *= $this->droprate['item_rate_card'];   break; // Card
          case 7:   $i['dropper'] *= $this->droprate['item_rate_use'];    break; // Pet egg
          case 8:   $i['dropper'] *= $this->droprate['item_rate_use'];    break; // Pet equip
          case 10:  $i['dropper'] *= $this->droprate['item_rate_use'];    break; // Ammo
          default:  $i['dropper'] *= $this->droprate['item_rate_common'];        // Default
        }
      }
     
      if($i['dropper'] > 100) $i['dropper'] = 100;
     
      // Image file is fixed to 4001 for all cards.
      $imgID = ($i['id'] >= 4000 && $i['id'] <= 5000) 
        ? "4001"
        : $i['id'];
      
      $imgFileName = $imgID ."." . $this->mediaext['item'];

      //$alice = "<a href=\"http://" . CAILL_PATH . "/itemsearch/?cid=on&amp;id=". $ItemID ."&ccoll_d=on\">$ItemName</a> ($ItemDropChance%)";
      $alice = "<a onclick=\"setDisplay('smokescreen'); showprop('ajaxFrame','" . $i['id'] . "', 'itemsearch');\">". $i['name'] ."</a> (". $i['dropper'] ."%)"; 
     
      $g++;
     
      $dropTable .= ($g == 1) 
        ? "<table cellspacing=\"1\" style=\"width: 100%\"><tr>"
        : (($g-1)%3 == 0
          ? "<tr>"
          : "")
        ;

      $dropTable .= "<td style=\"width: 33%\"><img onclick=\"popUp('" . $this->respaths['collection'] . "/" . $imgID . "." . $this->mediaext['collection'] . "')\" src=\"" . $this->respaths['item'] . "/" . $imgFileName .  "\" alt=\"{$i['name']}\" /> $alice</td>\n";
            
      if($g%3 == 0 || $g == $totalItems)
      
        $dropTable = ($g == 2) 
          ? $dropTable .= "<td style=\"width: 33%\"></td></tr>"
          : $dropTable .= "</tr>";

      if($g == $totalItems) 
      
        $dropTable .= "</table>\n\n";
     
     }
     
     return($dropTable);

    }


    public function prepareView() {
      
      $this->setAttr('exp',$this->getAttr('exp')*$this->exprate['bexp']);
      $this->setAttr('jexp',$this->getAttr('jexp')*$this->exprate['jexp']);
      
      // Race
      
      $race = $this->getAttr('race');
      
      switch($race) {
        case 0: $race = message('db_mob_race0'); break;
        case 1: $race = message('db_mob_race1'); break;
        case 2: $race = message('db_mob_race2'); break;
        case 3: $race = message('db_mob_race3'); break;
        case 4: $race = message('db_mob_race4'); break;
        case 5: $race = message('db_mob_race5'); break;
        case 6: $race = message('db_mob_race6'); break;
        case 7: $race = message('db_mob_race7'); break;
        case 8: $race = message('db_mob_race8'); break;
        case 9: $race = message('db_mob_race9'); break;
        default: $race = message('db_mob_race-1'); break;
      }
      
      $this->setStatistics('Race', $race);
      $this->setAttr('race',$race);
      
      // Defence / dmg. reduction

      $this->defence = $this->getAttr('defence') . ' ' . message('db_stat_def') . ' (' . (number_format($this->getAttr('defence')*(2/3),2)) . "% " . message('db_def_reduct') . ") / " . $this->getAttr('m_defence') . ' ' . message('db_stat_mdef');
      
      // Monster mode
      
      $this->setAttr('mode', $this->monsterMode($this->getAttr('mode')));
      
      // Dodge 95%

      $this->result['dodge'] = (75+$this->getAttr('mob_lvl')+$this->getAttr('dex'));
     
      // Hit 100%
     
      $this->result['hit'] = (20+$this->getAttr('mob_lvl')+$this->getAttr('agi'));
      
      // Walking speed
      
      $speed = $this->getAttr('speed');
      
      $speed_real = ($speed == 0) ? "" : "(". number_format(1000/$speed,2) . " " . message('db_cells_sec') . ")";
       
      if     ($speed > 500) $speed = message('db_walkspd1');
      elseif ($speed > 350) $speed = message('db_walkspd2');
      elseif ($speed > 300) $speed = message('db_walkspd3');
      elseif ($speed > 250) $speed = message('db_walkspd4');
      elseif ($speed > 200) $speed = message('db_walkspd5');
      elseif ($speed > 150) $speed = message('db_walkspd6');
      elseif ($speed > 100) $speed = message('db_walkspd7');
      elseif ($speed >= 1)  $speed = message('db_walkspd8');
      else                  $speed = message('db_walkspd9');
      
      $this->setAttr('speed',$speed." ".$speed_real);
      
      // Scale
      
      $scale = $this->getAttr('size');
      
      $scale = ($scale >= 0 && $scale < 4) ? message('db_mob_scale'.($scale)) : message('db_mob_scale3');
      
        $this->setStatistics('Size', $scale);
      
      $this->setAttr('size',$scale);
       
      // Range 1
      
      $range1 = $this->getAttr('range1');
      $range1 = ($range1 < 0 || $range1 > 2) ? message('db_mob_range13') : message('db_mob_range'.($range1+11));
      
        $this->setStatistics('Range', $range1);
       
      $this->setAttr('range1',$range1);
      
      // Element
      
        list($eLV,$eType) = str_split($this->getAttr('element'),1);
        
        // Elemental property damage

        $e_attack = $this->setElements($this->eleprop[$eLV][$eType]);
        
        $eLV *= 0.5;
        
        $eType = ($eType < 0 || $eType > 9) ? message('mElementNA') : message('mElement'.$eType);
                
          $this->setStatistics('Element', $eType . ' ' . $eLV);
        
        // Set element&lvl + elemental resistance.
        $this->setAttr('element',($eType." ".$eLV));
        $this->eattk = $e_attack;

      // Attack delay -> ASPD

            // !!! This needs some cleaning up !!!!
            
      $adelay = $this->getAttr('adelay');

      $aspd = ($adelay == 0) ? 200 . " (" . message('db_calc_overflow') . ")"  : ((2000-$adelay)/10) . " (" . number_format(1/$adelay,4) ." " . message('db_aspd_sec') . ")";

      $this->setAttr('adelay', $aspd);

      // Skills
      
      $this->setAttr('skills', $this->monsterSkills($this->getAttr('skills')));
      
      // Map locations

      $Spawns = unserialize($this->getAttr('spawns'));

      if(is_array($Spawns)) { 
      
        $pASD="";
        
        foreach($Spawns as $cS => $sP) {
        
        $mname    = $cS;
        $title    = $sP['map_name'];
        $count    = $sP['amount'];
        
        if($count==FALSE) continue;
        else $pASD .= "<a href=\"?act=fieldview&amp;field={$mname}\">{$title}</a> ({$mname}) [{$count}], ";
          
        }
        
      $Spawns = substr($pASD,0,-2);
      
      }

      if(!is_string($Spawns) || strlen($Spawns)==0) $Spawns = "<center>N/A</center>";
      
      $this->setAttr('spawns', $Spawns);
     
      // Monster drops
      
      $this->setAttr('drops', $this->createItemDropTable($this->getAttr('drops'),1));
      
        // Boss drops
        
          if($this->getAttr('mexp') > 0) {
          $this->setAttr('mdrops', $this->createItemDropTable($this->getAttr('mdrops'),2));
          }
      
    }

    /*********************************/
    /* Output monster search tables
    /*********************************/
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
        require(isset($this->layout) ? ( (isset($this->lpath)) ? $this->lpath . '/mob_form_' . $this->layout . '.php' : 'layout/mob/mob_form_' . $this->layout . '.php') : ( ($this->getAttr('mexp') > 0) ? 'layout/mob/mob_form_mvp.php' : 'layout/mob/mob_form_regular.php'));
        $i++;
      }
      return $output;
    }
  }

?>