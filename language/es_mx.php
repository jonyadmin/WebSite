<?php if(!defined('EFFICIENT_ROOT')) exit();

  return array(

  // Language specific

  'language_current' => 'Español',
  'language_code' => 'es_mx',
  'language_select' => 'Selecciona tu Lenguaje:',

  // General

  'erods_contact' => 'Información de contacto',
  'erods_updates' => 'Ultimas actualizaciones',
  'erods_legal' => 'Legal',
  'erods_service' => 'Servicios',
  'erods_about' => 'The <i>Efficient Ragnarok Online Database System</i> es un proyecto el cual enfoca en crear una base de datos libre. Ahora mostrandose de la mejor manera en todos los navegadores!',

  // Main navigation
  'nav_mainpage' => 'Página principal',
  'nav_item' => 'Items',
  'nav_mobs' => 'Mounstros',
  'nav_maps' => 'Campos &amp; Calabozos',
  'nav_world' => 'Mapamundi',
  'nav_misc' => 'Misc.',
  'nav_tools' => 'Calculadoras &amp; tablas',
  'nav_settings' => 'Configuración',

  'nav_login' => 'Iniciar Sesión',
  'nav_logout' => 'Finalizar Sesión',
  'nav_register' => 'Registrarse',
  'nav_sitemap' => 'Mapa de la página',

  'main_src_mob' => 'Buscar por mounstros',
  'main_src_mob_d' => 'buscar los mounstros de Ragnarok Online',
  'main_src_item' => 'Busqueda de items',
  'main_src_item_d' => 'Buscar entre todos los items del juego!',
  'main_src_map' => 'Viajar por los campos',
  'main_src_map_d' => 'Atravesar los mapas de Rune-Midgard',
  'main_src_world' => 'Ver el mundo',
  'main_src_world_d'=> 'Obtener vista global del mapamundi',

  // Item search

  'src_item_title' => 'Busqueda de items',
  'src_item_prompt' => 'Ingresar nombres de items',
  'src_item_desc' => 'La base de datos de items te provee de toda la informacion que te pudiese interesar referente a los items de Ragnarok Online. <br />Para más opciones selecciona <a href="?act=item">el sistema avanzado de busqueda</a>.',

  'src_item_sEq' => 'Ver equipos',
  'src_item_sEq_d' => 'Ver todos los equipos disponibles a la vez!',
  'src_item_sGr' => 'Ver items por grupos',

  'src_item_findid' => 'Encontrar un item por su ID',
  'src_item_sdesc' => 'Buscar descripcion de un Item',
  'src_item_sdesc_p'=> 'Separa las palabras clave por coma. El espacio en blanco es ignorado.',

  'src_item_scrpt' => 'Item Scripts',
  'src_item_scrpt_d'=> 'Desplegar Eathna script, Sript al equipado y script al desequipar',

  'src_item_ord100' => 'Alfabeticamente (A-Z)',
  'src_item_ord200' => 'Decendiente Alfabetico (Z-A)',
  'src_item_ord300' => 'Item ID',

  'src_item_irodesc' => 'Descripcion de IRO',
  'src_item_irodesc_d' => 'Si esta disponible, esta opción hara que los resultados muestren la descripción original  de IRO.',
  'src_item_oldcoll' => 'Vieja coleccion',
  'src_item_oldcoll_d' => 'Si esta disponible, esta opcion te mostrara la coleccion de imagenes anteriores al episodio 6: Amatsu.',
  'src_item_alphacoll' => 'Coleccion Alpha',
  'src_item_alphacoll_d'=> 'Si esta disponible, esta opcion te mostrara resultados del Cliente Alpha.',

  'src_item_minidesc' => 'Minimizar todas las descripciones de items!',
  'src_item_minidesc_d' => 'Esta funcion requiera que tengas activado Javascript.',

  // Monster search

  'src_mob_title' => 'Busqueda de mounstros',
  'src_mob_desc1' => 'La base de datos de Mounstros es muy util para tu cazerias de dia a dia, tambien te permite observar los stats de los mounstros, loot &amp; locaciones.',
  'src_mob_desc2' => 'Si no estas satisfecho con la funcionalidad standard de busqueda, deberias hechar un vistazo a la sección der <a href="?act=mob">busqueda avanzada de mounstros</a>.',
  'src_mob_prompt' => 'Ingresa el nombre de un mounstro',

  'src_mob_srcboss' => 'Mounstros MVP',
  'src_mob_srcboss_d' => 'Buscar todos los mounstros (MvP)',
  'src_mob_srcsize' => 'Ver a los mounstros por su Tamaño',

  'src_mob_findid' => 'Buscar un mounstro por su ID',
  'src_mob_dropsrc' => 'Buscar el Drop ID',
  'src_mob_mvponly' => 'Buscar solo mounstros MvP?',
  'src_mob_mvponly_d' => 'Desplegar solo mounstros MvP en los resultados.',

  // Field search

  'src_field_title' => 'Visor de Calabozos &amp; campos',

  // Search form

  'src_form_search' => 'Buscar',
  'src_form_prompt' => 'Porfavor llena la siguente forma. Toma en cuenta que busquedas precisas te daran resultados mas acertados.',

  'src_form_enable' => 'Habilitar',
  'src_form_disable'=> 'Deshabilitar',
  'src_form_fopt' => 'Opciones de Filtro',
  'src_form_dopt' => 'Opciones de Visión',

  'src_form_grter' => 'Mas grande que',
  'src_form_lesser' => 'Menor que',
  'src_form_equalt' => 'Exactamente',

  'src_form_maxres' => 'Resultado Maximo',
  'src_form_respage'=> 'resultados por página',


  'src_form_altm' => 'Modo Alternativo',
  'src_form_altm_d' => 'Deshabilita todas las imagenes y termina las funciones de Java y sus links',

  'src_form_resord' => 'Ordenar por resultado',
  'src_form_resord2'=> 'Ordenar por valor',

  'src_form_o_asc' => 'Ascendente',
  'src_form_o_desc' => 'Descendente',

  // Error messages

  // ERODS
  'e_notFound' => 'La pagina que buscas no existe.',
  'e_error_inc' => 'Error al incluir %s en función \'%s\'.',
  'e_error_func' => 'Error in función \'%s\'.',

  'e_dhandler' => 'Manejador de Debug',
  'e_ehandler' => 'Manejador de Error',

  // Database
  'e_sql_query' => 'No se peude realizar la consulta en la base de datos',
  'e_sql_con' => 'No se puede establecer contacto con la base de datos.',
  'e_sql_con2' => 'Por el momento hay un problema con la base de datos, porfavor intentalo de nuevo mas tarde.',

  // Search

  'e_src_noRes' => 'Lo siento, no hay resultados!',
  'e_src_cont' => 'El contenido que buscas no existe en nuestra base de datos. Obviamente hay un problema interno en alguna parte (puedes notificarle al Admin si tienes ganas de quejarte).',

  // Account

  'ac_user' => 'Usuario',
  'ac_pass' => 'Password',
  'ac_login' => 'Ingresar',

  'ac_login' => 'Ingresaste correctamente! Bienvenido, %s',
  'ac_loginf' => 'Fallaste al ingreso.',
  'ac_logout' => 'Correctamente has cerrado tu cuenta!',
  'ac_logoutf' => 'Algo paso terriblemente mal, no se puede cerrar tu cuenta!',
  'ac_settingss' => 'Tus opciones han sido guardadas',

  // Settings

  'settings_inf' => 'Los rates son multiplos del porcentaje oficial de experiencia obtenidos en los servidores oficiales de AEGIS.',
  'settings_desc' => 'Una pagina basica de configuraciones ha sido implementada. Por ahora las configuraciones se guardan por sesión, asi que puedes configurar tus rates de experiencia y de drops para que sean los correctos. Disfrutalo!',
  'settings_save' => 'Guardar Configuración',

  // AJAX messages

  'ajax_broken' => 'La funcionalidad AJAX actualmente esta rota debido a un error en la base de datos.',

  'ajax_action' => 'Que accion prefieres? Selecciona una de la siguiente lista:',
  'ajax_add_cur' => 'Agregar a los resultados existentes',
  'ajax_new_src' => 'realizar una nueva busqueda',
  'ajax_close_d' => 'Cerrar esta ventana',
  'ajax_close_w' => 'Cerrar ventanas',
  'ajax_options' => 'Opciones',

  'ajax_suggest' => 'Sugerencias',
  'ajax_noRes' => 'No existe %s en nuestra base de datos!',
  'ajax_monster' => 'mounstro',
  'ajax_item' => 'item',
  'ajax_inform' => 'Ingresa el nombre del %s que te gustaria buscar',

  // Stats

  'stat_pageexec' => 'Pagina ejecutada en <b>%s</b> segundos con un total de <b>%s</b> queries usadas.',
  'stat_plugins' => 'Activar plug-ins',

  // Game database

  // Results
  'res_sres' => 'Resultados de busqueda',
  'res_rnav' => 'Navegación en la página',
  'res_pres' => 'Hubo un total de %s resultados.',
  'res_showr' => 'Enlistando %s resultados por página.',
  'res_go2top' => 'Regreso arriba',

  // Field database
  'map_fieldunv' => 'La base de datos de los mapas no esta disponible por el momento. Contacta un administrador para mayor información.',
  'map_noRes' => 'El mapa solicitado, %s, no fue encontradp.',
  'map_view' => 'Vista del mapa',
  'map_mobstat' => 'Stats de los mounstros',

  // Monster statistics
  'mstat_mobs' => 'Mounstros',
  'mstat_size' => 'Tamaños de los mounstros',
  'mstat_ele' => 'Elementos de los mounstros',
  'mstat_race' => 'Razas de los mounstros',
  'mstat_range' => 'Rango de los mounstros',

  // Item database

  // Item types
  'db_item_0' => 'Item curativo',
  'db_item_2' => 'Usable',
  'db_item_3' => 'Misc',
  'db_item_4' => 'Arma',
  'db_item_5' => 'Armadura',
  'db_item_6' => 'Carta',
  'db_item_7' => 'Huevo de Mascota',
  'db_item_8' => 'Equipo de mascota',
  'db_item_10' => 'Munición',
  'db_item_11' => 'Usable (delayed)',
  'db_item_01' => 'Desconocido',
  'db_item_13' => 'Completamente usable',

  // Item equip locations
  'db_iloc_1' => 'Casco bajo',
  'db_iloc_2' => 'Arma',
  'db_iloc_4' => 'Capa',
  'db_iloc_8' => 'Accesorio 1',
  'db_iloc_16' => 'Armadura',
  'db_iloc_32' => 'Escudo',
  'db_iloc_34' => 'arma de dos manos',
  'db_iloc_64' => 'Botas',
  'db_iloc_128' => 'Accesorio 2',
  'db_iloc_136' => 'Accesorio',
  'db_iloc_256' => 'Casco alto',
  'db_iloc_512' => 'Casco mediano',
  'db_iloc_768' => 'casco mediano-alto',
  'db_iloc_769' => 'Casco bajo-mediano-alto',
  'db_iloc_01' => 'No se puede equipar',

  // Item results
  'db_item_item' => 'Item',
  'db_item_viewcoll' => 'View item collection image',
  'db_item_showdesc' => 'Show item description',

  'db_item_droppers' => 'Dropped By',
  'db_item_nodrops' => '<i>This item doesn\'t drop from any monster!</i>',
  'db_item_img' => 'Imagem',
  'db_item_cardimg' => 'Card Image',
  'db_item_id' => 'Item ID',
  'db_item_name' => 'Name',
  'db_item_type' => 'Tipo',
  'db_item_value' => 'Compra / Venda',
  'db_item_buy' => 'Price (Buy)',
  'db_item_eqloc' => 'Equip loc.',
  'db_item_numslots' => 'Slots',
  'db_item_weight' => 'Weight',

  'db_item_script' => 'Script',
  'db_item_oneqscript' => 'Script al equiparse',
  'db_item_uneqscript' => 'Script al desequiparse',

  'db_item_dropr_common' => 'Droprate comun',
  'db_item_dropr_healing' => 'Droprate de items curativos',
  'db_item_dropr_usable' => 'Droprate de Usables',
  'db_item_dropr_equipment' => 'Droprate de equipo',
  'db_item_dropr_card' => 'Droprate de cartas',
  'db_item_dropr_mvp' => 'Recompenzas de MvP',

  // Monster database

  'db_mob_img' => 'Imagen',
  'db_mob_id' => 'ID',
  'db_mob_name' => 'Nombre',
  'db_mob_pdmg' => 'Daño x Propiedad',
  'db_mob_hp' => 'Hit Points (HP)',
  'db_mob_sp' => 'Spell Points (SP)',
  'db_mob_lvl' => 'Nivel',
  'db_mob_ele' => 'Elemento',
  'db_mob_race' => 'Raza',
  'db_mob_size' => 'Tamañ',
  'db_mob_atk' => 'Ataque',
  'db_mob_bexp' => 'Base Exp.',
  'db_mob_jexp' => 'Job Exp.',
  'db_mob_dodge' => 'Evadir 95%',
  'db_mob_hit' => 'Hit 100%',
  'db_mob_range' => 'Rango',
  'db_mob_def' => 'Defensa',
  'db_mob_wspd' => 'Velocidad al caminar',
  'db_mob_aspd' => 'Velocidad de ataque',
  'db_mob_mrange' => 'Max. rango de skill',
  'db_mob_sight' => 'Sight',
  'db_mob_mode' => 'Modo',
  'db_mob_skill' => 'Skills',
  'db_mob_loot' => 'Loot',
  'db_mob_mloc' => 'Locaciones en el mapa',

  'db_bossreward' => 'Recompenzas de MvP',
  'db_bossmob' => 'MvP',

  // Monster modes

  'db_mode-1' => 'Pasivo',
  'db_mode00' => 'Inmobil',
  'db_mode01' => 'Se mueve',
  'db_mode02' => 'Looter',
  'db_mode03' => 'Agresivo',
  'db_mode04' => 'Asistente',
  'db_mode05' => 'Sensor',
  'db_mode06' => 'Invoca esclavos',
  'db_mode07' => 'Planta',
  'db_mode08' => 'Es un mounstro',
  'db_mode09' => 'Detecta',
  'db_mode10' => 'Cambia el objetivo',
  'db_mode11' => 'Cambia la persecución',
  'db_mode12' => 'Enojado',
  'db_mode13' => 'Cambiar objetivo',
  'db_mode14' => 'Cambiar persecucióm',

  // Skill states

  'db_sstate1' => 'cuando esta sin hacer nada',
  'db_sstate2' => 'Usado cuando ataca a un enemigo',
  'db_sstate3' => 'Usado cuando persigue a un enemigo',
  'db_sstate4' => 'Usado cuando esta enojado',
  'db_sstate5' => 'Usado cuando persigue a un enemigo',
  'db_sstate6' => 'Usado mientras camina',

  'db_noskill' => 'Este mounstro no tiene skills',
  'db_skillvl' => 'Nivel',

  // Monster races

  'db_mob_race0' => 'Formless',
  'db_mob_race1' => 'Undead',
  'db_mob_race2' => 'Beast',
  'db_mob_race3' => 'Plant',
  'db_mob_race4' => 'Insect',
  'db_mob_race5' => 'Fish',
  'db_mob_race6' => 'Demon',
  'db_mob_race7' => 'Demi-Human',
  'db_mob_race8' => 'Angel',
  'db_mob_race9' => 'Dragon',
  'db_mob_race-1' => 'None/uknown',

  // Elements
  'mElementNA' => 'Uknown',
  'mElement0' => 'Neutral',
  'mElement1' => 'Water',
  'mElement2' => 'Earth',
  'mElement3' => 'Fire',
  'mElement4' => 'Wind',
  'mElement5' => 'Poison',
  'mElement6' => 'Holy',
  'mElement7' => 'Shadow',
  'mElement8' => 'Ghost',
  'mElement9' => 'Undead',

  'mElementLv' => 'Level',

  // Walking speed

  'db_walkspd1' => 'Gatea',
  'db_walkspd2' => 'Muy muy lento',
  'db_walkspd3' => 'Muy lento',
  'db_walkspd4' => 'Lento',
  'db_walkspd5' => 'Regular',
  'db_walkspd6' => 'Rapido',
  'db_walkspd7' => 'Muy rapido',
  'db_walkspd8' => 'Muy muy rapido',
  'db_walkspd9' => 'Sonico',

  // Monster sizes

  'db_mob_scale0' => 'Pequeño',
  'db_mob_scale1' => 'Mediano',
  'db_mob_scale2' => 'Grande',
  'db_mob_scale3'=> 'Ninguno',

  // Range

  'db_mob_range11' => 'No puede atacar',
  'db_mob_range12' => 'Melee',
  'db_mob_range13' => 'Rango',

  // Stat attributes

  // Primary
  'db_stat_str' => 'STR',
  'db_stat_dex' => 'DEX',
  'db_stat_vit' => 'VIT',
  'db_stat_agi' => 'AGI',
  'db_stat_int' => 'INT',
  'db_stat_luk' => 'LUK',

  // Secondary
  'db_stat_def' => 'DEF',
  'db_stat_mdef' => 'MDEF',

  // Damage
  'db_def_reduct' => 'reducción de daño',

  // ASPD & movement

  'db_aspd_sec' => 'hit(s)/sec',
  'db_calc_overflow'=> 'sonico',
  'db_cells_sec' => 'celda(s)/sec',
  'db_cells' => 'celdas',

  // Legal stuff/credits

  'legal_gravity' => 'Ragnarok Online is &copy; Gravity Corp. and Myung-Jin Lee. Please keep in mind most of the graphical content on this page is intellectual property of Gravity Corp.',
  'legal_erods' => 'The ERODS software is &copy; OutOfCuriosity 2009. You may use and distribute ERODS in any way you see fit with no guarantee what so ever (provided \'as is\').',
  
  );
  
?>