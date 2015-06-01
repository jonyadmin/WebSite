<?php if(!defined('EFFICIENT_ROOT')) exit; 

    $db = new MySQL();
    
    benchmark('Fieldviewer');

    require('root/methods/mob_db/MonsterController.php');
    require('root/methods/field_view/fieldview.php');
    
    benchmark('Fieldviewer', 'stop');

?>