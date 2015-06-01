<?php if(!defined("EFFICIENT_ROOT")) exit; ?>

  <table cellspacing="1" class="whitetable pageNavigation">
  
    <tr class="blackrow">
      <td><?php echo message('e_ehandler'); ?></td>
    </tr>
    
    <tr>
      <td><?php echo $error; ?></td>
    </tr>
    
  </table>
  
  <br />
  
  <?php 
    
    if($code == 404) 
      include('layout/common.php'); 
  
  ?>

