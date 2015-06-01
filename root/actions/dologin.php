<?php if(!defined('EFFICIENT_ROOT')) exit;

  if(AUTH) {
    if(session_destroy()) {
    printf('ac_logout');
    }
    else errorHandler('');
  }
    
  else {

    require('root/methods/login/login.php');
    
    $login = new Login($_POST['user'], $_POST['pass'], $options['sql']);
    
    if($_SESSION['auth']) {
      printf(message('ac_login', $_SESSION['user']));
    }

    else {
      echo message('ac_loginf');
    }
    
  }
  
  


?>