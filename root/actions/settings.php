<?php if(!defined('EFFICIENT_ROOT')) exit; 

  // author's comment: hahaha. yeah, I'm lousy :(
  if(!isset($options)) {
    $options = array(
      'exp_rates'   =>  array (
        'bexp'        =>  Settings::get('main', 'exp_rates', 'bexp'),
        'jexp'        =>  Settings::get('main', 'exp_rates', 'jexp'),
      ),
      'drop_rates'  =>  array (
        'item_rate_heal'  =>  Settings::get('main', 'drop_rates', 'item_rate_heal'),
        'item_rate_use'   =>  Settings::get('main', 'drop_rates', 'item_rate_use'),
        'item_rate_common'=>  Settings::get('main', 'drop_rates', 'item_rate_common'),
        'item_rate_equip' =>  Settings::get('main', 'drop_rates', 'item_rate_equip'),
        'item_rate_card'  =>  Settings::get('main', 'drop_rates', 'item_rate_card'),
        'item_rate_mvp'   =>  Settings::get('main', 'drop_rates', 'item_rate_mvp'),
      ),
    );
  }

  viewsettings($options);

?>