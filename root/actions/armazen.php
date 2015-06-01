<?php if(!defined('EFFICIENT_ROOT')) exit; ?>
<div id="content">
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
$sex = $infoaccounts["sex"]; 
$user_account_id = $infoaccounts["account_id"]; 
$cash = mysql_query("SELECT `value` FROM `acc_reg_num_db` WHERE `key`='#CASHPOINTS' AND `account_id`='".$user_account_id."'") or die (mysql_error());
$dados_cash = mysql_fetch_assoc( $cash );

}
?>
<table cellpadding="0" cellspacing="1" border="0" bgcolor="#CCCCCC" width="100%" style="font:11px Verdana, Arial, Helvetica, sans-serif;">
		<tr height="25">
			<td width="55"></td>
			<td width="125" id="string"><strong>Nome</strong></td>
			<td id="string"><strong>Quantidade</strong></td>
			<td id="string"><strong>HP</strong></td>
			<td id="string"><strong>EXP</strong></td>
			<td id="string"><strong><small>Job</small>EXP</strong></td>
			<td id="string"><strong>Elemento</strong></td>
			<td id="string"><strong>Raça</strong></td>
			<td id="string"><strong>Tam.</strong></td>
			<td id="string"><strong>Drop</strong></td>
		</tr>
<?php
					$seachestorage = ("SELECT * FROM storage WHERE `account_id`='".$user_account_id."' ORDER BY `unique_id`");
					$resstorage = mysql_query($seachestorage);
					$num_reg_storage = mysql_num_rows($resstorage);
					for($j=0;$j<$num_reg_storage;$j++) {
					$campo = mysql_fetch_array($resstorage);
					$Nameid = $campo["nameid"];
					$amount = $campo["amount"];
					$seachitemname = mysql_query("SELECT name_english FROM item_db WHERE `account_id`='$Nameid'");

?>

		<tr bgcolor="#FFFFFF"><td align="center"><a href="index.php?act=mobview&ID=<?php echo $Nameid; ?>"><img src="media/item/<?php echo $Nameid; ?>.gif" alt="<?php echo $seachitemname; ?> {<?php echo $Nameid; ?>}" title="<?php echo $seachitemname; ?> {<?php echo $Nameid; ?>}" width="50"></a></td>
			<td><a href="index.php?act=mobview&ID=<?php echo $Nameid; ?>" style="margin-left:5px; text-decoration:none; color:#08088A;"><strong><?php echo $seachitemname; ?></strong></a></td>
			<td id="string"><div style="margin-left:5px;"><?php echo $amount; ?></div></td>
			<td id="string"><div style="margin-left:5px;"></div></td>
			<td id="string"><div style="margin-left:5px;"></div></td>
			<td id="string"><div style="margin-left:5px;"></div></td>
			<td id="string"><small><div style="margin-left:5px;"></div></small></td>
			<td id="string"><small><div style="margin-left:5px;"></div></small></td>
			<td id="string"><small><div style="margin-left:5px;"></div></small></td>
			<td id="string"><div style="margin-left:5px;"></div></td>
		</tr>
		<?php
		}
		?>
		</table>
</div>

