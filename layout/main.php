<?php if(!defined('EFFICIENT_ROOT')) exit; ?>
    <link rel="stylesheet" type="text/css" href="../database/css/style.css"/>
    <div id="main">

      <div>
      
        <!--<div style="float: left; width: 129px; height: 1em; padding: 6px; color: #ffffff;"></div>-->
      
        <div style="text-align: left; padding: 5px 10px 5px 10px; background: #000000; color: #ffffff;">
         <!-- <?php 
          
            if(AUTH && isset($_SESSION['user'])) echo $_SESSION['user'] . ', lvl ' . $_SESSION['level'] . ' user';
            echo (AUTH) ? '<a href="?act=dologin" class="loginLink">' . message('nav_logout') . '</a>' : '<a href="?act=login" class="loginLink">' . message('nav_login') . '</a>';
          ?>
          <a href="./" style="color: #ffffff; margin-left: 20px;"><?php echo message('nav_register'); ?></a>-->
		  <?php
		  if((!isset($_SESSION['user_login'])== true)and(!isset($_SESSION['pass_login'])==true)){ 
			unset($_SESSION['user_login']);
			unset($_SESSION['pass_login']);
			$_SESSION['user_login'] = NULL;
			$_SESSION['pass_login'] = NULL;
			$conta = "Visitante";
			$statslog = "";
			$statslog1 = "LOGAR NO SITE";
			$statslink1 = "index.php";
			$statslog2 = "REGISTRAR";
			$statslink2 = "index.php?act=registrar";
			}else{
			$logado = $_SESSION['user_login'];
			$conta = $logado;
			$statslog = "| Deslogar";
			$statslog1 = "DESLOGAR DA CONTA";
			$statslink1 = "../database/root/actions/deslogar.php";
			$statslog2 = "PAINEL DE CONTROLE";
			$statslink2 = "index.php?act=painel";
			}
			include('conf/conect.php');
			$login = mysql_query("SELECT * FROM `login`");
			$char = mysql_query("SELECT * FROM `char`");
			$woe = mysql_query("SELECT `woe_online` FROM `woe_ativa_site` WHERE `statuswoe` = `status`");
			$online = mysql_query("SELECT `online` FROM `char` WHERE `online` = 1");
			$on = mysql_num_rows($online);
			$account = mysql_num_rows($login);
			$users = mysql_num_rows($char);
			$ip				=	"127.0.0.1:70";	// localhost ou o Ip do Seu Servidor caso esteja utilizando MySQL Remoto
			$login			=	"6900";			// Porta do Login-Server
			$fp = fsockopen($ip, $login, $errno, $errstr);
			if (!$fp) {
			$statusserver = "<online> ONLINE</online>";
			} else {
			$statusserver = "<offline> OFFLINE</offline>";
			}
			if($woe == 0){
			$statuswoe = "<offline> OFF</offline>";
			}else{
			$statuswoe = "<offline> ON</offline>";
			}
		  ?>
        </div>
      </div>
    	<div id="barra">
		<div class="barra-center">
			<div class="barra30" style="color:#fff;" >Seja Bem-Vindo: <?php echo $conta;?>. <a style="text-decoration:none; color:#fff;" href="../database/root/actions/deslogar.php"><?php echo $statslog;?></a></div>
			<div class="barra70" style="text-align: right;"><a href="<?php echo $statslink2;?>" style="text-decoration:none;" id="linkbar"><?php echo $statslog2;?></a><s>|</s><a href="<?php echo $statslink1;?>" class="btn-toggle" style="text-decoration:none;" id="linkbar"><?php echo $statslog1; ?></a><s>|</s><a href="index.php?act=doacao" style="text-decoration:none;" id="linkbar">DOAÇÕES</a><s>|</s>SERVIDOR:<?php echo $statusserver; ?><s>|</s>JOGADORES ONLINE: <?php echo $on;?><s>|</s>WOE: <?php echo $statuswoe; ?></div>
		</div>
	</div>
	  <div id="logo" style="margin-left:300px; margin-top:100px;">
	  <a href="../database/index.php" ><img src="images/logo.png"></a>
	  </div>
	  
	  <div id="wrapper" style="margin-top:100px;">
	  <div  id="menu" align="center">
		<ul>
		<li><a style="background-image:url('../database/images/home.png');  height:53px;  width:76px;" href="../database/index.php"></a></li>
		<li><a style="background-image:url('../database/images/info.png'); height:53px;  width:127px;"></a>
		<div id="menu1">
		<ul>	
		<li><a href="../forum">Fórum</a></li>
		<li><a href="index.php?act=registrar">Cadastro</a></li>
		<li><a href="#">Donwload</a></li>
		<li><a href="#">Informações Gerais</a></li>
		<li><a href="../forum/tutoriais">Tutoriais</a></li>
		<li><a href="index.php?act=doacao">Fazer Doação</a></li>
		<li><a href="#">Rankings</a></li>
		<li><a href="#">Equipe Staff</a></li>
		
		</ul><!--peultima ul-->
		</div>
		</li>
		
		<li><a style="background-image:url('../database/images/guia.png'); height:53px;  width:148px;" ></a>
		<div id="menu2">
		<ul>
		<li><a href="index.php?act=forger">Forjando Armas</a></li>
		<li><a href="#">Preparando Poções</a></li>
		<li><a href="#">Criando Veneno Letal</a></li>
		<li><a href="#">Criando Tinturas</a></li>
		<li><a href="#">Criando Flechas</a></li>
		<li><a href="#">Cozinhando</a></li>
		<li><a href="#">Projéteis</a></li>
		<li><a href="#">Conversores Elementais</a></li>
		<li><a href="#">Pedras Elementais</a></li>
		</ul><!--peultima ul-->
		</div>
		</li>

		
		<li><a style="background-image:url('../database/images/itens.png'); height:53px;  width:131px;" ></a>
		<div id="menu5">
		<ul>
		<li><a href="index.php?act=itemver">Ver Itens</a></li>
		<li><a href="index.php?act=itemsearch">Lista Itens</a></li>
		<li><a href="index.php?act=item">Buscar Itens</a></li>	
		</ul><!--peultima ul-->
		</div>
		</li>
		
		
		<li><a style="background-image:url('../database/images/equip.png'); height:53px;  width:147px;" ></a>
		<div id="menu2">
		<ul>
		<li><a href="index.php?act=equipver">Ver Equipamentos</a></li>
		<li><a href="#">Lista Equipamentos</a></li>
		<li><a href="index.php?act=item">Buscar Equipamentos</a></li>
		
		</ul><!--peultima ul-->
		</div>
		</li>
		<li><a style="background-image:url('../database/images/cartas.png'); height:53px;  width:123px;"></a>
		<div id="menu3">
		<ul>
		<li><a href="index.php?act=cardver">Ver Cartas</a></li>
		<li><a href="#">Lista Cartas</a></li>
		<li><a href="#">Buscar Cartas</a></li>
		<li><a href="#">Combo de Cartas</a></li>
		</ul><!--peultima ul-->
		</div>
		</li>
		
		<li><a style="background-image:url('../database/images/mobs.png'); height:53px;  width:122px;" ></a>
		<div id="menu3">
		<ul>
		<li><a href="index.php?act=mobver">Ver Monstros</a></li>
		<li><a href="#">Lista Monstros</a></li>
		<li><a href="#">Buscar Monstros</a></li>
		<li><a href="#">PET/Estimação</a></li>
		<li><a href="index.php?act=elements">Propriedades</a></li>
		</ul><!--peultima ul-->
		</div>
		</li>
		
		<li><a style="background-image:url('../database/images/mapas.png'); height:53px;  width:108px;"></a>
		<div id="menu4">
		<ul>
		<li><a href="index.php?act=world">Ver Mapa Global</a></li>
		<li><a href="index.php?act=map">Lista de Mapas</a></li>
		</ul><!--peultima ul-->
		</div>
		</li>
		<li><a style="background-image:url('../database/images/quest.png'); height:53px;  width:101px;" href="index.php?act=quest"></a>
		</li>
		<li><a style="background-image:url('../database/images/vote.png'); height:53px;  width:114px;" href="index.php?act=login"></a></li>
		</ul><!--ultima ul-->
		</div>
</div>
      
    <div style="height:43px; width: 100%;"></div>
    
    </div>
 
    <div id="necky_nuts">
      
      <div class="inpadding">