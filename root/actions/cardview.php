<?php if(!defined('EFFICIENT_ROOT')) exit; 
require('conf/conect.php');
include('cardver.php');
$id = $_GET['id'];
$searchcard = ("SELECT * FROM item_db_pt_br WHERE id='$id' AND type='6'");
$rescard = mysql_query($searchcard);
if( @mysql_error() )
	die(mysql_error());
if( !mysql_num_rows($rescard) ) {
	die("Carta não encontrada.");
} else {
$campocard = mysql_fetch_array($rescard);
$Namecard = htmlentities($campocard["name_japanese"]);
$peso = $campocard["weight"];
$valorv = $campocard["price_sell"];
$valorc = $campocard["price_buy"];
$equipposition = $campocard["equip_locations"];
if($equipposition == 769){
$desclocation = "Equip. para cabeça";
}
if($equipposition == 64){
$desclocation = "Calçado";
}
if($equipposition == 16){
$desclocation = "Vestimenta";
}
if($equipposition == 2){
$desclocation = "Armamento";
}
if($equipposition == 4){
$desclocation = "Capa";
}
if($equipposition == 32){
$desclocation = "Escudo";
}
if($equipposition == 136){
$desclocation = "Escudo";
}
$searchdesc = mysql_query("SELECT `desc` FROM `item_desc` WHERE `id`='$id'") or die (mysql_error());
$campodesc = mysql_fetch_array($searchdesc);
$desc = htmlentities($campodesc["desc"]);
?>
<link rel="stylesheet" type="text/css" href="../database/css/style.css"/>
<table cellpadding="0" cellspacing="1" border="0" bgcolor="#CCCCCC" width="75%" style="font:11px Verdana, Arial, Helvetica, sans-serif;">
			<tr height="30" bgcolor="#EFEFEF"><td colspan="3" id="string"><h3><div style="margin-left:1%;"><img src="media/item/card.gif" alt="<?php echo $Namecard; ?> (Id: <?php echo $id; ?>)" title="<?php echo $Namecard; ?> (Id: <?php echo $id; ?>)"></div><div style="margin-left:40px; margin-top:-20px;"><?php echo $Namecard; ?> (Id: <?php echo $id; ?>)</div></h3></td></tr>
			<tr bgcolor="#FFFFFF"><td width="160" align="center" id="string" rowspan="8"><img src="media/card/<?php echo $id; ?>.gif" alt="<?php echo $Namecard; ?> (Id: <?php echo $id; ?>)" title="<?php echo $Namecard; ?> (Id: <?php echo $id; ?>)"> </td><td height="0" width="105"></td><td height="0"></td>
			<tr bgcolor="#FFFFFF"><td id="string" bgcolor="#EFEFEF" height="15"><div id="resultado"><strong>Preço <small>(compra)</small></strong></div></td><td id="string"><div id="resultado"><?php echo $valorv; ?>z</div></td></tr>
			<tr bgcolor="#FFFFFF"><td id="string" bgcolor="#EFEFEF" height="15"><div id="resultado"><strong>Preço <small>(venda)</small></strong></div></td><td id="string"><div id="resultado"><?php echo $valorv; ?>z</div></td></tr>
			<tr bgcolor="#FFFFFF"><td id="string" bgcolor="#EFEFEF" height="15"><div id="resultado"><strong>Peso</strong></div></td><td id="string"><div id="resultado"><?php echo ($peso/10); ?></div></td></tr>
			<tr bgcolor="#FFFFFF"><td id="string" bgcolor="#EFEFEF" height="15"><div id="resultado"><strong>Combinação</strong></div></td><td id="string"><div id="resultado"><?php echo $desclocation; ?></div></td></tr>
			<tr bgcolor="#FFFFFF"><td id="string" bgcolor="#EFEFEF" height="15" colspan="2"><div id="resultado" ><strong>Descrição</strong></div></td></tr>
			<tr bgcolor="#FFFFFF"><td id="stringalign" colspan="2"><div id="resultado" style="margin-right:5px;"><?php echo $desc; ?></div></td></tr>
</table>
<br>
<br><h2>Dropa de:</h2><br>
<?php
?>
<table cellpadding="0" cellspacing="1" border="0" bgcolor="#CCCCCC" width="100%" style="font:11px Verdana, Arial, Helvetica, sans-serif;">
		<tr height="25">
		<td width="55"></td>
		<td width="95" id="string"><strong>Nome</strong></td>
		<td id="string"><strong>Lvl</strong></td>
		<td id="string"><strong>HP</strong></td>
		<td id="string"><strong>EXP</strong></td>
		<td id="string"><strong><small>Job</small>EXP</strong></td>
		<td id="string"><strong>Elemento</strong></td>
		<td id="string"><strong>Raça</strong></td>
		<td id="string"><strong>Tam.</strong></td>
		<td id="string"><strong>Drop</strong></td>
		</tr>
<?php 
		$searchdmob = mysql_query("SELECT * FROM `mob_db` WHERE `DropCardid`='$id'") or die (mysql_error());
		$num_reg_mob = mysql_num_rows($searchdmob);
		for($j=0;$j<$num_reg_mob;$j++) {
		$DropCardper = mysql_result($searchdmob, $j, 'DropCardper');
		if($DropCardper == 0 || $DropCardper == NULL){
		 echo "";
		}else{	
		$MobName = mysql_result($searchdmob, $j, 'iName');
		$Mobid = mysql_result($searchdmob, $j, 'ID');
		$Moblv = mysql_result($searchdmob, $j, 'LV');
		$Mobhp = mysql_result($searchdmob, $j, 'HP');
		$Mobexp = mysql_result($searchdmob, $j, 'EXP');
		$Mobjexp = mysql_result($searchdmob, $j, 'JEXP');
		$elemento = mysql_result($searchdmob, $j, 'Element');
		$raca = mysql_result($searchdmob, $j, 'Race');
		$tamanho = mysql_result($searchdmob, $j, 'Scale');
		require('tableelement.php');
		require('race.php');
		require('scale.php');
?>
		<tr bgcolor="#FFFFFF"><td align="center"><a href="index.php?act=mobview&ID=<?php echo $Mobid; ?>"><img src="media/monster/<?php echo $Mobid; ?>.gif" alt="<?php echo $MobName; ?> {<?php echo $Mobid; ?>}" title="<?php echo $MobName; ?> {<?php echo $Mobid; ?>}"></a></td>
			<td id="string"><a href="index.php?act=mobview&ID=<?php echo $Mobid; ?>" style="margin-left:5px; text-decoration:none; color:#08088A;"><strong><?php echo $MobName; ?></strong></a></td>
			<td id="string"><div id="resultado"><?php echo $Moblv; ?></div></td>
			<td id="string"><div id="resultado"><?php echo $Mobhp; ?></div></td>
			<td id="string"><div id="resultado"><?php echo $Mobexp; ?></div></td>
			<td id="string"><div id="resultado"><?php echo $Mobjexp; ?></div></td>
			<td id="string"><small><div id="resultado"><?php echo $elemento; ?></div></small></td>
			<td id="string"><small><div id="resultado"><?php echo $raca; ?></div></small></td>
			<td id="string"><small><div id="resultado"><?php echo $tamanho; ?></div></small></td>
			<td id="string"><div id="resultado"><?php echo ($DropCardper/100); ?>%</div></td>
			</tr>
<?php
}
}
}
?>
</table>