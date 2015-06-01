<?php if(!defined('EFFICIENT_ROOT')) exit();

  return array(
  
  // Language specific
  
  'language_current' => 'English',
  'language_code'    => 'en_uk',
  'language_select'  => 'Select your language:',
  
  // General
  
  'erods_contact' =>  'Contact information',
  'erods_updates' =>  'Latest updates',
  'erods_legal'   =>  'Legal',
  'erods_service' =>  'Services',
  'erods_about'   =>  'The <i>Efficient Ragnarok Online Database System</i> is a project aimed at creating a free database system compatible with the eAthena database system. Now also looking equally great in all recent web browsers!',
  
  // Main navigation
  'nav_mainpage'  =>  'Main page',
  'nav_item'      =>  'Items',
  'nav_mobs'      =>  'Monsters',
  'nav_maps'      =>  'Fields &amp; Dungeons',
  'nav_world'     =>  'World',
  'nav_misc'      =>  'Misc.',
  'nav_tools'     =>  'Calculators &amp; tables',
  'nav_settings'  =>  'Configuration',
  
  'nav_login'     =>  'Login',
  'nav_logout'    =>  'Logout',
  'nav_register'  =>  'Register',
  'nav_sitemap'   =>  'Sitemap',
  
  'main_src_mob'    =>  'Search for monsters',
  'main_src_mob_d'  =>  'Browse the monsters of Ragnarok Online',
  'main_src_item'   =>  'Look-up items',
  'main_src_item_d' =>  'Search among all the items in the game!',
  'main_src_map'    =>  'Travel the fields',
  'main_src_map_d'  =>  'Traverse the maps of Rune-Midgard',
  'main_src_world'  =>  'View the world',
  'main_src_world_d'=>  'Get a full overview of the world',

  // Item search
  
  'src_item_title'  =>  'Item Search',
  'src_item_prompt' =>  'Enter the item name',
  'src_item_desc'   =>  'The item database provides all information you\'ve ever wanted to know about Ragnarok\'s items. <br />For more search options head over to the <a href="?act=item">advanced item searching</a>.',

  'src_item_sEq'    =>  'View Equipment',
  'src_item_sEq_d'  =>  'Look-up all the avilable gear at once!',
  'src_item_sGr'    =>  'View Items By Group',
  
  'src_item_findid' =>  'Find an item by it\'s ID',
  'src_item_sdesc'  =>  'Search description',
  'src_item_sdesc_p'=>  'Separate keywords by comma. White-space is ignored.',
  
  'src_item_scrpt'  =>  'Item Scripts',
  'src_item_scrpt_d'=>  'Display eAthena script, equip script and unequip script',
  
  'src_item_ord100' => 'Alphabetically (A-Z)',
  'src_item_ord200' => 'Alphabetically descending (Z-A)',
  'src_item_ord300' => 'Item ID',
  
  'src_item_irodesc'    => 'iRO descriptions',
  'src_item_irodesc_d'  => 'If available, this option will make the results show the official iRO item description.',
  'src_item_oldcoll'    => 'Old collection',
  'src_item_oldcoll_d'  => 'If available, this option will make the results show the old collection images from Episode 6: Amatsu.',
  'src_item_alphacoll'  => 'Alpha collection',
  'src_item_alphacoll_d'=> 'If available, this option will make the results show the old collection images from the Alpha client',
  
  'src_item_minidesc'   => 'Minimize all item descriptions!',
  'src_item_minidesc_d' => 'This function requires Javascript enabled',
  
  // Monster search
  
  'src_mob_title'       =>  'Monster Search',
  'src_mob_desc1'       =>  'The monster database is useful for the everyday hunting, and allows you to take a look at monster stats, loot &amp; locations.',
  'src_mob_desc2'       =>  'If you\'re not satisfied with the standard monster search functionality, you should take a look at the section for <a href="?act=mob">advanced monster searching</a>.',
  'src_mob_prompt'      =>  'Enter a monster name',

  'src_mob_srcboss'     =>  'Boss Monsters',
  'src_mob_srcboss_d'   =>  'Look-up all the boss (MvP) monsters',
  'src_mob_srcsize'     =>  'View Monsters By Size',
  
  'src_mob_findid'      =>  'Find a monster by ID',
  'src_mob_dropsrc'     =>  'Search Drop ID',
  'src_mob_mvponly'     =>  'Search only for MvP boss monsters?',
  'src_mob_mvponly_d'   =>  'Display only boss monsters in result.',

  // Field search
  
  'src_field_title'     =>  'Dungeon &amp; Field Viewer',

  // Search form
  
  'src_form_search' => 'Search',
  'src_form_prompt' =>  'Proceed by filling out the following form. Keep in mind accurate input gives more accurate results.',
  
  'src_form_enable' => 'Enable',
  'src_form_disable'=> 'Disable',
  'src_form_fopt'   => 'Filter options',
  'src_form_dopt'   => 'Display options',
  
  'src_form_grter'  => 'Greater than',
  'src_form_lesser' => 'Lesser than',
  'src_form_equalt' => 'Exactly',
  
  'src_form_maxres' => 'Max Result',
  'src_form_respage'=> 'results each page',
  
  
  'src_form_altm'   =>  'Alternative Mode',
  'src_form_altm_d' =>  'Disable all images and drops the javascript functions in links',
  
  'src_form_resord' => 'Result Order',
  'src_form_resord2'=> 'Order By Value',
  
  'src_form_o_asc'  => 'Ascending',
  'src_form_o_desc' => 'Descending',
  
  // Error messages

  // ERODS
  'e_notFound'    =>  'The page you\'re looking for does not exist.',
  'e_error_inc'   =>  'Failed to include file %s in function \'%s\'.',
  'e_error_func'  =>  'Error in function \'%s\'.',
  
  'e_dhandler'    =>  'Debug handler',
  'e_ehandler'    =>  'Error handler',

  // Database
  'e_sql_query'   =>  'Unable to perform query to database',
  'e_sql_con'     =>  'Unable to establish database connection.',
  'e_sql_con2'    =>  'We have an issue with the database access, please try again later.',

  // Search
  
  'e_src_noRes'   =>  'Sorry, no result!',
  'e_src_cont'    =>  'The content you are looking for doesn\'t exist in our database. Obviously there\'s an internal conflict somewhere (you might want to notify the admin if you feel like complaining).',

  // Account

  'ac_user'       =>  'User',
  'ac_pass'       =>  'Password',
  'ac_login'      =>  'Sign in',
  
  'ac_login'      =>  'Successfully signed in! Welcome, %s',
  'ac_loginf'     =>  'Failed to sign in.',
  'ac_logout'     =>  'Successfully signed you out!',
  'ac_logoutf'    =>  'Something went really bad. Unable to log you out!',
  'ac_settingss'  =>  'Your settings have been saved',
  
  // Settings
  
  'settings_inf' =>  'the rates are multiplies of the official exp. gained/drop percent chance on Gravity\'s AEGIS servers.',
  'settings_desc' =>  'A basic settings page has been implemented. As of now the settings are stored per session, so you can configure your servers experience and/or drop rates to get the correct results at once. Enjoy!',
  'settings_save' =>  'Save settings',

  // AJAX messages
  
  'ajax_broken'   =>  'The AJAX functionality is currently broken because of a database error.',
  
  'ajax_action'   =>  'Which action do you prefer? Choose one from the following list:',
  'ajax_add_cur'  =>  'Add to current results',
  'ajax_new_src'  =>  'Perform a new search',
  'ajax_close_d'  =>  'Close this dialogue box',
  'ajax_close_w'  =>  'Close window',
  'ajax_options'  =>  'Options',
  
  'ajax_suggest'  =>  'Suggestions',
  'ajax_noRes'    =>  'No such %s in our database!',
  'ajax_monster'  =>  'monster',
  'ajax_item'     =>  'item',
  'ajax_inform'   =>  'Type the name of the %s you want to look up',
  
  // Stats
  
  'stat_pageexec' =>  'Page executed in <b>%s</b> seconds with a total of <b>%s</b> queries used.',
  'stat_plugins'  =>  'Active plug-ins',
  
  // Game database
  
  // Results
  'res_sres'      =>  'Search result',
  'res_rnav'      =>  'Page Navigation',
  'res_pres'      =>  'There was a total of %s matching result(s).',
  'res_showr'     =>  'Listing by %s results each page.',
  'res_go2top'    =>  'Back to the top',
  
  // Field database
  'map_fieldunv'  =>  'The map database is unavailable at the moment. Contact an administrator for further information.',
  'map_noRes'     =>  'The requested map, %s, was not found.',
  'map_view'      =>  'Map View',
  'map_mobstat'   =>  'Monster Stats',
  
  // Monster statistics
  'mstat_mobs'    =>  'Monsters',
  'mstat_size'    =>  'Monster Sizes',
  'mstat_ele'     =>  'Monster Elements',
  'mstat_race'    =>  'Monster Races',
  'mstat_range'   =>  'Monster Ranges',
  
  // Item database

  // Item types
  'db_item_0'   =>  'Healing item',
  'db_item_2'   =>  'Usable',
  'db_item_3'   =>  'Misc',
  'db_item_4'   =>  'Weapon',
  'db_item_5'   =>  'Equipment',
  'db_item_6'   =>  'Card',
  'db_item_7'   =>  'Pet egg',
  'db_item_8'   =>  'Pet equipment',
  'db_item_10'  =>  'Ammo',
  'db_item_11'  =>  'Usable (delayed)',
  'db_item_01'  =>  'Uknown',
  'db_item_13'  =>  'All usable',
  
  // Item equip locations
  'db_iloc_1'   =>  'Lower Headgear',
  'db_iloc_2'   =>  'Weapon',
  'db_iloc_4'   =>  'Garment',
  'db_iloc_8'   =>  'Accessory 1',
  'db_iloc_16'  =>  'Armor',
  'db_iloc_32'  =>  'Shield',
  'db_iloc_34'  =>  'Two-Handed Weapon',
  'db_iloc_64'  =>  'Footgear',
  'db_iloc_128' =>  'Accessory 2',
  'db_iloc_136' =>  'Accessory',
  'db_iloc_256' =>  'Upper Headgear',
  'db_iloc_512' =>  'Middle Headgear',
  'db_iloc_768' =>  'Mid &amp; Upper Headgear',
  'db_iloc_769' =>  'Lower, Mid &amp; Upper Head',
  'db_iloc_01'  =>  'Non-equip',
  
  // Item results
  'db_item_item'        =>  'Item',
  'db_item_viewcoll'    =>  'View item collection image',
  'db_item_showdesc'    =>  'Show item description',
  
  'db_item_droppers'    =>  'Dropped By',
  'db_item_nodrops'     =>  '<i>This item doesn\'t drop from any monster!</i>',
  'db_item_img'         =>  'Image',
  'db_item_cardimg'     =>  'Card Image',
  'db_item_id'          =>  'Item ID',
  'db_item_name'        =>  'Name',
  'db_item_type'        =>  'Type',
  'db_item_value'       =>  'Buy / Sell',
  'db_item_buy'         =>  'Price (Buy)',
  'db_item_eqloc'       =>  'Equip loc.',
  'db_item_numslots'    =>  'Slots',
  'db_item_weight'      =>  'Weight',
  
  'db_item_script'      =>  'Script',
  'db_item_oneqscript'  =>  'On equip script',
  'db_item_uneqscript'  =>  'On unequip script',
  
  'db_item_dropr_common'    =>  'Common item droprate',
  'db_item_dropr_healing'   =>  'Healing item drops',
  'db_item_dropr_usable'    =>  'Usable items drops',
  'db_item_dropr_equipment' =>  'Equipment drops',
  'db_item_dropr_card'      =>  'Card drops',
  'db_item_dropr_mvp'       =>  'MvP rewards',
  
  // Monster database
  
  'db_mob_img'          =>  'Image',
  'db_mob_id'           =>  'ID',
  'db_mob_name'         =>  'Name',
  'db_mob_pdmg'         =>  'Property Damage',
  'db_mob_hp'           =>  'Hit Points (HP)',
  'db_mob_sp'           =>  'Spell Points (SP)',
  'db_mob_lvl'          =>  'Level',
  'db_mob_ele'          =>  'Element',
  'db_mob_race'         =>  'Race',
  'db_mob_size'         =>  'Size',
  'db_mob_atk'          =>  'Attack',
  'db_mob_bexp'         =>  'Base Exp.',
  'db_mob_jexp'         =>  'Job Exp.',
  'db_mob_dodge'        =>  'Dodge 95%',
  'db_mob_hit'          =>  'Hit 100%',
  'db_mob_range'        =>  'Range',
  'db_mob_def'          =>  'Defence',
  'db_mob_wspd'         =>  'Walking Speed',
  'db_mob_aspd'         =>  'Attack Speed',
  'db_mob_mrange'       =>  'Max. Skill Range',
  'db_mob_sight'        =>  'Sight',
  'db_mob_mode'         =>  'Mode',
  'db_mob_skill'        =>  'Skills',
  'db_mob_loot'         =>  'Loot',
  'db_mob_mloc'         =>  'Map Locations',
  
  'db_bossreward'       =>  'MvP Rewards',
  'db_bossmob'          =>  'MvP',
  
  // Monster modes
  
  'db_mode-1'     =>  'Passive',
  'db_mode00'     =>  'Immobile',
  'db_mode01'     =>  'Can move',
  'db_mode02'     =>  'Looter',
  'db_mode03'     =>  'Aggressive',
  'db_mode04'     =>  'Assistive',
  'db_mode05'     =>  'Sensor',
  'db_mode06'     =>  'Summon slaves',
  'db_mode07'     =>  'Plant',
  'db_mode08'     =>  'Is a monster',
  'db_mode09'     =>  'Detects',
  'db_mode10'     =>  'Changes target',
  'db_mode11'     =>  'Change chase',
  'db_mode12'     =>  'Angry',
  'db_mode13'     =>  'Change target',
  'db_mode14'     =>  'Change chase',
  
  // Skill states
  
  'db_sstate1'    =>  'Used when idle',
  'db_sstate2'    =>  'Used when attacking enemy',
  'db_sstate3'    =>  'Used when following enemy',
  'db_sstate4'    =>  'Used when angry',
  'db_sstate5'    =>  'Used when chasing an enemy',
  'db_sstate6'    =>  'Used when walking',
  
  'db_noskill'    =>  'This monster doesn\'t have any skills',
  'db_skillvl'    =>  'Level',
  
  // Monster races
  
  'db_mob_race0'  =>  'Formless',
  'db_mob_race1'  =>  'Undead',
  'db_mob_race2'  =>  'Beast',
  'db_mob_race3'  =>  'Plant',
  'db_mob_race4'  =>  'Insect',
  'db_mob_race5'  =>  'Fish',
  'db_mob_race6'  =>  'Demon',
  'db_mob_race7'  =>  'Demi-Human',
  'db_mob_race8'  =>  'Angel',
  'db_mob_race9'  =>  'Dragon',
  'db_mob_race-1' =>  'None/uknown',

  // Elements
  'mElementNA'  =>  'Uknown',
  'mElement0'   =>  'Neutral',
  'mElement1'   =>  'Water',
  'mElement2'   =>  'Earth',
  'mElement3'   =>  'Fire',
  'mElement4'   =>  'Wind',
  'mElement5'   =>  'Poison',
  'mElement6'   =>  'Holy',
  'mElement7'   =>  'Shadow',
  'mElement8'   =>  'Ghost',
  'mElement9'   =>  'Undead',
  
  'mElementLv'  =>  'Level',

  // Walking speed
  
  'db_walkspd1' =>  'Crawl',
  'db_walkspd2' =>  'Very very slow',
  'db_walkspd3' =>  'Very slow',
  'db_walkspd4' =>  'Slow',
  'db_walkspd5' =>  'Average',
  'db_walkspd6' =>  'Fast',
  'db_walkspd7' =>  'Very fast',
  'db_walkspd8' =>  'Very very fast',
  'db_walkspd9' =>  'Overflow',
  
  // Monster sizes
  
  'db_mob_scale0' =>  'Small',
  'db_mob_scale1' =>  'Medium',
  'db_mob_scale2' =>  'Large',
  'db_mob_scale3'=>  'None',
  
  // Range

  'db_mob_range11'    =>  'Can\'t attack',
  'db_mob_range12'    =>  'Melee',
  'db_mob_range13'    =>  'Ranged',
  
  // Stat attributes
  
  // Primary
  'db_stat_str'   =>  'STR',
  'db_stat_dex'   =>  'DEX',
  'db_stat_vit'   =>  'VIT',
  'db_stat_agi'   =>  'AGI',
  'db_stat_int'   =>  'INT',
  'db_stat_luk'   =>  'LUK',
  
  // Secondary
  'db_stat_def'   =>  'DEF',
  'db_stat_mdef'  =>  'MDEF',
  
  // Damage
  'db_def_reduct' =>  'damage reduction',
  
  // ASPD & movement
  
  'db_aspd_sec'     =>  'hit(s)/sec',
  'db_calc_overflow'=>  'overflow',
  'db_cells_sec'    =>  'cell(s)/sec',
  'db_cells'        =>  'cells',

  // Legal stuff/credits
  
  'legal_gravity' =>  'Ragnarok Online is &copy; Gravity Corp. and Myung-Jin Lee. Please keep in mind most of the graphical content on this page is intellectual property of Gravity Corp.',
  'legal_erods'   => 'The ERODS software is &copy; OutOfCuriosity 2009. You may use and distribute ERODS in any way you see fit with no guarantee what so ever (provided \'as is\').', 

  
  );


?>