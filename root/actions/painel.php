	<script type="text/javascript" src="../database/js/jquery-1.3.2.min.js"></script>
<?php
if((!isset($_SESSION['user_login'])== true)and(!isset($_SESSION['pass_login'])==true)){ 
unset($_SESSION['user_login']);
unset($_SESSION['pass_login']);
$_SESSION['user_login'] = NULL;
$_SESSION['pass_login'] = NULL;
print '<script>window.location.href=("index.php");</script>';
} else {
$logado = $_SESSION['user_login'];
$logadopass = $_SESSION['pass_login'];
}
require('conf/conect.php');
$searchaccount = ("SELECT * FROM login WHERE userid='$logado' AND user_pass='$logadopass'") or die (mysql_error());
$res2account = mysql_query($searchaccount);
if( @mysql_error() )
	die(mysql_error());
if( !mysql_num_rows($res2account) ) {
header("Location:index.php") or die (mysql_error());
} else {
$infoaccounts = mysql_fetch_array($res2account);	
$userid = $infoaccounts["userid"];
$userpass = $infoaccounts["user_pass"];
$userEmail = $infoaccounts["email"]; 
$userpin = $infoaccounts["pincode"]; 
$user_account_id = $infoaccounts["account_id"]; 
$cash = mysql_query("SELECT `value` FROM `acc_reg_num_db` WHERE `key`='#CASHPOINTS' AND `account_id`='".$user_account_id."'") or die (mysql_error());
$dados_cash = mysql_fetch_assoc( $cash );

}

?>
<script type="text/javascript">
	$(document).ready(function(){
	$("#carregando").hide();
			$("#optionsmenu a").click(function(){
				pagina = "index.php?act="+$(this).attr('href')
				
	$("#carregando").ajaxStart(function(){
				$("#contstats").hide();
				$(this).show();
				
		})
	$("#carregando").ajaxStop(function(){
				$(this).hide();
				$("#contstats").show();
		})
	$("#contstats").load(pagina +" #content")
	return false;
		})
	})
</script>
<div id="menupainelaccount">
		<div id="optionsmenu">
			<a href="home"><img src="../database/images/account.png" border="0" onmouseover="this.src='../database/images/accounthover.png'" onmouseout="this.src='../database/images/account.png'"></a>
			<a href="personagens"><img src="../database/images/personagens.png" border="0" onmouseover="this.src='../database/images/personagenshover.png'" onmouseout="this.src='../database/images/personagens.png'"></a>
			<a href="armazen"><img src="../database/images/kafra.png" border="0" onmouseover="this.src='../database/images/kafrahover.png'" onmouseout="this.src='../database/images/kafra.png'"></a>
			<a href="indexce42.html?p=doacao"><img src="../database/images/trade.png" border="0" onmouseover="this.src='../database/images/tradehover.png'" onmouseout="this.src='../database/images/trade.png'"></a>
			<a href="indexce42.html?p=doacao"><img src="../database/images/vote_menu.png" border="0" onmouseover="this.src='../database/images/vote_menuhover.png'" onmouseout="this.src='../database/images/vote_menu.png'"></a>
			<a href="indexce42.html?p=doacao"><img src="../database/images/historico.png" border="0" onmouseover="this.src='../database/images/historicohover.png'" onmouseout="this.src='../database/images/historico.png'"></a>
			<a href="indexce42.html?p=doacao"><img src="../database/images/mensagens.png" border="0" onmouseover="this.src='../database/images/mensagenshover.png'" onmouseout="this.src='../database/images/mensagens.png'"></a>
		</div>
</div>

<div id="infoaccount">
<div id="carregando">
<img src="../database/images/aguarde128.gif">
</div>
<div id="contstats">
<?php
include('../database/root/actions/home.php');

?>
</div>
</div>

