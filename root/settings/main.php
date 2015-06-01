<?php if(!defined('EFFICIENT_ROOT')) exit();

  return array (
  
    // Global variables
      
    'global_vars' => array(
    
      // --- URL
      // [subdomain.]domain.ext[/folder]
      // * This can also be set to blank if you don't want ERODS locked to one address
      'EFFICIENT_PATH'    =>  '',
      
      // --- Character set
      // * Unless the page looks bad you shouldn't have to change this
      'EFFICIENT_CHARSET' =>  'utf8',
      
      // --- Cache options
      // Note: Cache has been reimplemented since version 1.30, and is now working great!
      // Searches which've been executed previously won't need SQL access, and exec time is low.
      // Requires permission to create new files and write access in the cache folder!
      'USE_CACHE'         =>  FALSE,
      'CACHE_FOLDER'      =>  'cache',
      
      // --- Language
        // Look in language folder to see available translations
        // Do note this does NOT reflect which 
        // en_uk    English (British)
        // es_mx    Spanish (Mexican)
        // pt_br    Portuguese (Brazilian)
      'DEFAULT_LANGUAGE'  => 'pt_br',
      //'USE_TRANSLATED_DB' => TRUE,
    
    ),
  
    // --- SQL
    
      // These are the SQL database settings for ERODS-FUSION. Please note:
      // * The old 1.16 ERODS database will NOT work
      // * Your eAthena SQL item/mob database will NOT work
    
    'sql'         => array (
      'server'      =>  '127.0.0.1',
      'database'    =>  'ragnachaosbrathena',
      'user'        =>  'root',
      'password'    =>  'vertrigo',
      'port'        =>  '3306',
      'charset'     =>  'utf8',
    ),
    
    
    // --- Default experience rates
    
    'exp_rates'   =>  array (
      'bexp'        =>  1,
      'jexp'        =>  1,
    ),
    
    // --- Default drop rates
    
    'drop_rates'  =>  array (
      'item_rate_heal'  =>  10,
      'item_rate_use'   =>  10,
      'item_rate_common'=>  10,
      'item_rate_equip' =>  10,
      'item_rate_card'  =>  10,
      'item_rate_mvp'   =>  10, // Overrides all, although I'm not sure if this is the proper way to do it... (should it multiply with the other values? either way it's fine for 1x servers)
    ),
    
    // --- Enable searching for custom content?
    
      // * Custom search is not implemented yet
    
    'enable_custom_src'  => FALSE,

    // Database options
    
    // Uncompress gzcompressed item descriptions?
    // * If the item descriptions are gzcompressed set this to TRUE
    // * Note: the item description search won't work with compressed descriptions
    'gzcompressed_desc'  => TRUE,

    // Database resource paths
    
    'db_res_paths'=>  array (
        'item'      =>  'media/item',
        'collection'=>  'media/collection',
        'collection_alpha'=>  'media/collection_alpha',
        'collection_episode6'=>  'media/collection_episode6',
        'card2'     =>  'media/card2',
        'card'      =>  'media/card',
        'monster'   =>  'media/monster',
        'maps'      =>  'media/maps',
        'map_small' =>  'media/map2',
    ),
    
    'file_types'  =>  array (
        'item'      =>  'gif',
        'card'      =>  'gif',
        'card2'     =>  'png',
        'collection'=>  'gif',
        'mob_ani'   =>  'gif',
        'maps'      =>  'gif',
        'map_small' =>  'gif',
    ),
    
    'eleProperties' => array(
        
          2 => array (
          
            array(1,1,1,1,1,1,1,1,0.25,1), // Neutral 1
            array(1,0.25,1,0.5,1.75,1,1,1,1,1), // Water 1
            array(1,1,1,1.5,0.5,1.25,1,1,1,1), // Earth 1
            array(1,1.5,0.5,0.25,1,1.25,1,1,1,1), // Fire 1
            array(1,0.5,1.5,1,0.25,1.25,1,1,1,1), // Wind 1
            array(1,1,1,1,1,0,1,0.5,1,0.5), // Poison 1
            array(1,0.75,0.75,0.75,0.75,0.75,0,1.25,0.75,1), // Holy 1
            array(1,1,1,1,1,0.5,1.25,0,0.75,0), // Shadow 1
            array(0.25,1,1,1,1,1,1,1,1.25,1), // Ghost 1
            array(1,1,1,1.25,1,-0.25,1.5,-0.25,1,0), // Undead 1
            
          ),
          
          4 => array (
          
            array(1,1,1,1,1,1,1,1,0,1), // Neutral 2
            array(1,0,1,0.25,1.75,0.75,1,1,0.75,0.75), // Water 2
            array(1,1,0.5,1.75,0.25,1.25,1,1,0.75,0.75), // Earth 2
            array(1,1.75,0.25,0,1,1.25,1,1,0.75,0.75), // Fire 2
            array(1,0.25,1.75,1,0,1.25,1,1,0.75,0.75), // Wind 2
            array(1,1,1,1,1,0,1,0.25,0.75,0.25), // Poison 2
            array(1,0.5,0.5,0.5,0.5,0.5,-0.25,1.5,0.5,1.25), // Holy 2
            array(1,0.75,0.75,0.75,0.75,0.25,1.5,-0.25,0.5,0), // Shadow 2
            array(0.25,1,1,1,1,0.75,1,1,1.5,1), // Ghost 2
            array(1,1,1,1.5,1,-0.5,1.75,-0.5,1.25,0), // Undead 2
            
          ),
        
          6 => array (
          
            array(1,1,1,1,1,1,1,1,0,1), // Neutral 3
            array(1,-0.25,1,0,2,0.5,1,1,0.5,0.5), // Water 3
            array(1,1,0,2,0,1,1,1,0.5,0.5), // Earth 3
            array(1,2,0,-0.25,1,1,1,1,0.5,0.5), // Fire 3
            array(1,0,2,1,-0.25,1,1,1,0.5,0.5), // Wind 3
            array(1,1,1,1,1,0,1.25,0,0.5,0), // Poison 3
            array(1,0.25,0.25,0.25,0.25,0.25,-0.5,1.75,0.25,1.5), // Holy 3
            array(1,0.5,0.5,0.5,0.5,0,1.75,-0.5,0.25,0), // Shadow 3
            array(0,1,1,1,1,0.5,1,1,1.75,1), // Ghost 3
            array(1,1.25,1,1.75,1,-0.75,2,-0.75,1.5,0), // Undead 3
            
          ),
        
          8 => array (
          
            array(1,1,1,1,1,1,1,1,0,1), // Neutral 4
            array(1,-0.5,1,0,2,0.25,0.75,0.75,0.25,0.25), // Water 4
            array(1,1,-0.25,2,0,0.75,0.75,0.75,0.25,0.25), // Earth 4
            array(1,2,0,-0.5,1,0.75,0.75,0.75,0.25,0.25), // Fire 4
            array(1,0,2,1,-0.5,0.75,0.75,0.75,0.25,0.25), // Wind 4
            array(1,0.75,0.75,0.75,0.75,0,1.25,-0.25,0.25,-0.25), // Poison 4
            array(1,0,0,0,0,0,-1,2,0,1.75), // Holy4
            array(1,0.25,0.25,0.25,0.25,-0.25,2,-1,0,0), // Shadow 4
            array(0,1,1,1,1,0.25,1,1,2,1), // Ghost 4
            array(1,1.5,0.5,2,1,-1,2,-1,1.75,0), // Undead 4
            
          ),
        
    ),

    'plugins'     =>  array (
        'enable_plugins'  =>  FALSE,
        'plugin_dir'      =>  'root/plugins',
        'plugin_list'     =>  array(),
    ),
    
  );


?>