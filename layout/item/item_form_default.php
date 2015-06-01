<?php if(!defined('EFFICIENT_ROOT')) exit;

$output .= '

  <table class="whitetable" cellspacing="1">

    <tr class="grayrow">
      <td class="wdthAlt">' . message('db_item_name') . '</td>
      <td class="wdthAlt">' . message('db_item_img') . '</td>
      <td class="wdthAlt">' . message('db_item_id') . '</td>
      <td class="wdthAlt">' . message('db_item_type') . '</td>
      <td class="wdthAlt">' . message('db_item_value') . '</td>
    </tr>

    <tr>
    
      <td class="nameclr">' . $this->getAttr('name1') . '</td>
      <td>
';
      
$output .= (!isset($_GET['ccoll_d']))
      ? "<a title=\"" . message('db_item_viewcoll') . "\" onclick=\" popUp('{$this->fCollection}')\"><img src=\"{$this->fItem}\" alt=\"Item {$this->getAttr('id')}\" /></a></td>\n"
      : message('db_item_item') . ' ' . $id;

$output .= <<<EOT
      <td>{$this->getAttr('id')}</td>
      <td>{$this->getAttr('type')}</td>
      <td>{$this->getAttr('value_b')}</td>
      
    </tr>

    <tr>
      <td id="desc_{$this->getAttr('id')}" colspan="5" class="tdblue" style="padding: 10px; color: #000000;
      
EOT;

if(isset($js_min)) {
$output .= " display: none";
}
  
$output .= "\">"; 

$output .= (isset($_GET['irodesc']) && !empty($ccoll_a)) 
  ? $this->getAttr('irodesc')
  : $this->getAttr('desc'); 
  
$output .= <<<EOT

      </td>
    </tr>
    
EOT;

if(isset($_GET['js_min'])) $output .= '

    <tr id="show_$js">
      <td colspan="5"><a class="random" href="javascript: show(\'' . $this->getAttr('id') . '\')">' . message('db_item_showdesc') . '</a></td>
    </tr>
    
';

$output .= '

    <tr class="grayrow">
      <td colspan="5">' . message('db_item_droppers') . '</td>
    </tr>
    
    <tr>
      <td colspan="5" class="td_center mobdrops">' . $this->getAttr('droppers') . '</td>
    </tr>
    
';

if(isset($_GET['ciscr'])) {

$output .= '

    <tr class="grayrow">
      <td colspan="3">' . message('db_item_script') . '</td>
      <td colspan="1">' . message('db_item_oneqscript') . '</td>
      <td colspan="1">' . message('db_item_uneqscript') . '</td>
    </tr>
    
    <tr>
      <td class="td_center" colspan="3">' . $this->getAttr('act') . '&nbsp;</td>
      <td class="td_center" colspan="1">' . $this->getAttr('e_act') . '&nbsp;</td>
      <td class="td_center" colspan="1">' . $this->getAttr('ue_act') . '&nbsp;</td>
    </tr>
  
';

}

$output .= <<<EOT

  </table>
  
EOT;
?>