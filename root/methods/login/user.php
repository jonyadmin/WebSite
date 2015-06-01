<?php if(!defined('EFFICIENT_ROOT')) exit;

  // --- Print monster results

  class User {
  
  public $uName, $uLvL, $expRates, $dropRates;
  
    public function __construct($name, $level, $exp_rates, $drop_rates) {
    
    $this->uName = $name;
    $this->uLvL = $level;
    $this->expRate = $exp_rate;
    $this->dropRates = $drop_rate;
    
    }
    
    public function droprate() {
    
      return $this->dropRates;
    
    }
    
    public function exprate() {
    
      return $this->dropRates;
    
    }
  
  }