<?php if(!defined('EFFICIENT_ROOT')) exit;

$output .= '

  <table class="whitetable alignment1" cellspacing="1" cellpadding="3" id="monster' . $this->getAttr('id') . '">
  
    <tr>
      <td class="grayrow cd" colspan="2">' . message('db_mob_img') . '</td>
      <td class="grayrow">' . message('db_mob_name') . '</td>
      <td>' . $this->getAttr('name1') . ' (' . $this->getAttr('id') . ')</td>
      <td colspan="2" class="grayrow cd">' . message('db_mob_pdmg') . '</td>
    </tr>
      
    <tr>
      <td rowspan="16" colspan="2" class="mobimg cd">
        <img alt="' . $this->getAttr('name1') . '" src="' . $this->respaths['monster'] . '/' . $this->getAttr('id') . '.' . $this->mediaext['mob_ani'] . '" />
      </td>
      <td class="grayrow">' . message('db_mob_hp') . '</td>
      <td>' . $this->getAttr('mob_HP') . '</td>
      <td class="grayrow">' . message('mElement0') . '</td> 
      <td>' . $this->eattk['neutral'] . '%</td>
    </tr>
    
    <tr>
      <td class="grayrow">' . message('db_mob_lvl') . '</td>
      <td>' . $this->getAttr('mob_lvl') . '</td>
      <td class="grayrow">' . message('mElement1') . '</td> 
      <td>' . $this->eattk['water'] . '%</td>
    </tr>
    
    <tr>
      <td class="grayrow">' . message('db_mob_ele') . '</td>
      <td>' . $this->getAttr('element') . '</td>
      <td class="grayrow">' . message('mElement2') . '</td> 
      <td>' . $this->eattk['earth'] . '%</td>
    </tr>

    <tr>
      <td class="grayrow">' . message('db_mob_race') . '</td>
      <td>' . $this->getAttr('race') . '</td>
      <td class="grayrow">' . message('mElement3') . '</td> 
      <td>' . $this->eattk['fire'] . '%</td>
    </tr>

    <tr>
      <td class="grayrow">' . message('db_mob_size') . '</td>
      <td>' . $this->getAttr('size') . '</td>
      <td class="grayrow">' . message('mElement4') . '</td> 
      <td>' . $this->eattk['wind'] . '%</td>
    </tr>

    <tr>
      <td class="grayrow">' . message('db_mob_atk') . '</td>
      <td>' . $this->getAttr('attack1') . ' ~ ' . $this->getAttr('attack2') . '</td>
      <td class="grayrow">' . message('mElement5') . '</td> 
      <td>' . $this->eattk['poison'] . '%</td>
    </tr>
    
    <tr>
      <td class="grayrow">' . message('db_mob_bexp') . '</td>
      <td>' . $this->getAttr('exp') . '</td>
      <td class="grayrow">' . message('mElement6') . '</td> 
      <td>' . $this->eattk['holy'] . '%</td>
    </tr>
      
    <tr>
      <td class="grayrow">' . message('db_mob_jexp') . '</td>
      <td>' . $this->getAttr('jexp') . '</td>
      <td class="grayrow">' . message('mElement7') . '</td> 
      <td>' . $this->eattk['shadow'] . '%</td>
    </tr>
        
    <tr>
      <td class="grayrow">' . message('db_mob_dodge') . '</td>
      <td>' . $this->result['dodge'] . '</td>
      <td class="grayrow">' . message('mElement8') . '</td> 
      <td>' . $this->eattk['ghost'] . '%</td>
    </tr>
    
    <tr>
      <td class="grayrow">' . message('db_mob_hit') . '</td>
      <td>' . $this->result['hit'] . '</td>
      <td class="grayrow">' . message('mElement9') . '</td> 
      <td>' . $this->eattk['undead'] . '%</td>
    </tr>


    <tr>
      <td class="grayrow">' . message('db_mob_range') . '</td>
      <td colspan="3">' . $this->getAttr('range1') . '</td>
    </tr>

    <tr>
      <td class="grayrow">' . message('db_mob_def') . '</td>
      <td colspan="3">' . $this->defence . '</td>
    </tr>

    <tr>
      <td class="grayrow">' . message('db_mob_wspd') . '</td>
      <td colspan="3">' . $this->getAttr('speed') . '</td>
    </tr>
    
    <tr>
      <td class="grayrow">' . message('db_mob_aspd') . '</td>
      <td colspan="3">' . $this->getAttr('adelay') . '</td>
    </tr>
    
    <tr>
      <td class="grayrow">' . message('db_mob_mrange') . '</td>
      <td colspan="3">' . $this->getAttr('range2') . ' ' . message('db_cells') . '</td>
    </tr>
    
    <tr>
      <td class="grayrow">' . message('db_mob_sight') . '</td>
      <td colspan="3">' . $this->getAttr('range3') . ' ' . message('db_cells') . '</td>
    </tr>
    

    <tr class="cd">
      <td colspan="3" class="grayrow">' . message('db_mob_mode') . '</td>
      <td colspan="3" class="grayrow">' . message('db_mob_skill') . '</td>
    </tr>
    
    <tr>
      <td colspan="3" class="moblist" valign="top">' . $this->getAttr('mode') . '</td>
      <td colspan="3" class="moblist" valign="top">' . $this->getAttr('skills') . '</td>
    </tr>
    
    <tr class="grayrow allwhite">
      <td class="cd wdth1">' . message('db_stat_str') . '</td>
      <td class="cd wdth1">' . message('db_stat_dex') . '</td>
      <td class="cd wdth1">' . message('db_stat_vit') . '</td>
      <td class="cd wdth1">' . message('db_stat_agi') . '</td>
      <td class="cd wdth1">' . message('db_stat_int') . '</td>
      <td class="cd wdth1">' . message('db_stat_luk') . '</td>
    </tr>
    
    <tr class="allwhite">
      <td class="cd wdth1">' . $this->getAttr('str') . '</td>
      <td class="cd wdth1">' . $this->getAttr('dex') . '</td>
      <td class="cd wdth1">' . $this->getAttr('vit') . '</td>
      <td class="cd wdth1">' . $this->getAttr('agi') . '</td>
      <td class="cd wdth1">' . $this->getAttr('int') . '</td>
      <td class="cd wdth1">' . $this->getAttr('luk') . '</td>
    </tr>
    
    <tr class="allwhite">
      <td colspan="6" class="grayrow cd">' . message('db_mob_loot') . '</td>
    </tr>
    
    <tr>
      <td colspan="6" class="mobdrops">' . $this->getAttr('drops') . '</td>
    </tr>
    
    <tr class="allwhite">
      <td colspan="6" class="grayrow cd ">' . message('db_mob_mloc') . '</td>
    </tr>
    
    <tr>
      <td colspan="6" class="mobdrops">' . $this->getAttr('spawns') . '</td>
    </tr>
    
  </table>
  
';
  
?>