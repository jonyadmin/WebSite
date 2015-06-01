<?php if(!defined('EFFICIENT_ROOT')) exit; ?>

  <form method="post" action="?act=dologin">
  
    <?php echo message('ac_user'); ?>: <input type="text" name="user" /><br />
    
    <?php echo message('ac_pass'); ?>: <input type="password" name="pass" />
    
    <input type="submit" />
  
  
  </form>
