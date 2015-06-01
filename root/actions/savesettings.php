<?php if(!defined('EFFICIENT_ROOT')) exit;

$conv_opt = array('exp_rates', 'drop_rates');

foreach($conv_opt as $type) {
  foreach(Settings::get('main', $type) as $opt => $val) {
  $sval = intval($_POST[$opt]);
  if(intval($sval) < 1000000) $_SESSION['options'][$type][$opt] = $sval;
  }
}

echo message('ac_settingss');

?>