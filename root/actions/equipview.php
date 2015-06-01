<?php if(!defined('EFFICIENT_ROOT')) exit; 
require('conf/conect.php');
include('equipver.php');
$id = $_GET['id'];
$searchequip = ("SELECT * FROM item_db_pt_br WHERE id='$id'");
$resequip = mysql_query($searchequip);
if( @mysql_error() )
	die(mysql_error());
if( !mysql_num_rows($resequip) ) {
	die("Equipamento não encontrado.");
}
$campoequip = mysql_fetch_array($resequip);
$type = $campoequip["type"];
if($type == 6 || $type == 0 || $type == 2 || $type == 3 || $type == 11){
 die("Equipamento não encontrado.");
} else {
$Nameequip = htmlentities($campoequip["name_japanese"]);
$peso = $campoequip["weight"];
$valorv = $campoequip["price_sell"];
$valorc = $campoequip["price_buy"];
$slots = $campoequip["slots"];
$LvArma = $campoequip["weapon_level"];
$Lvequipar = $campoequip["equip_level"];
$Ataque = $campoequip["attack"];
$view = $campoequip["view"];
$Defesa = $campoequip["defence"];
$alcance = $campoequip["range"];
$genero = $campoequip["equip_genders"];
$tiposjobs = $campoequip["equip_upper"];
$equipposition = $campoequip["equip_locations"];
$jobinfo = $campoequip["equip_jobs"];
require('classesequip.php');
require('equiplocationinfo.php');
require('jobclasses.php');
$searchdesc = mysql_query("SELECT `desc` FROM `item_desc` WHERE `id`='$id'") or die (mysql_error());
$campodesc = mysql_fetch_array($searchdesc);
$desc = htmlentities($campodesc["desc"]);
?>

<table cellpadding="0" cellspacing="1" border="0" bgcolor="#CCCCCC" width="80%" style="font:11px Verdana, Arial, Helvetica, sans-serif;">
			<tr height="30" bgcolor="#EFEFEF"><td colspan="3" id="string"><h3><div id="table"><img src="media/item/<?php echo $id; ?>.gif" alt="<?php echo $Nameequip; ?> (Id: <?php echo $id; ?>)" title="<?php echo $Nameequip; ?> (Id: <?php echo $id; ?>)"><div style="margin-top:-20px; margin-left:30px; color:#08088A;"><?php echo $Nameequip; ?> <?php if($slots == 0){echo "";}else{echo "[".$slots."]";}?> (Id: <?php echo $id; ?>)</div></div></h3></td></tr>
			<tr bgcolor="#FFFFFF"><td width="140" align="center" id="string" rowspan="17"><img src="media/collection/<?php echo $id; ?>.gif" alt="<?php echo $Nameequip; ?> (Id: <?php echo $id; ?>)" title="<?php echo $Nameequip; ?> (Id: <?php echo $id; ?>)"> </td>
			<td height="0" width="150"></td><td height="0"></td>
			<tr bgcolor="#FFFFFF"><td height="20" id="string" bgcolor="#EFEFEF"><strong><div id="resultado">Descrição</div></strong></td><td id="string"><div id="resultado" style="margin-right:10px;"><?php echo $desc; ?></div></td></tr>
			<tr bgcolor="#FFFFFF"><td height="20" id="string" bgcolor="#EFEFEF"><strong><div id="resultado">Preço <small>(compra)</div></small></strong></td><td id="string"><div id="resultado"><?php echo $valorc; ?></div></td></tr>
			<tr bgcolor="#FFFFFF"><td height="20" id="string" bgcolor="#EFEFEF"><strong><div id="resultado">Preço <small>(venda)</div></small></strong></td><td id="string"><div id="resultado"><?php echo $valorv; ?></div></td></tr>
			<tr bgcolor="#FFFFFF"><td height="20" id="string" bgcolor="#EFEFEF"><strong><div id="resultado">Peso</div></strong></td><td id="string"><div id="resultado"><?php echo ($peso/10); ?></div></td></tr>
			<tr bgcolor="#FFFFFF"><td height="20" id="string" bgcolor="#EFEFEF"><strong><div id="resultado">View</div></strong></td><td id="string"><div id="resultado"><?php echo $view; ?></div></td></tr>
			<tr bgcolor="#FFFFFF"><td height="20" id="string" bgcolor="#EFEFEF"><strong><div id="resultado">Slots</div></strong></td><td id="string"><div id="resultado"><?php echo $slots; ?></div></td></tr>
			<tr bgcolor="#FFFFFF"><td height="20" id="string" bgcolor="#EFEFEF"><strong><div id="resultado">Nível <small>Necessário</div></small></strong></td><td id="string"><div id="resultado"><?php echo $Lvequipar; ?></div></td></tr>
				<?php
				if($LvArma == NULL || $LvArma == 0){
				echo "";
				}else{
				?>
				<tr bgcolor="#FFFFFF"><td height="20" id="string" bgcolor="#EFEFEF"><strong><div id="resultado">Nível <small>da arma</div></small></strong></td><td id="string"><div id="resultado"><?php echo $LvArma; ?></div></td></tr>
				<?php
				}
				?>
				<?php 
				if($Ataque == NULL && $Defesa >= 1){
				?>
				<tr bgcolor="#FFFFFF"><td height="20" id="string" bgcolor="#EFEFEF"><strong><div id="resultado">Defesa</div></strong></td><td id="string"><div id="resultado"><?php echo $Defesa; ?></div></td></tr>
				<?php
				}
				?>
				<?php 
				if($Defesa == NULL && $Ataque >= 1){
				?>
				<tr bgcolor="#FFFFFF"><td height="20" id="string" bgcolor="#EFEFEF"><strong><div id="resultado">Ataque</div></strong></td><td id="string"><div id="resultado"><?php echo $Ataque; ?></div></td></tr>
				<?php
				}
				?>
				<?php 
				if($Defesa == NULL && $Ataque == NULL){
				echo "";
				}
				?>
				<?php
				if($alcance == NULL){
				echo "";
				}else{
				?>
				<tr bgcolor="#FFFFFF"><td height="20" id="string" bgcolor="#EFEFEF"><strong><div id="resultado">Alcance</div></strong></td><td id="string"><div id="resultado"><?php echo $alcance; ?></div></td></tr>	
				<?php
				}
				?>
			<tr bgcolor="#FFFFFF"><td height="20" id="string" bgcolor="#EFEFEF"><strong><div id="resultado">Tipo do item</div></strong></td><td id="string"><div id="resultado"><?php echo $typeequip; ?></div></td></tr>
			<tr bgcolor="#FFFFFF"><td height="20" id="string" bgcolor="#EFEFEF"><strong><div id="resultado">Classe</div></strong></td><td id="string"><div id="resultado"><?php echo $classelocal; ?></div></td></tr>
			<tr bgcolor="#FFFFFF"><td height="20" id="string" bgcolor="#EFEFEF"><strong><div id="resultado">Equipa em</div></strong></td><td id="string"><div id="resultado"><?php echo $equipposition; ?></div></td></tr>
			<tr bgcolor="#FFFFFF"><td height="20" id="string" bgcolor="#EFEFEF"><strong><div id="resultado">Jobs <small>que utilizam</div></small></strong></td><td id="string"><div id="resultado"><?php echo $jobinfo; ?></div></td></tr>
			<tr bgcolor="#FFFFFF"><td height="20" id="string" bgcolor="#EFEFEF"><strong><div id="resultado">Tipos <small>de jobs</div></small></strong></td><td id="string"><div id="resultado"><?php echo $tiposjobs; ?></div></td></tr>
			<tr bgcolor="#FFFFFF"><td height="20" id="string" bgcolor="#EFEFEF"><strong><div id="resultado">Gêneros <small>de jobs</div></small></strong></td><td id="string"><div id="resultado"><?php echo $genero; ?></div></td></tr>
</table>
<?php
}
?>
<br>
<?php
$searchop = mysql_query("SELECT * FROM `mob_db` WHERE `Drop1id`='$id' OR `Drop2id`='$id' OR `Drop3id`='$id' OR `Drop4id`='$id' OR `Drop5id`='$id' OR `Drop6id`='$id' OR `Drop7id`='$id' OR `Drop8id`='$id' OR `Drop9id`='$id' OR `MVP1id`='$id' OR `MVP2id`='$id' OR `MVP3id`='$id'") or die (mysql_error());
if( !mysql_num_rows($searchop) ) {
	echo("");
} else {
?>
<h3>Dropa de:</h3>
		<table cellpadding="0" cellspacing="1" border="0" bgcolor="#CCCCCC" width="100%" style="font:11px Verdana, Arial, Helvetica, sans-serif;">
		<tr height="25">
		<td width="55"></td>
		<td width="125" id="string"><strong>Nome</strong></td>
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
		$searchmob1 = mysql_query("SELECT * FROM `mob_db` WHERE `Drop1id`='$id'") or die (mysql_error());
		$num_reg_mob1 = mysql_num_rows($searchmob1);
		for($j=0;$j<$num_reg_mob1;$j++) {
		$Namemob1 = mysql_result($searchmob1, $j, 'iName');
		$IDmob = mysql_result($searchmob1, $j, 'ID');
		$Drop1id = mysql_result($searchmob1, $j, 'Drop1id');
		$Drop1per = mysql_result($searchmob1, $j, 'Drop1per');
		$level = mysql_result($searchmob1, $j, 'LV');
		$hp = mysql_result($searchmob1, $j, 'HP');
		$exp = mysql_result($searchmob1, $j, 'EXP');
		$jexp = mysql_result($searchmob1, $j, 'JEXP');
		$elemento = mysql_result($searchmob1, $j, 'Element');
		$raca = mysql_result($searchmob1, $j, 'RACE');
		$tamanho = mysql_result($searchmob1, $j, 'Scale');
		require('tableelement.php');
		require('race.php');
		require('scale.php');
		?>
		<tr bgcolor="#FFFFFF"><td align="center"><a href="index.php?act=mobview&ID=<?php echo $IDmob; ?>"><img src="media/monster/<?php echo $IDmob; ?>.gif" alt="<?php echo $Namemob1; ?> {<?php echo $IDmob; ?>}" title="<?php echo $Namemob1; ?> {<?php echo $IDmob; ?>}" width="50"></a></td>
			<td><a href="index.php?act=mobview&ID=<?php echo $IDmob; ?>" style="margin-left:5px; text-decoration:none; color:#08088A;"><strong><?php echo $Namemob1; ?></strong></a></td>
			<td id="string"><div style="margin-left:5px;"><?php echo $level; ?></div></td>
			<td id="string"><div style="margin-left:5px;"><?php echo $hp; ?></div></td>
			<td id="string"><div style="margin-left:5px;"><?php echo $exp; ?></div></td>
			<td id="string"><div style="margin-left:5px;"><?php echo $jexp; ?></div></td>
			<td id="string"><small><div style="margin-left:5px;"><?php echo $elemento; ?></div></small></td>
			<td id="string"><small><div style="margin-left:5px;"><?php echo $raca; ?></div></small></td>
			<td id="string"><small><div style="margin-left:5px;"><?php echo $tamanho; ?></div></small></td>
			<td id="string"><div style="margin-left:5px;"><?php echo ($Drop1per/1000); ?>%</div></td>
		</tr>
<?php
}
?>
<?php
		$searchmob2 = mysql_query("SELECT * FROM `mob_db` WHERE `Drop2id`='$id'") or die (mysql_error());
		$num_reg_mob1 = mysql_num_rows($searchmob2);
		for($j=0;$j<$num_reg_mob1;$j++) {
		$Namemob1 = mysql_result($searchmob2, $j, 'iName');
		$IDmob = mysql_result($searchmob2, $j, 'ID');
		$Drop2id = mysql_result($searchmob2, $j, 'Drop2id');
		$Drop2per = mysql_result($searchmob2, $j, 'Drop2per');
		$level = mysql_result($searchmob2, $j, 'LV');
		$hp = mysql_result($searchmob2, $j, 'HP');
		$exp = mysql_result($searchmob2, $j, 'EXP');
		$jexp = mysql_result($searchmob2, $j, 'JEXP');
		$elemento = mysql_result($searchmob2, $j, 'Element');
		$raca = mysql_result($searchmob2, $j, 'RACE');
		$tamanho = mysql_result($searchmob2, $j, 'Scale');
		require('tableelement.php');
		require('race.php');
		require('scale.php');
		?>
		<tr bgcolor="#FFFFFF"><td align="center"><a href="index.php?act=mobview&ID=<?php echo $IDmob; ?>"><img src="media/monster/<?php echo $IDmob; ?>.gif" alt="<?php echo $Namemob1; ?> {<?php echo $IDmob; ?>}" title="<?php echo $Namemob1; ?> {<?php echo $IDmob; ?>}" width="50"></a></td>
			<td><a href="index.php?act=mobview&ID=<?php echo $IDmob; ?>" style="margin-left:5px; text-decoration:none; color:#08088A;"><strong><?php echo $Namemob1; ?></strong></a></td>
			<td id="string"><div style="margin-left:5px;"><?php echo $level; ?></div></td>
			<td id="string"><div style="margin-left:5px;"><?php echo $hp; ?></div></td>
			<td id="string"><div style="margin-left:5px;"><?php echo $exp; ?></div></td>
			<td id="string"><div style="margin-left:5px;"><?php echo $jexp; ?></div></td>
			<td id="string"><small><div style="margin-left:5px;"><?php echo $elemento; ?></div></small></td>
			<td id="string"><small><div style="margin-left:5px;"><?php echo $raca; ?></div></small></td>
			<td id="string"><small><div style="margin-left:5px;"><?php echo $tamanho; ?></div></small></td>
			<td id="string"><div style="margin-left:5px;"><?php echo ($Drop2per/1000); ?>%</div></td>
		</tr>
<?php
}
?>
<?php
		$searchmob3 = mysql_query("SELECT * FROM `mob_db` WHERE `Drop3id`='$id'") or die (mysql_error());
		$num_reg_mob1 = mysql_num_rows($searchmob3);
		for($j=0;$j<$num_reg_mob1;$j++) {
		$Namemob1 = mysql_result($searchmob3, $j, 'iName');
		$IDmob = mysql_result($searchmob3, $j, 'ID');
		$Drop3id = mysql_result($searchmob3, $j, 'Drop3id');
		$Drop3per = mysql_result($searchmob3, $j, 'Drop3per');
		$level = mysql_result($searchmob3, $j, 'LV');
		$hp = mysql_result($searchmob3, $j, 'HP');
		$exp = mysql_result($searchmob3, $j, 'EXP');
		$jexp = mysql_result($searchmob3, $j, 'JEXP');
		$elemento = mysql_result($searchmob3, $j, 'Element');
		$raca = mysql_result($searchmob3, $j, 'RACE');
		$tamanho = mysql_result($searchmob3, $j, 'Scale');
		require('tableelement.php');
		require('race.php');
		require('scale.php');
		?>
		<tr bgcolor="#FFFFFF"><td align="center"><a href="index.php?act=mobview&ID=<?php echo $IDmob; ?>"><img src="media/monster/<?php echo $IDmob; ?>.gif" alt="<?php echo $Namemob1; ?> {<?php echo $IDmob; ?>}" title="<?php echo $Namemob1; ?> {<?php echo $IDmob; ?>}" width="50"></a></td>
			<td><a href="index.php?act=mobview&ID=<?php echo $IDmob; ?>" style="margin-left:5px; text-decoration:none; color:#08088A;"><strong><?php echo $Namemob1; ?></strong></a></td>
			<td id="string"><div style="margin-left:5px;"><?php echo $level; ?></div></td>
			<td id="string"><div style="margin-left:5px;"><?php echo $hp; ?></div></td>
			<td id="string"><div style="margin-left:5px;"><?php echo $exp; ?></div></td>
			<td id="string"><div style="margin-left:5px;"><?php echo $jexp; ?></div></td>
			<td id="string"><small><div style="margin-left:5px;"><?php echo $elemento; ?></div></small></td>
			<td id="string"><small><div style="margin-left:5px;"><?php echo $raca; ?></div></small></td>
			<td id="string"><small><div style="margin-left:5px;"><?php echo $tamanho; ?></div></small></td>
			<td id="string"><div style="margin-left:5px;"><?php echo ($Drop3per/1000); ?>%</div></td>
		</tr>
<?php
}
?>
<?php
		$searchmob4 = mysql_query("SELECT * FROM `mob_db` WHERE `Drop4id`='$id'") or die (mysql_error());
		$num_reg_mob1 = mysql_num_rows($searchmob4);
		for($j=0;$j<$num_reg_mob1;$j++) {
		$Namemob1 = mysql_result($searchmob4, $j, 'iName');
		$IDmob = mysql_result($searchmob4, $j, 'ID');
		$Drop4id = mysql_result($searchmob4, $j, 'Drop4id');
		$Drop4per = mysql_result($searchmob4, $j, 'Drop4per');
		$level = mysql_result($searchmob4, $j, 'LV');
		$hp = mysql_result($searchmob4, $j, 'HP');
		$exp = mysql_result($searchmob4, $j, 'EXP');
		$jexp = mysql_result($searchmob4, $j, 'JEXP');
		$elemento = mysql_result($searchmob4, $j, 'Element');
		$raca = mysql_result($searchmob4, $j, 'RACE');
		$tamanho = mysql_result($searchmob4, $j, 'Scale');
		require('tableelement.php');
		require('race.php');
		require('scale.php');
		?>
		<tr bgcolor="#FFFFFF"><td align="center"><a href="index.php?act=mobview&ID=<?php echo $IDmob; ?>"><img src="media/monster/<?php echo $IDmob; ?>.gif" alt="<?php echo $Namemob1; ?> {<?php echo $IDmob; ?>}" title="<?php echo $Namemob1; ?> {<?php echo $IDmob; ?>}" width="50"></a></td>
			<td><a href="index.php?act=mobview&ID=<?php echo $IDmob; ?>" style="margin-left:5px; text-decoration:none; color:#08088A;"><strong><?php echo $Namemob1; ?></strong></a></td>
			<td id="string"><div style="margin-left:5px;"><?php echo $level; ?></div></td>
			<td id="string"><div style="margin-left:5px;"><?php echo $hp; ?></div></td>
			<td id="string"><div style="margin-left:5px;"><?php echo $exp; ?></div></td>
			<td id="string"><div style="margin-left:5px;"><?php echo $jexp; ?></div></td>
			<td id="string"><small><div style="margin-left:5px;"><?php echo $elemento; ?></div></small></td>
			<td id="string"><small><div style="margin-left:5px;"><?php echo $raca; ?></div></small></td>
			<td id="string"><small><div style="margin-left:5px;"><?php echo $tamanho; ?></div></small></td>
			<td id="string"><div style="margin-left:5px;"><?php echo ($Drop4per/1000); ?>%</div></td>
		</tr>
<?php
}
?>
<?php
		$searchmob5 = mysql_query("SELECT * FROM `mob_db` WHERE `Drop5id`='$id'") or die (mysql_error());
		$num_reg_mob1 = mysql_num_rows($searchmob5);
		for($j=0;$j<$num_reg_mob1;$j++) {
		$Namemob1 = mysql_result($searchmob5, $j, 'iName');
		$IDmob = mysql_result($searchmob5, $j, 'ID');
		$Drop5id = mysql_result($searchmob5, $j, 'Drop5id');
		$Drop5per = mysql_result($searchmob5, $j, 'Drop5per');
		$level = mysql_result($searchmob5, $j, 'LV');
		$hp = mysql_result($searchmob5, $j, 'HP');
		$exp = mysql_result($searchmob5, $j, 'EXP');
		$jexp = mysql_result($searchmob5, $j, 'JEXP');
		$elemento = mysql_result($searchmob5, $j, 'Element');
		$raca = mysql_result($searchmob5, $j, 'RACE');
		$tamanho = mysql_result($searchmob5, $j, 'Scale');
		require('tableelement.php');
		require('race.php');
		require('scale.php');
		?>
		<tr bgcolor="#FFFFFF"><td align="center"><a href="index.php?act=mobview&ID=<?php echo $IDmob; ?>"><img src="media/monster/<?php echo $IDmob; ?>.gif" alt="<?php echo $Namemob1; ?> {<?php echo $IDmob; ?>}" title="<?php echo $Namemob1; ?> {<?php echo $IDmob; ?>}" width="50"></a></td>
			<td><a href="index.php?act=mobview&ID=<?php echo $IDmob; ?>" style="margin-left:5px; text-decoration:none; color:#08088A;"><strong><?php echo $Namemob1; ?></strong></a></td>
			<td id="string"><div style="margin-left:5px;"><?php echo $level; ?></div></td>
			<td id="string"><div style="margin-left:5px;"><?php echo $hp; ?></div></td>
			<td id="string"><div style="margin-left:5px;"><?php echo $exp; ?></div></td>
			<td id="string"><div style="margin-left:5px;"><?php echo $jexp; ?></div></td>
			<td id="string"><small><div style="margin-left:5px;"><?php echo $elemento; ?></div></small></td>
			<td id="string"><small><div style="margin-left:5px;"><?php echo $raca; ?></div></small></td>
			<td id="string"><small><div style="margin-left:5px;"><?php echo $tamanho; ?></div></small></td>
			<td id="string"><div style="margin-left:5px;"><?php echo ($Drop5per/1000); ?>%</div></td>
		</tr>
<?php
}
?>
<?php
		$searchmob6 = mysql_query("SELECT * FROM `mob_db` WHERE `Drop6id`='$id'") or die (mysql_error());
		$num_reg_mob1 = mysql_num_rows($searchmob6);
		for($j=0;$j<$num_reg_mob1;$j++) {
		$Namemob1 = mysql_result($searchmob6, $j, 'iName');
		$IDmob = mysql_result($searchmob6, $j, 'ID');
		$Drop6id = mysql_result($searchmob6, $j, 'Drop6id');
		$Drop6per = mysql_result($searchmob6, $j, 'Drop6per');
		$level = mysql_result($searchmob6, $j, 'LV');
		$hp = mysql_result($searchmob6, $j, 'HP');
		$exp = mysql_result($searchmob6, $j, 'EXP');
		$jexp = mysql_result($searchmob6, $j, 'JEXP');
		$elemento = mysql_result($searchmob6, $j, 'Element');
		$raca = mysql_result($searchmob6, $j, 'RACE');
		$tamanho = mysql_result($searchmob6, $j, 'Scale');
		require('tableelement.php');
		require('race.php');
		require('scale.php');
		?>
		<tr bgcolor="#FFFFFF"><td align="center"><a href="index.php?act=mobview&ID=<?php echo $IDmob; ?>"><img src="media/monster/<?php echo $IDmob; ?>.gif" alt="<?php echo $Namemob1; ?> {<?php echo $IDmob; ?>}" title="<?php echo $Namemob1; ?> {<?php echo $IDmob; ?>}" width="50"></a></td>
			<td><a href="index.php?act=mobview&ID=<?php echo $IDmob; ?>" style="margin-left:5px; text-decoration:none; color:#08088A;"><strong><?php echo $Namemob1; ?></strong></a></td>
			<td id="string"><div style="margin-left:5px;"><?php echo $level; ?></div></td>
			<td id="string"><div style="margin-left:5px;"><?php echo $hp; ?></div></td>
			<td id="string"><div style="margin-left:5px;"><?php echo $exp; ?></div></td>
			<td id="string"><div style="margin-left:5px;"><?php echo $jexp; ?></div></td>
			<td id="string"><small><div style="margin-left:5px;"><?php echo $elemento; ?></div></small></td>
			<td id="string"><small><div style="margin-left:5px;"><?php echo $raca; ?></div></small></td>
			<td id="string"><small><div style="margin-left:5px;"><?php echo $tamanho; ?></div></small></td>
			<td id="string"><div style="margin-left:5px;"><?php echo ($Drop6per/1000); ?>%</div></td>
		</tr>
<?php
}
?>
<?php
		$searchmob7 = mysql_query("SELECT * FROM `mob_db` WHERE `Drop7id`='$id'") or die (mysql_error());
		$num_reg_mob1 = mysql_num_rows($searchmob7);
		for($j=0;$j<$num_reg_mob1;$j++) {
		$Namemob1 = mysql_result($searchmob7, $j, 'iName');
		$IDmob = mysql_result($searchmob7, $j, 'ID');
		$Drop7id = mysql_result($searchmob7, $j, 'Drop7id');
		$Drop7per = mysql_result($searchmob7, $j, 'Drop7per');
		$level = mysql_result($searchmob7, $j, 'LV');
		$hp = mysql_result($searchmob7, $j, 'HP');
		$exp = mysql_result($searchmob7, $j, 'EXP');
		$jexp = mysql_result($searchmob7, $j, 'JEXP');
		$elemento = mysql_result($searchmob7, $j, 'Element');
		$raca = mysql_result($searchmob7, $j, 'RACE');
		$tamanho = mysql_result($searchmob7, $j, 'Scale');
		require('tableelement.php');
		require('race.php');
		require('scale.php');
		?>
		<tr bgcolor="#FFFFFF"><td align="center"><a href="index.php?act=mobview&ID=<?php echo $IDmob; ?>"><img src="media/monster/<?php echo $IDmob; ?>.gif" alt="<?php echo $Namemob1; ?> {<?php echo $IDmob; ?>}" title="<?php echo $Namemob1; ?> {<?php echo $IDmob; ?>}" width="50"></a></td>
			<td><a href="index.php?act=mobview&ID=<?php echo $IDmob; ?>" style="margin-left:5px; text-decoration:none; color:#08088A;"><strong><?php echo $Namemob1; ?></strong></a></td>
			<td id="string"><div style="margin-left:5px;"><?php echo $level; ?></div></td>
			<td id="string"><div style="margin-left:5px;"><?php echo $hp; ?></div></td>
			<td id="string"><div style="margin-left:5px;"><?php echo $exp; ?></div></td>
			<td id="string"><div style="margin-left:5px;"><?php echo $jexp; ?></div></td>
			<td id="string"><small><div style="margin-left:5px;"><?php echo $elemento; ?></div></small></td>
			<td id="string"><small><div style="margin-left:5px;"><?php echo $raca; ?></div></small></td>
			<td id="string"><small><div style="margin-left:5px;"><?php echo $tamanho; ?></div></small></td>
			<td id="string"><div style="margin-left:5px;"><?php echo ($Drop7per/1000); ?>%</div></td>
		</tr>
<?php
}
?>
<?php
		$searchmob8 = mysql_query("SELECT * FROM `mob_db` WHERE `Drop8id`='$id'") or die (mysql_error());
		$num_reg_mob1 = mysql_num_rows($searchmob8);
		for($j=0;$j<$num_reg_mob1;$j++) {
		$Namemob1 = mysql_result($searchmob8, $j, 'iName');
		$IDmob = mysql_result($searchmob8, $j, 'ID');
		$Drop8id = mysql_result($searchmob8, $j, 'Drop8id');
		$Drop8per = mysql_result($searchmob8, $j, 'Drop8per');
		$level = mysql_result($searchmob8, $j, 'LV');
		$hp = mysql_result($searchmob8, $j, 'HP');
		$exp = mysql_result($searchmob8, $j, 'EXP');
		$jexp = mysql_result($searchmob8, $j, 'JEXP');
		$elemento = mysql_result($searchmob8, $j, 'Element');
		$raca = mysql_result($searchmob8, $j, 'RACE');
		$tamanho = mysql_result($searchmob8, $j, 'Scale');
		require('tableelement.php');
		require('race.php');
		require('scale.php');
		?>
		<tr bgcolor="#FFFFFF"><td align="center"><a href="index.php?act=mobview&ID=<?php echo $IDmob; ?>"><img src="media/monster/<?php echo $IDmob; ?>.gif" alt="<?php echo $Namemob1; ?> {<?php echo $IDmob; ?>}" title="<?php echo $Namemob1; ?> {<?php echo $IDmob; ?>}" width="50"></a></td>
			<td><a href="index.php?act=mobview&ID=<?php echo $IDmob; ?>" style="margin-left:5px; text-decoration:none; color:#08088A;"><strong><?php echo $Namemob1; ?></strong></a></td>
			<td id="string"><div style="margin-left:5px;"><?php echo $level; ?></div></td>
			<td id="string"><div style="margin-left:5px;"><?php echo $hp; ?></div></td>
			<td id="string"><div style="margin-left:5px;"><?php echo $exp; ?></div></td>
			<td id="string"><div style="margin-left:5px;"><?php echo $jexp; ?></div></td>
			<td id="string"><small><div style="margin-left:5px;"><?php echo $elemento; ?></div></small></td>
			<td id="string"><small><div style="margin-left:5px;"><?php echo $raca; ?></div></small></td>
			<td id="string"><small><div style="margin-left:5px;"><?php echo $tamanho; ?></div></small></td>
			<td id="string"><div style="margin-left:5px;"><?php echo ($Drop8per/1000); ?>%</div></td>
		</tr>
<?php
}
?>
<?php
		$searchmob9 = mysql_query("SELECT * FROM `mob_db` WHERE `Drop9id`='$id'") or die (mysql_error());
		$num_reg_mob1 = mysql_num_rows($searchmob9);
		for($j=0;$j<$num_reg_mob1;$j++) {
		$Namemob1 = mysql_result($searchmob9, $j, 'iName');
		$IDmob = mysql_result($searchmob9, $j, 'ID');
		$Drop9id = mysql_result($searchmob9, $j, 'Drop9id');
		$Drop9per = mysql_result($searchmob9, $j, 'Drop9per');
		$level = mysql_result($searchmob9, $j, 'LV');
		$hp = mysql_result($searchmob9, $j, 'HP');
		$exp = mysql_result($searchmob9, $j, 'EXP');
		$jexp = mysql_result($searchmob9, $j, 'JEXP');
		$elemento = mysql_result($searchmob9, $j, 'Element');
		$raca = mysql_result($searchmob9, $j, 'RACE');
		$tamanho = mysql_result($searchmob9, $j, 'Scale');
		require('tableelement.php');
		require('race.php');
		require('scale.php');
		?>
		<tr bgcolor="#FFFFFF"><td align="center"><a href="index.php?act=mobview&ID=<?php echo $IDmob; ?>"><img src="media/monster/<?php echo $IDmob; ?>.gif" alt="<?php echo $Namemob1; ?> {<?php echo $IDmob; ?>}" title="<?php echo $Namemob1; ?> {<?php echo $IDmob; ?>}" width="50"></a></td>
			<td><a href="index.php?act=mobview&ID=<?php echo $IDmob; ?>" style="margin-left:5px; text-decoration:none; color:#08088A;"><strong><?php echo $Namemob1; ?></strong></a></td>
			<td id="string"><div style="margin-left:5px;"><?php echo $level; ?></div></td>
			<td id="string"><div style="margin-left:5px;"><?php echo $hp; ?></div></td>
			<td id="string"><div style="margin-left:5px;"><?php echo $exp; ?></div></td>
			<td id="string"><div style="margin-left:5px;"><?php echo $jexp; ?></div></td>
			<td id="string"><small><div style="margin-left:5px;"><?php echo $elemento; ?></div></small></td>
			<td id="string"><small><div style="margin-left:5px;"><?php echo $raca; ?></div></small></td>
			<td id="string"><small><div style="margin-left:5px;"><?php echo $tamanho; ?></div></small></td>
			<td id="string"><div style="margin-left:5px;"><?php echo ($Drop9per/1000); ?>%</div></td>
		</tr>
<?php
}
?>
<?php
		$searchmobmvp1 = mysql_query("SELECT * FROM `mob_db` WHERE `MVP1id`='$id'") or die (mysql_error());
		$num_reg_mob1 = mysql_num_rows($searchmobmvp1);
		for($j=0;$j<$num_reg_mob1;$j++) {
		$Namemob1 = mysql_result($searchmobmvp1, $j, 'iName');
		$IDmob = mysql_result($searchmobmvp1, $j, 'ID');
		$MVP1id = mysql_result($searchmobmvp1, $j, 'MVP1id');
		$MVP1per = mysql_result($searchmobmvp1, $j, 'MVP1per');
		$level = mysql_result($searchmobmvp1, $j, 'LV');
		$hp = mysql_result($searchmobmvp1, $j, 'HP');
		$exp = mysql_result($searchmobmvp1, $j, 'EXP');
		$jexp = mysql_result($searchmobmvp1, $j, 'JEXP');
		$elemento = mysql_result($searchmobmvp1, $j, 'Element');
		$raca = mysql_result($searchmobmvp1, $j, 'RACE');
		$tamanho = mysql_result($searchmobmvp1, $j, 'Scale');
		require('tableelement.php');
		require('race.php');
		require('scale.php');
		?>
		<tr bgcolor="#A9D0F5"><td align="center"><a href="index.php?act=mobview&ID=<?php echo $IDmob; ?>"><img src="media/monster/<?php echo $IDmob; ?>.gif" alt="<?php echo $Namemob1; ?> {<?php echo $IDmob; ?>}" title="<?php echo $Namemob1; ?> {<?php echo $IDmob; ?>}" width="50"></a></td>
			<td><a href="index.php?act=mobview&ID=<?php echo $IDmob; ?>" style="margin-left:5px; text-decoration:none; color:#08088A;"><strong><?php echo $Namemob1; ?></strong></a></td>
			<td id="string"><div style="margin-left:5px;"><?php echo $level; ?></div></td>
			<td id="string"><div style="margin-left:5px;"><?php echo $hp; ?></div></td>
			<td id="string"><div style="margin-left:5px;"><?php echo $exp; ?></div></td>
			<td id="string"><div style="margin-left:5px;"><?php echo $jexp; ?></div></td>
			<td id="string"><small><div style="margin-left:5px;"><?php echo $elemento; ?></div></small></td>
			<td id="string"><small><div style="margin-left:5px;"><?php echo $raca; ?></div></small></td>
			<td id="string"><small><div style="margin-left:5px;"><?php echo $tamanho; ?></div></small></td>
			<td id="string"><div style="margin-left:5px;"><?php echo ($MVP1per/1000); ?>%</div></td>
		</tr>
<?php
}
?>
<?php
		$searchmobmvp2 = mysql_query("SELECT * FROM `mob_db` WHERE `MVP2id`='$id'") or die (mysql_error());
		$num_reg_mob1 = mysql_num_rows($searchmobmvp2);
		for($j=0;$j<$num_reg_mob1;$j++) {
		$Namemob1 = mysql_result($searchmobmvp2, $j, 'iName');
		$IDmob = mysql_result($searchmobmvp2, $j, 'ID');
		$MVP2id = mysql_result($searchmobmvp2, $j, 'MVP2id');
		$MVP2per = mysql_result($searchmobmvp2, $j, 'MVP2per');
		$level = mysql_result($searchmobmvp2, $j, 'LV');
		$hp = mysql_result($searchmobmvp2, $j, 'HP');
		$exp = mysql_result($searchmobmvp2, $j, 'EXP');
		$jexp = mysql_result($searchmobmvp2, $j, 'JEXP');
		$elemento = mysql_result($searchmobmvp2, $j, 'Element');
		$raca = mysql_result($searchmobmvp2, $j, 'RACE');
		$tamanho = mysql_result($searchmobmvp2, $j, 'Scale');
		require('tableelement.php');
		require('race.php');
		require('scale.php');
		?>
		<tr bgcolor="#A9D0F5"><td align="center"><a href="index.php?act=mobview&ID=<?php echo $IDmob; ?>"><img src="media/monster/<?php echo $IDmob; ?>.gif" alt="<?php echo $Namemob1; ?> {<?php echo $IDmob; ?>}" title="<?php echo $Namemob1; ?> {<?php echo $IDmob; ?>}" width="50"></a></td>
			<td><a href="index.php?act=mobview&ID=<?php echo $IDmob; ?>" style="margin-left:5px; text-decoration:none; color:#08088A;"><strong><?php echo $Namemob1; ?></strong></a></td>
			<td id="string"><div style="margin-left:5px;"><?php echo $level; ?></div></td>
			<td id="string"><div style="margin-left:5px;"><?php echo $hp; ?></div></td>
			<td id="string"><div style="margin-left:5px;"><?php echo $exp; ?></div></td>
			<td id="string"><div style="margin-left:5px;"><?php echo $jexp; ?></div></td>
			<td id="string"><small><div style="margin-left:5px;"><?php echo $elemento; ?></div></small></td>
			<td id="string"><small><div style="margin-left:5px;"><?php echo $raca; ?></div></small></td>
			<td id="string"><small><div style="margin-left:5px;"><?php echo $tamanho; ?></div></small></td>
			<td id="string"><div style="margin-left:5px;"><?php echo ($MVP2per/1000); ?>%</div></td>
		</tr>
<?php
}
?>
<?php
		$searchmobmvp3 = mysql_query("SELECT * FROM `mob_db` WHERE `MVP3id`='$id'") or die (mysql_error());
		$num_reg_mob1 = mysql_num_rows($searchmobmvp3);
		for($j=0;$j<$num_reg_mob1;$j++) {
		$Namemob1 = mysql_result($searchmobmvp3, $j, 'iName');
		$IDmob = mysql_result($searchmobmvp3, $j, 'ID');
		$MVP3id = mysql_result($searchmobmvp3, $j, 'MVP3id');
		$MVP3per = mysql_result($searchmobmvp3, $j, 'MVP3per');
		$level = mysql_result($searchmobmvp3, $j, 'LV');
		$hp = mysql_result($searchmobmvp3, $j, 'HP');
		$exp = mysql_result($searchmobmvp3, $j, 'EXP');
		$jexp = mysql_result($searchmobmvp3, $j, 'JEXP');
		$elemento = mysql_result($searchmobmvp3, $j, 'Element');
		$raca = mysql_result($searchmobmvp3, $j, 'RACE');
		$tamanho = mysql_result($searchmobmvp3, $j, 'Scale');
		require('tableelement.php');
		require('race.php');
		require('scale.php');
		?>
		<tr bgcolor="#A9D0F5"><td align="center"><a href="index.php?act=mobview&ID=<?php echo $IDmob; ?>"><img src="media/monster/<?php echo $IDmob; ?>.gif" alt="<?php echo $Namemob1; ?> {<?php echo $IDmob; ?>}" title="<?php echo $Namemob1; ?> {<?php echo $IDmob; ?>}" width="50"></a></td>
			<td><a href="index.php?act=mobview&ID=<?php echo $IDmob; ?>" style="margin-left:5px; text-decoration:none; color:#08088A;"><strong><?php echo $Namemob1; ?></strong></a></td>
			<td id="string"><div style="margin-left:5px;"><?php echo $level; ?></div></td>
			<td id="string"><div style="margin-left:5px;"><?php echo $hp; ?></div></td>
			<td id="string"><div style="margin-left:5px;"><?php echo $exp; ?></div></td>
			<td id="string"><div style="margin-left:5px;"><?php echo $jexp; ?></div></td>
			<td id="string"><small><div style="margin-left:5px;"><?php echo $elemento; ?></div></small></td>
			<td id="string"><small><div style="margin-left:5px;"><?php echo $raca; ?></div></small></td>
			<td id="string"><small><div style="margin-left:5px;"><?php echo $tamanho; ?></div></small></td>
			<td id="string"><div style="margin-left:5px;"><?php echo ($MVP3per/1000); ?>%</div></td>
		</tr>
<?php
}
?>
<?php
}
?>
</table>