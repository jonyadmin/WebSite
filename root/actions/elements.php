<?php if(!defined('EFFICIENT_ROOT')) exit;

  require('root/methods/mob_db/MonsterController.php');

  foreach(Settings::get('main', 'eleProperties') as $element => $damage) {

    $eLV = ($element/2);

    foreach($damage as $element => $props) {
    
    $props = MonsterController::setElements($props);

    $language = array (
      'mElementNA'  =>  message('mElementNA'),
      'mElement0'   =>  message('mElement0'),
      'mElement1'   =>  message('mElement1'),
      'mElement2'   =>  message('mElement2'),
      'mElement3'   =>  message('mElement3'),
      'mElement4'   =>  message('mElement4'),
      'mElement5'   =>  message('mElement5'),
      'mElement6'   =>  message('mElement6'),
      'mElement7'   =>  message('mElement7'),
      'mElement8'   =>  message('mElement8'),
      'mElement9'   =>  message('mElement9'),
    );
    
      echo <<<EOT
    
    <div style='float: left; margin-right: 10px;'>
    
    <span class="ffruit">{$language['mElement' . $element]} {$eLV}</span><br />
    <br />
    
    <table class="whitetable alignment1" style="width: 200px;" cellspacing="1" cellpadding="3">
      
      <tr>
        <td width="50%" class="grayrow">{$language['mElement0']}</td> 
        <td>{$props['neutral']}%</td>
      </tr>
      
      <tr>
        <td class="grayrow">{$language['mElement1']}</td> 
        <td>{$props['water']}%</td>
      </tr>
      
      <tr>
        <td class="grayrow">{$language['mElement2']}</td> 
        <td>{$props['earth']}%</td>
      </tr>

      <tr>
        <td class="grayrow">{$language['mElement3']}</td> 
        <td>{$props['fire']}%</td>
      </tr>

      <tr>
        <td class="grayrow">{$language['mElement4']}</td> 
        <td>{$props['wind']}%</td>
      </tr>

      <tr>
        <td class="grayrow">{$language['mElement5']}</td> 
        <td>{$props['poison']}%</td>
      </tr>
      
      <tr>
        <td class="grayrow">{$language['mElement6']}</td> 
        <td>{$props['holy']}%</td>
      </tr>
        
      <tr>
        <td class="grayrow">{$language['mElement7']}</td> 
        <td>{$props['shadow']}%</td>
      </tr>
          
      <tr>
        <td class="grayrow">{$language['mElement8']}</td> 
        <td>{$props['ghost']}%</td>
      </tr>
      
      <tr>
        <td class="grayrow">{$language['mElement9']}</td> 
        <td>{$props['undead']}%</td>
      </tr>
      
    </table>
    
    </div>
      
EOT;
    
    }
  
  echo '<div style="clear: both"> &nbsp;</div>';
  
  }
  

?>