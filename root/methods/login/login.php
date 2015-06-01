<?php if(!defined('EFFICIENT_ROOT')) exit;

  // --- Login a user

  class Login {
    
    function __construct($user, $pass, $sql) {
      
    $db = new MySQL($sql['server'], $sql['port'], $sql['user'], $sql['password'], $sql['database']);
      
      $user = strtolower($user);
      
      if(strlen($user) >= 4 && strlen($pass) >= 1 && strlen($user) <= 25 && strlen($pass) <= 25) {
      
        $this->login = $db->query("SELECT * FROM login WHERE `name`='" . $db->escape($user) ."' AND PASS='" . md5($pass) . "';")->fetchAssoc();
       
        if($this->login['id']) {
          $_SESSION['auth'] = TRUE;
          $_SESSION['user'] = $user;
          $_SESSION['level'] = $this->login['level'];
        }
        
      }
    
    }
  
    function __toString() {
    
      return $this->login['id'];
    
    }
  
  
  }


?>