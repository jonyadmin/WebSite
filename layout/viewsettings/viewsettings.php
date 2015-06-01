<?php if(!defined('EFFICIENT_ROOT')) exit;

echo message('settings_desc')  . '<br />
<br />

  <form method="post" action="?act=savesettings">

  <table class="whitetable" cellspacing="1">

    <tr class="grayrow">
      <td style="width: 50%">' . message('db_mob_bexp') . '</td>
      <td style="width: 50%">' . message('db_mob_jexp') . '</td>
    </tr>

    <tr>
      <td><input name="bexp" type="text" value="' . $options['exp_rates']['bexp'] . '" /></td>
      <td><input name="jexp" type="text" value="' . $options['exp_rates']['jexp'] . '" /></td>
    </tr>
    
  </table>

  <table class="whitetable" cellspacing="1">

    <tr class="grayrow">
      <td style="width: 16.5%">' . message('db_item_dropr_common') . '</td>
      <td style="width: 16.5%">' . message('db_item_dropr_healing') . '</td>
      <td style="width: 16.5%">' . message('db_item_dropr_usable') . '</td>
      <td style="width: 16.5%">' . message('db_item_dropr_equipment') . '</td>
      <td style="width: 16.5%">' . message('db_item_dropr_card') . '</td>
      <td style="width: 16.5%">' . message('db_item_dropr_mvp') . '</td>
    </tr>

    <tr>
      <td><input name="item_rate_common" type="text" value="' . $options['drop_rates']['item_rate_common'] . '" /></td>
      <td><input name="item_rate_heal" type="text" value="' . $options['drop_rates']['item_rate_heal'] . '" /></td>
      <td><input name="item_rate_use" type="text" value="' . $options['drop_rates']['item_rate_use'] . '" /></td>
      <td><input name="item_rate_equip" type="text" value="' . $options['drop_rates']['item_rate_equip'] . '" /></td>
      <td><input name="item_rate_card" type="text" value="' . $options['drop_rates']['item_rate_card'] . '" /></td>
      <td><input name="item_rate_mvp" type="text" value="' . $options['drop_rates']['item_rate_mvp'] . '" /></td>
    </tr>
    
  </table>
  
  <input type="submit" value="' . message('settings_save') . '" /><br />
  
  <br />
  
  </form>

  <span style="color: #ff6666">*</span> ' . message('settings_inf') . '<br />
';

//  Unofficial content is currently <b>
//echo (Settings::get('main', 'enable_custom_src') == TRUE) ? "enabled" : "disabled"; 
//echo "</b> for view. Create an account to permanently save your settings.<br /><br />\n";

?>
