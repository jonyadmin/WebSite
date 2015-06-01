<?php if(!defined('EFFICIENT_ROOT')) exit();

return array(

  // Language specific

  'language_current' => 'Português (BR)',
  'language_code' => 'pt_br',
  'language_select' => 'Selecione seu idioma:',

  // General

  'erods_contact' => 'Contato',
  'erods_updates' => 'Atualizações',
  'erods_legal' => 'Legalidade',
  'erods_service' => 'Serviços',
  'erods_about' => 'O <i>Efficient Ragnarok Online Database System</i> é um projeto que visa criar um sistema de banco de dados livre compatível com o sistema de banco de dados do eAthena. Agora também com o mesmo visual em todos navegadores recentes!',

  // Main navigation
  'nav_mainpage' => 'Página Principal',
  'nav_item' => 'Itens',
  'nav_mobs' => 'Monstros',
  'nav_maps' => 'Campos e Cavernas',
  'nav_world' => 'Mundo',
  'nav_misc' => 'Diversos',
  'nav_tools' => 'Calculadoras e tabelas',
  'nav_settings' => 'Configurações',

  'nav_login' => 'Entrar',
  'nav_logout' => 'Sair',
  'nav_register' => 'Registre-se',
  'nav_sitemap' => 'Mapa do site',

  'main_src_mob' => 'Procurar monstros',
  'main_src_mob_d' => 'Navegar pelos monstros de Ragnarok Online',
  'main_src_item' => 'Visualizar itens',
  'main_src_item_d' => 'Procurar entre todos itens no jogo!',
  'main_src_map' => 'Viajar pelos campos',
  'main_src_map_d' => 'Atravessar pelos mapas de Rune-Midgard',
  'main_src_world' => 'Ver o mundo',
  'main_src_world_d'=> 'Obter uma visão completa do mundo',

  // Item search

  'src_item_title' => 'Buscar Item',
  'src_item_prompt' => 'Digite o nome do item',
  'src_item_desc' => 'O banco de dados de itens fornece todas as informações que você sempre quis saber sobre os itens de Ragnarok. <br />Para mais opções de busca vá até a <a href="?act=item">busca de itens avançada</a>.',

  'src_item_sEq' => 'Ver Equipamentos',
  'src_item_sEq_d' => 'Visualize todos equipamentos disponíveis de uma só vez!',
  'src_item_sGr' => 'Ver Itens Por Grupo',

  'src_item_findid' => 'Procurar um item pelo ID',
  'src_item_sdesc' => 'Procurar descrição',
  'src_item_sdesc_p'=> 'Separe as palavras-chave com vírgula. Espaços são ignorados.',

  'src_item_scrpt' => 'Script do Item',
  'src_item_scrpt_d'=> 'Mostra os scripts do eAthena, script equip e script unequip',

  'src_item_ord100' => 'Alfabeticamente (A-Z)',
  'src_item_ord200' => 'Alfabeticamente decrescente (Z-A)',
  'src_item_ord300' => 'ID do Item',

  'src_item_irodesc' => 'Descrição bRO',
  'src_item_irodesc_d' => 'Se disponível, essa opção fará com que os resultados mostrem a descrição oficial do bRO.',
  'src_item_oldcoll' => 'Collection antiga',
  'src_item_oldcoll_d' => 'Se disponível, essa opção fará com que os resultados mostrem as antigas imagens de collection do Episódio 6: Amatsu.',
  'src_item_alphacoll' => 'Collection alpha',
  'src_item_alphacoll_d'=> 'Se disponível, essa opção fará com que os resultados mostrem as antigas imagens de collection do client Alpha.',

  'src_item_minidesc' => 'Minimizar todas descrições!',
  'src_item_minidesc_d' => 'Essa função requer o Javascript ativado',
  
  // Monster search
  
  'src_mob_title'       =>  'Busca de Monstros',
  'src_mob_desc1'       =>  'O banco de dados de monstros é útil para a caça diária.',
  'src_mob_desc2'       =>  ' Se você não está satisfeito com a pesquisa padrão por monstros, você deve dar uma olhada na seção de <a href="?act=mob">busca de monstros avançada</a>.',
  'src_mob_prompt'      =>  'Digite o nome do monstro',

  'src_mob_srcboss'     =>  'Monstros Chefes',
  'src_mob_srcboss_d'   =>  'Veja todos os monstros tipo Chefe(MvP)',
  'src_mob_srcsize'     =>  'Mostrar monstros por tamanho',
  
  'src_mob_findid'      =>  'Buscar monstro pela ID',
  'src_mob_dropsrc'     =>  'Search Drop ID',
  'src_mob_mvponly'     =>  'Buscar somente monstros MVPs?',
  'src_mob_mvponly_d'   =>  'Mostra somente MVPs no resultado.',

  // Field search
  
  'src_field_title'     =>  'Visualizar calabouços e campos',

  // Search form
  
  'src_form_search' => 'Buscar',
  'src_form_prompt' =>  'Continuando preencha o seguinte formulario. Lembre-se de que dados precisos resultara em resultados precisos.',
  
  'src_form_enable' => 'Habilitar',
  'src_form_disable'=> 'Desabilitar',
  'src_form_fopt'   => 'Filtros',
  'src_form_dopt'   => 'Mostrar opções',
  
  'src_form_grter'  => 'Maior que',
  'src_form_lesser' => 'Menos que',
  'src_form_equalt' => 'Exatamente',
  
  'src_form_maxres' => 'Resultados máximos',
  'src_form_respage'=> 'resultados por página',
  
  
  'src_form_altm'   =>  'Modo Alternativo',
  'src_form_altm_d' =>  'Desabilita todas as funções de javascript nos links',
  
  'src_form_resord' => 'Ordenar resultados',
  'src_form_resord2'=> 'Ordenar por valor',
  
  'src_form_o_asc'  => 'Crescente',
  'src_form_o_desc' => 'Descrescente',
  
  // Error messages

  // ERODS
  'e_notFound'    =>  'A página que você esta procurando não existe.',
  'e_error_inc'   =>  'Falha ao incluir o arquivo %s na função \'%s\'.',
  'e_error_func'  =>  'Erro na função \'%s\'.',
  
  'e_dhandler'    =>  'Manipulardor de Debug',
  'e_ehandler'    =>  'Manipulador de Erro',

  // Database
  'e_sql_query'   =>  'Não foi possivel realizar a consulta no banco de dados',
  'e_sql_con'     =>  'Não é possível estabelecer uma conexão banco de dados.',
  'e_sql_con2'    =>  'Nós temos um problema com o acesso ao banco de dados, por favor, tente novamente mais tarde.',

  // Search
  
  'e_src_noRes'   =>  'Desculpe, não houve resultados!',
  'e_src_cont'    =>  'O conteúdo que você esta procurando não existe em nosso banco de dados. Óbviamente há um conflito interno em algum lugar (você pode notificar ao administrador caso o erro continue).',

  // Account

  'ac_user'       =>  'Usuário',
  'ac_pass'       =>  'Senha',
  'ac_login'      =>  'Entrar',
  
  'ac_login'      =>  'Sucesso ao entrar! Bem-vindo(a), %s',
  'ac_loginf'     =>  'Falha ao entrar.',
  'ac_logout'     =>  'Sucesso ao sair!',
  'ac_logoutf'    =>  'Alguma coisa correu mal. Não foi possivel sair!',
  'ac_settingss'  =>  'Suas configurações foram salvas',
  
  // Settings
  
  'settings_inf' =>  'As taxas são multiplicadas da experiência oficial. Porcentagem de drop adquirida em Gravity servidores AEGIS.',
  'settings_desc' =>  'Uma página de configurações básicas foi implementada. A partir de agora as configurações são armazenadas por sessão, assim você pode configurar a experiência e drops do seu servidor para obter os resultados corretos de uma vez. Enjoy!',
  'settings_save' =>  'Salvar Configurações',

  // AJAX messages
  
  'ajax_broken'   =>  'A função do AJAX esta com problemas devido a um erro no banco de dados.',
  
  'ajax_action'   =>  'Que ação você prefere? Escolha um item da lista:',
  'ajax_add_cur'  =>  'Adicionar nos resultados existentes',
  'ajax_new_src'  =>  'Fazer uma nova busca',
  'ajax_close_d'  =>  'Fexar essa janela de diálogo',
  'ajax_close_w'  =>  'Fexar janela',
  'ajax_options'  =>  'Opções',
  
  'ajax_suggest'  =>  'Sugestões',
  'ajax_noRes'    =>  'Não existe esse %s em nosso banco de dados!',
  'ajax_monster'  =>  'monstro',
  'ajax_item'     =>  'item',
  'ajax_inform'   =>  'Digite o nome do %s que você deseja visualizar',
  
  // Stats
  
  'stat_pageexec' =>  'Página executada em  <b>%s</b> segundos com o total de <b>%s</b> consultas usadas.',
  'stat_plugins'  =>  'Ative os plug-ins',
  
  // Game database
  
  // Results
  'res_sres'      =>  'Resultado da busca',
  'res_rnav'      =>  'Navegação de página',
  'res_pres'      =>  'Houve um total de %s resultado(s) para sua busca.',
  'res_showr'     =>  'Listando %s resultados por página.',
  'res_go2top'    =>  'Voltar ao topo',
  
  // Field database
  'map_fieldunv'  =>  'Os dados dos mapas não estão disponível no momento. Informe um administrador para mais informações.',
  'map_noRes'     =>  'O mapa solicitado, %s, não foi encontrado.',
  'map_view'      =>  'Ver mapa',
  'map_mobstat'   =>  'Status do monstro',
  
  // Monster statistics
  'mstat_mobs'    =>  'Monstros',
  'mstat_size'    =>  'Monster Sizes',
  'mstat_ele'     =>  'Monster Elements',
  'mstat_race'    =>  'Monster Races',
  'mstat_range'   =>  'Monster Ranges',
  
  // Item database

  // Item types
  'db_item_0'   =>  'Item de cura',
  'db_item_2'   =>  'Usável',
  'db_item_3'   =>  'Misc',
  'db_item_4'   =>  'Arma',
  'db_item_5'   =>  'Equipamento',
  'db_item_6'   =>  'Carta',
  'db_item_7'   =>  'Ovo de Pet',
  'db_item_8'   =>  'Equipamento de Pet',
  'db_item_10'  =>  'Munição',
  'db_item_11'  =>  'Usável (delay)',
  'db_item_01'  =>  'Nenhum',
  'db_item_13'  =>  'Todos ultilizaveis',
  
  // Item equip locations
  'db_iloc_1'   =>  'Cabeça Baixo (Aura)',
  'db_iloc_2'   =>  'Arma',
  'db_iloc_4'   =>  'Manto',
  'db_iloc_8'   =>  'Acessório 1',
  'db_iloc_16'  =>  'Armadura',
  'db_iloc_32'  =>  'Escudo',
  'db_iloc_34'  =>  'Arma de duas mãos',
  'db_iloc_64'  =>  'Botas',
  'db_iloc_128' =>  'Acessório 2',
  'db_iloc_136' =>  'Acessório',
  'db_iloc_256' =>  'Cabeça meio (Asa)',
  'db_iloc_512' =>  'Cabeça Cima(Elmo)',
  'db_iloc_768' =>  'Cabeça meio e cima',
  'db_iloc_769' =>  'Cabeça cima, baixo e meio',
  'db_iloc_01'  =>  'Não equipa',
  
  // Item results
  'db_item_item'        =>  'Item',
  'db_item_viewcoll'    =>  'Ver foto collection do item',
  'db_item_showdesc'    =>  'Mostrar descrição do item',
  
  'db_item_droppers'    =>  'Dropa de',
  'db_item_nodrops'     =>  '<i>Este item não dropa de qualquer monstro!</i>',
  'db_item_img'         =>  'Foto',
  'db_item_cardimg'     =>  'Foto da carta',
  'db_item_id'          =>  'ID',
  'db_item_name'        =>  'Nome',
  'db_item_type'        =>  'Tipo',
  'db_item_value'       =>  'Compra / Venda',
  'db_item_buy'         =>  'Preço (Compra)',
  'db_item_eqloc'       =>  'Equipa em.',
  'db_item_numslots'    =>  'Slots',
  'db_item_weight'      =>  'Peso',
  
  'db_item_script'      =>  'Script',
  'db_item_oneqscript'  =>  'Ao equipar',
  'db_item_uneqscript'  =>  'Ao desequipar',
  
  'db_item_dropr_common'    =>  'Drops de itens comuns',
  'db_item_dropr_healing'   =>  'Drops de itens de cura',
  'db_item_dropr_usable'    =>  'Drops de itens usáveis',
  'db_item_dropr_equipment' =>  'Drops de Equipamentos',
  'db_item_dropr_card'      =>  'Drops de Cartas',
  'db_item_dropr_mvp'       =>  'Recompensas MvP',
  
  // Monster database
  
  'db_mob_img'          =>  'Foto',
  'db_mob_id'           =>  'ID',
  'db_mob_name'         =>  'Nome',
  'db_mob_pdmg'         =>  'Propriedade do dano',
  'db_mob_hp'           =>  'Hit Points (HP)',
  'db_mob_sp'           =>  'Spell Points (SP)',
  'db_mob_lvl'          =>  'Nivel',
  'db_mob_ele'          =>  'Elemento',
  'db_mob_race'         =>  'Velocidade',
  'db_mob_size'         =>  'Tamanho',
  'db_mob_atk'          =>  'Ataque',
  'db_mob_bexp'         =>  'Experiência de base.',
  'db_mob_jexp'         =>  'Experiência de classe.',
  'db_mob_dodge'        =>  'Esquiva 95%',
  'db_mob_hit'          =>  'Hit 100%',
  'db_mob_range'        =>  'Distância',
  'db_mob_def'          =>  'Defesa',
  'db_mob_wspd'         =>  'Velocidade de Locomoção',
  'db_mob_aspd'         =>  'Velocidade de ataque',
  'db_mob_mrange'       =>  'Distância max. de habilidades',
  'db_mob_sight'        =>  'Avistar',
  'db_mob_mode'         =>  'Modo',
  'db_mob_skill'        =>  'Habilidades',
  'db_mob_loot'         =>  'Itens',
  'db_mob_mloc'         =>  'Mapas que nasce',
  
  'db_bossreward'       =>  'Recompensas MvP',
  'db_bossmob'          =>  'MvP',
  
  // Monster modes
  
  'db_mode-1'     =>  'Passivo',
  'db_mode00'     =>  'Imóvel',
  'db_mode01'     =>  'Pode se mover',
  'db_mode02'     =>  'Pega itens do chão',
  'db_mode03'     =>  'Agressivo',
  'db_mode04'     =>  'Assitiva',
  'db_mode05'     =>  'Sensor',
  'db_mode06'     =>  'Invoca monstros',
  'db_mode07'     =>  'Planta',
  'db_mode08'     =>  'É um monstro',
  'db_mode09'     =>  'Detector',
  'db_mode10'     =>  'Troca alvos',
  'db_mode11'     =>  'Troca caça',
  'db_mode12'     =>  'Nervoso',
  'db_mode13'     =>  'Troca o alvo',
  'db_mode14'     =>  'Troca caça',
  
  // Skill states
  
  'db_sstate1'    =>  'Usado quando ocioso',
  'db_sstate2'    =>  'Usado quando ataca o inimigo',
  'db_sstate3'    =>  'Usado quando segue o inimigo',
  'db_sstate4'    =>  'Usado quando nervoso',
  'db_sstate5'    =>  'Usado quando persegue o inimigo',
  'db_sstate6'    =>  'Usado quando esta andando',
  
  'db_noskill'    =>  'Este monstro não tem habilidades',
  'db_skillvl'    =>  'Nivel',
  
  // Monster races
  
  'db_mob_race0'  =>  'Amorfo',
  'db_mob_race1'  =>  'Morto-Vivo',
  'db_mob_race2'  =>  'Bruto',
  'db_mob_race3'  =>  'Planta',
  'db_mob_race4'  =>  'Inseto',
  'db_mob_race5'  =>  'Peixe',
  'db_mob_race6'  =>  'Demônio',
  'db_mob_race7'  =>  'Humanóide',
  'db_mob_race8'  =>  'Anjo',
  'db_mob_race9'  =>  'Dragão',
  'db_mob_race-1' =>  'Nenhum',

  // Elements
  'mElementNA'  =>  'Nenhum',
  'mElement0'   =>  'Neutro',
  'mElement1'   =>  'Água',
  'mElement2'   =>  'Terra',
  'mElement3'   =>  'Fogo',
  'mElement4'   =>  'Vento',
  'mElement5'   =>  'Veneno',
  'mElement6'   =>  'Sagrado',
  'mElement7'   =>  'Sombrio',
  'mElement8'   =>  'Fantasma',
  'mElement9'   =>  'Morto-Vivo',
  
  'mElementLv'  =>  'Nivel',

  // Walking speed
  
  'db_walkspd1' =>  'Rasteja',
  'db_walkspd2' =>  'Muito muito lento',
  'db_walkspd3' =>  'Muito lento',
  'db_walkspd4' =>  'Lento',
  'db_walkspd5' =>  'Média',
  'db_walkspd6' =>  'Rápido',
  'db_walkspd7' =>  'Muito rápido',
  'db_walkspd8' =>  'Muito muito rápido',
  'db_walkspd9' =>  'Extravasa',
  
  // Monster sizes
  
  'db_mob_scale0' =>  'Pequeno',
  'db_mob_scale1' =>  'Médio',
  'db_mob_scale2' =>  'Grande',
  'db_mob_scale3'=>  'Nenhum',
  
  // Range

  'db_mob_range11'    =>  'Não pode atacar',
  'db_mob_range12'    =>  'Ataca',
  'db_mob_range13'    =>  'Não ataca',
  
  // Stat attributes
  
  // Primary
  'db_stat_str'   =>  'FOR',
  'db_stat_dex'   =>  'DES',
  'db_stat_vit'   =>  'VIT',
  'db_stat_agi'   =>  'AGI',
  'db_stat_int'   =>  'INT',
  'db_stat_luk'   =>  'SOR',
  
  // Secondary
  'db_stat_def'   =>  'DEF',
  'db_stat_mdef'  =>  'MDEF',
  
  // Damage
  'db_def_reduct' =>  'redução de danos',
  
  // ASPD & movement
  
  'db_aspd_sec'     =>  'hit(s)/sec',
  'db_calc_overflow'=>  'extravasa',
  'db_cells_sec'    =>  'células(s)/sec',
  'db_cells'        =>  'células',

  // Legal stuff/credits
  
  'legal_gravity' =>  'Ragnarok Online © Gravity Corp. e Myung-Jin Lee. Tenha em mente a maior parte do conteúdo gráfico nesta página é propriedade intelectual da Gravity Corp.',
  'legal_erods'   => 'ERODS © OutOfCuriosity 2009. Você pode usar e distribuir o ERODS de qualquer forma que entender, sem qualquer garantia.',
  
  );


?>