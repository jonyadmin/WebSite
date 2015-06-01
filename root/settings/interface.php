<?php if(!defined('EFFICIENT_ROOT')) exit();

  return array(

    // --- How to add new elements to the navigation menu:
    
      // The 'main' array contains all the visible elements on the navigation bar.
      // Each subarray in 'main' is linked to an array in 'children' which contains
      // the dropdown hover list for the element. Ie. the ['main'][1] get a dropdown
      // list with the elements in ['children'][1]. If you create an element without
      // any child elements make sure to state by adding a new value "0" to 
      // ['children']. Do note that for the right aligned elements those that appear
      // last will end up to the left.
    
    'navigation'  =>  array (
    
        'main'      => array (
        
            array (
                // Main page
                'name'      =>  message('nav_mainpage'),
                'act'       =>  'default',
                'alignment' =>  'left',
            ),
        
            array (
                // Item
                'name'      =>  message('nav_item'),
                'act'       =>  'simpleitem',
                'alignment' =>  'left',
            ),

            array (
                // Monster
                'name'      =>  message('nav_mobs'),
                'act'       =>  'simplemob',
                'alignment' =>  'left',
            ),
            
            array (
                // Maps/fields
                'name'      =>  message('nav_maps'),
                'act'       =>  'field',
                'alignment' =>  'left',
            ),
        
        ),
        
        // sorry, but the child elements are useless for now :(
        
        'children'    =>  array (
        
            // Main page
            0,
        
            // Item
            array(
            
              array(            
                'name'      =>  'Search items',
                'act'       =>  'item',
              ),  
              
            ),

            // Monsters
            array(
            
              array(            
                'name'      =>  'Monster search',
                'act'       =>  'simplemob',
              ),
            
              array(            
                'name'      =>  'Advanced search',
                'act'       =>  'mob',
              ),
              
              array(            
                'name'      =>  'View all monsters',
                'act'       =>  'viewmob',
              ),
              
            ),

            // Maps/fields
            array(
            
              array(            
                'name'      =>  'View a field',
                'act'       =>  'field',
              ),
              
              array(            
                'name'      =>  'World',
                'act'       =>  'world',
              ),
              
            ),
            
            // Misc
            array(
            
              array(            
                'name'      =>  'Element tables',
                'act'       =>  'elements',
              ),  
              
            ),
            
            // Settings
            0,
        
        ),

    ),

    // Groups
    
    // Name: group title
    // Opt:  use unique header/background
    // Exec: execute group layout

    'groups' => array (
    
      0 => array(
      'name' => 'DEFAULT',
      'opt'  => TRUE,
      'exec' => TRUE,
      ),
      
      1 => array(
      'name' => 'Items',
      'opt'  => FALSE,
      'exec' => FALSE,
      ),
      
      2 => array(
      'name' => 'Monsters',
      'opt'  => TRUE,
      'exec' => FALSE,
      ),
      
      4 => array(
      'name' => 'Fields and Dungeons',
      'opt'  => FALSE,
      'exec' => FALSE,
      ),

    ),
    
    // Action groups; group related actions in here
    
    'act_group'  =>  array (
      'item'        =>  1,
      'itemsearch'  =>  1,
      'mob'         =>  2,
      'mobsearch'   =>  2,
      'world'       =>  4,
      'field'       =>  4,
      'viewmob'     =>  2,
      'fieldview'   =>  4,
      'simplemob'   =>  2,
      'simpleitem'  =>  1,
    ),
    
  );

?>