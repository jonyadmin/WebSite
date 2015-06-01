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
<div id="content">
<?php
if($dados_cash == "" || $dados_cash == 0){
	$dados_cash = "0";
	?>
	<div class="cash2"><a style="text-decoration:none; color:#fff; margin-left:-25px;" href="index.php?act=doacao" >CASH:$<?php echo $dados_cash['value']; ?></a></div>
<?php
	}else{
?>
	<div class="cash"><a style="text-decoration:none; color:#fff; margin-left:-25px;" href="index.php?act=doacao" >CASH:$<?php echo $dados_cash['value']; ?></a></div>
	<?php
	}
	?>
	<a style="text-decoration:none;"><h2>Sua identidade:<?php echo $user_account_id;?></a></h2>
	(Utilize a Identidade para saber se aquela conta de um amigo e realmente real e não uma conta fake comando in-game:@identidade <nome do player>)
	<div class="logstats"><a style="text-decoration:none;"><h2>seu login:<?php echo $userid;?></a></div></h2>
	<div class="logstatspass"><a style="text-decoration:none;"><h2>sua senha: **********</a></div></h2>
	(recomandado alterar a senha a cada 3 meses para a sua segurança click aqui para alterar.)
	<div class="logstasemail"><a style="text-decoration:none;"><h2>seu Email:<?php echo $userEmail;?></a></div></h2>
	<div class="logstaspim"><a style="text-decoration:none;"><h2>Seu PIM:<?php echo $userpin;?></a></div></h2>
	(Esqueceu sua senha PIM? click aqui para reculpera-la.)
	Conta criada:
	Horas online:
	
</div>