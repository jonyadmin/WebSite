<?php if(!defined('EFFICIENT_ROOT')) exit;

    if(connect_to_sql($options['sql']) == FALSE) {
    
      if(defined('CONTENT_ONLY')) {
        errorHandler(message('ajax_broken'), TRUE);
      }
    
    }
    
    else {

      require('root/methods/mob_db/print_results.php');

        // --- Get display order
        
          $dbstr = $options['db_struct']['mob_src'];
        
        switch(intval($_GET['displayorder'])) {
          case 9:   $order = $dbstr['attack1']; break;
          case 10:  $order = $dbstr['exp'];     break;
          case 8:   $order = $dbstr['defence']; break;
          case 7:   $order = $dbstr['race'];    break;
          case 6:   $order = $dbstr['size'];    break;
          case 5:   $order = $dbstr['element']; break;
          case 4:   $order = $dbstr['jexp'];    break;
          case 3:   $order = $dbstr['mob_HP'];  break;
          case 2:   $order = $dbstr['mob_lvl']; break;
          case 1:   $order = $dbstr['name1'];   break;
          case 0:
          default:  $order = $dbstr['id'];
        }

        // --- Get all monsters in database
        $monstersReturned = smysql_query("SELECT * FROM `" . $options['db_struct']['tables']['mob_src'] . "` ORDER BY `$order`");
        
        // --- Count results
        $resultCount = mysql_num_rows($monstersReturned); 
        $resultCount *= (empty($resultCount))? 0 : 1;

      $mobController = new MonsterController($options['drop_rates'], $options['exp_rates'], $options['eleProperties'], $options['db_struct']['mob_src'], $language, $options['db_res_paths'], $options['file_types']);
        
        $mobController->layout = 'condensed';

      echo <<<EOT
       
      <img src="images/text/tmob2.png" /><br />
      
      <br />
      
      <span class="grayclr">This is a full list of all the monsters in Ragnarok Online.</span><br />
      
      <br />
      
        <span class="ffruit">Order by</span><br />
        <span class="grayclr"> 
          <a class="dblink" href="?act=viewmob&amp;displayorder=0"> id</a> /
          <a class="dblink" href="?act=viewmob&amp;displayorder=1"> name</a> /
          <a class="dblink" href="?act=viewmob&amp;displayorder=2"> level</a> /
          <a class="dblink" href="?act=viewmob&amp;displayorder=3"> hit points</a> /
          <a class="dblink" href="?act=viewmob&amp;displayorder=9"> min. attack</a> /
          <a class="dblink" href="?act=viewmob&amp;displayorder=8"> defence</a> /
          <a class="dblink" href="?act=viewmob&amp;displayorder=10"> base exp.</a> /
          <a class="dblink" href="?act=viewmob&amp;displayorder=4"> job exp.</a> /
          <a class="dblink" href="?act=viewmob&amp;displayorder=5"> element</a> /
          <a class="dblink" href="?act=viewmob&amp;displayorder=6"> scale</a> /
          <a class="dblink" href="?act=viewmob&amp;displayorder=7"> race</a>
        </span><br />
        
      <br />
      
      <span class="redlink">Tip:</span> You can compare a list of selected monsters by 1) flagging them at the
      right of the page, then 2) pressing the View Flagged button below.<br />
        
        <br />
      
      <table class="whitetable alignment1" cellspacing="1" cellpadding="3">
      
      <tr class="grayrow">
        <td class="listing_ident">ID</td>
        <td>Name</td>
        <td>Lv.</td>
        <td>HP</td>
        <td>Attack</td>
        <td>DEF</td>
        <td>MDEF</td>
        <td>Size</td>
        <td>Element</td>
        <td>Race</td>
        <td>Exp.</td>
        <td>Job Exp.</td>
        <td class="listing_ident">Flag</td>
      </tr>
      
EOT;

      echo $mobController->runMonsterRes($monstersReturned, 999, 0);
      
      echo <<<EOT
      
      </table>
      
EOT;
      
      mysql_free_result($monstersReturned);
    
    }
  
?>
