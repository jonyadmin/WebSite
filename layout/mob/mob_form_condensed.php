<?php if(!defined('EFFICIENT_ROOT')) exit;
  
  // This line is to prevent treasure chest from appearing... poor treasure chest, why did it have to be like this? :(
  if($this->getAttr('mob_HP') > 0)

$output .= <<<EOT
  
  <tr class="listing_master" id="view{$this->getAttr('id')}">
    <td class="listing_ident">{$this->getAttr('id')}</td>
    <td><a class="nameclr" onclick="expand_monster('mob{$this->getAttr('id')}', {$this->getAttr('id')});">{$this->getAttr('name1')}</a></td>
    <td>{$this->getAttr('mob_lvl')}</td>
    <td>{$this->getAttr('mob_HP')}</td>
    <td>{$this->getAttr('attack1')} ~ {$this->getAttr('attack2')}</td>
    <td>{$this->getAttr('defence')}</td>
    <td>{$this->getAttr('m_defence')}</td>
    <td>{$this->getAttr('size')}</td>
    <td>{$this->getAttr('element')}</td>
    <td>{$this->getAttr('race')}</td>
    <td>{$this->getAttr('exp')}</td>
    <td>{$this->getAttr('jexp')}</td>
    <td class="listing_ident"><input onclick="if(this.checked == true) { flag_color('view{$this->getAttr('id')}', '#e3f6f9'); } else { flag_color('view{$this->getAttr('id')}', '#ffffff'); this.checked = false; }" type="checkbox" /></td>
  </tr>
  
  <tr style="display: none">
    <td colspan="13" id="mob{$this->getAttr('id')}"></td>
  </tr>
  
EOT;

//href="?act=mobsearch&cid=on&amp;id={$this->getAttr('id')}"
  
?>