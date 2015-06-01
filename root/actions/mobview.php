<?php if(!defined('EFFICIENT_ROOT')) exit; 
require('conf/conect.php');
include('mobver.php');
$ID = $_GET['ID'];
$searchmob = ("SELECT * FROM mob_db WHERE ID='$ID'");
$resmob = mysql_query($searchmob);
if( @mysql_error() )
	die(mysql_error());
if( !mysql_num_rows($resmob) ) {
	die("Monstro não encontrado.");
} else {
$campomob = mysql_fetch_array($resmob);
$Namemob = $campomob["iName"];
$HP = $campomob["HP"];
$baseEXP = $campomob["EXP"];
$JBaseExp = $campomob["JEXP"];
$Level = $campomob["LV"];
$elemento = $campomob["Element"];
$raca = $campomob["Race"];
$tamanho = $campomob["Scale"];
$STR = $campomob["STR"];
$AGI = $campomob["AGI"];
$VIT = $campomob["VIT"];
$INT = $campomob["INT"];
$DEX = $campomob["DEX"];
$LUK = $campomob["LUK"];
$DEF = $campomob["DEF"];
$MDEF = $campomob["MDEF"];


require('tableelement.php');
require('race.php');
require('scale.php');


$searchmobmvp = ("SELECT * FROM base_mvp WHERE ID='$ID'");
$resmobmvp = mysql_query($searchmobmvp);
$campomvp = mysql_fetch_array($resmobmvp);
$type = $campomvp["type"];
if( @mysql_error() )
	die(mysql_error());
?>
<br>
<link rel="stylesheet" type="text/css" href="../database/css/style.css"/>
<table cellpadding="0" cellspacing="1" border="0" bgcolor="#CCCCCC" width="85%" style="font:11px Verdana, Arial, Helvetica, sans-serif; border:1px solid #ccc;">
			<tr height="30" bgcolor="#EFEFEF"><td colspan="5" id="string"><h3><div style="margin-left:1%;"><?php echo $Namemob; ?> (Id: <?php echo $ID; ?>)</div><?php if(!mysql_num_rows($resmobmvp)){echo '';} if($type == 1){ echo '<div style="margin-left:200px; position:absolute; margin-top:-20px;" title="Esse Monstro e um MVP!"><img src="images/mvp.png"></div>';}if($type == 2){echo '<div style="margin-left:200px; position:absolute; margin-top:-20px;" title="Esse Monstro e um Mini-Boss!"><img src="images/mini.png"></div>';}?></h3></td></tr>
			<tr bgcolor="#FFFFFF"><td width="150" align="center" id="string" rowspan="13"><img src="media/monster/<?php echo $ID; ?>.gif" alt="" title=""> </td>
			<td width="100" height="0"></td><td height="0"></td><td width="65" height="0"></td><td width="65" height="0"></td>
			<tr bgcolor="#FFFFFF">
			<td id="string" bgcolor="#EFEFEF"><div id="table"><strong>HP</strong></div></td><td id="string"><div id="resultado"><?php echo $HP;?></div></td>
			<td id="string" bgcolor="#EFEFEF"><strong>Hit</strong></td><td id="string"><div id="resultado">329</div></td>
			</tr>
			<tr bgcolor="#FFFFFF">
			<td id="string" bgcolor="#EFEFEF"><div id="table"><strong><small>Base</small> EXP</strong></div></td><td id="string"><div id="resultado"><?php echo $baseEXP; ?></div></td>
			<td id="string" bgcolor="#EFEFEF"><strong>Flee</strong></td><td id="string"><div id="resultado">329</div></td>
			</tr>
			<tr bgcolor="#FFFFFF">
			<td id="string" bgcolor="#EFEFEF"><div id="table"><strong><small>Job</small> EXP</strong></div></td><td id="string"><div id="resultado"><?php echo $JBaseExp; ?></div></td>
			<td id="string" bgcolor="#EFEFEF"><strong>FOR</strong></td><td id="string"><div id="resultado"><?php echo $STR; ?></div></td>
			</tr>
			<tr bgcolor="#FFFFFF">
			<td id="string" bgcolor="#EFEFEF"><div id="table"><strong>Level</strong></div></td><td id="string"><div id="resultado"><?php echo $Level; ?></div></td>
			<td id="string" bgcolor="#EFEFEF"><strong>AGI</strong></td><td id="string"><div id="resultado"><?php echo $AGI; ?></div></td>
			</tr>
			<tr bgcolor="#FFFFFF">
			<td id="string" bgcolor="#EFEFEF"><div id="table"><strong>Elemento</strong></div></td><td id="string"><div id="resultado"><a style="text-decoration:none;" href="index.php?act=elements"><?php echo $elemento; ?></a></div></td>
			<td id="string" bgcolor="#EFEFEF"><strong>VIT</strong></td><td id="string"><div id="resultado"><?php echo $VIT; ?></div></td>
			</tr>
			<tr bgcolor="#FFFFFF">
			<td id="string" bgcolor="#EFEFEF"><div id="table"><strong>Raça</strong></div></td><td id="string"><div id="resultado"><?php echo $raca; ?></div></td>
			<td id="string" bgcolor="#EFEFEF"><strong>INT</strong></td><td id="string"><div id="resultado"><?php echo $INT; ?></div></td>
			</tr>
			<tr bgcolor="#FFFFFF">
			<td id="string" bgcolor="#EFEFEF"><div id="table"><strong>Tamanho</strong></div></td><td id="string"><div id="resultado"><?php echo $tamanho; ?></div></td>
			<td id="string" bgcolor="#EFEFEF"><strong>DEX</strong></td><td id="string"><div id="resultado"><?php echo $DEX; ?></div></td>
			</tr>
			<tr bgcolor="#FFFFFF">
			<td id="string" bgcolor="#EFEFEF"><div id="table"><strong>Ataque</strong></div></td><td id="string"><div id="resultado">3880~31110</div></td>
			<td id="string" bgcolor="#EFEFEF"><strong>SOR</strong></td><td id="string"><div id="resultado"><?php echo $LUK; ?></div></td>
			</tr>
			<tr bgcolor="#FFFFFF">
			<td id="string" bgcolor="#EFEFEF"><div id="table"><strong>DEF</strong></div></td><td id="string"><div id="resultado"><?php echo $DEF; ?></div></td>
			<td id="string" bgcolor="#EFEFEF"><strong>MDEF</strong></td><td id="string"><div id="resultado"><?php echo $MDEF; ?></div></td>
			</tr>
			<tr bgcolor="#FFFFFF">
			<td id="string" bgcolor="#EFEFEF" colspan="2"><div id="table"><strong>Skills</strong></div></td><td id="string" bgcolor="#EFEFEF" colspan="2"><strong><div id="resultado">Estilo</div></strong></td>
			</tr>
			<tr bgcolor="#FFFFFF">
			<td id="stringalign" colspan="2">(em desenvolvimento)</td><td id="string" colspan="2">- Agressivo<br>- Detecta cast<br>- MVP<br></td>
			</tr>
			</table>
<?php
}
$seardropveri = mysql_query("SELECT * FROM `mob_db` WHERE ID='$ID'") or die (mysql_error());
$campoveri = mysql_fetch_array($seardropveri);
$DropCardper = $campoveri["DropCardper"];
$Drop1id = $campoveri["Drop1id"];
$Drop2id = $campoveri["Drop2id"];
$Drop3id = $campoveri["Drop3id"];
$Drop4id = $campoveri["Drop4id"];
$Drop5id = $campoveri["Drop5id"];
$Drop6id = $campoveri["Drop6id"];
$Drop7id = $campoveri["Drop7id"];
$Drop8id = $campoveri["Drop8id"];
$Drop9id = $campoveri["Drop9id"];
$MVP1id = $campoveri["MVP1id"];
$MVP2id = $campoveri["MVP2id"];
$MVP3id = $campoveri["MVP3id"];
if($DropCardper == 0 && $Drop1id == 0 && $Drop2id == 0 && $Drop3id == 0 && $Drop4id == 0 && $Drop5id == 0 && $Drop6id == 0 && $Drop7id == 0 && $Drop8id == 0 && $Drop9id == 0 && $MVP1id == 0 && $MVP2id == 0 && $MVP3id == 0) {
	echo("");
} else {
?>
<br><h2>Drop de itens:</h2><br>
<table cellpadding="0" cellspacing="1" border="0" bgcolor="#CCCCCC" width="800" style="font:11px Verdana, Arial, Helvetica, sans-serif; border:1px solid #ccc;">
							<tr height="25">
							<td width="26"></td>
							<td width="180" id="string"><strong>Nome</strong></td>
							<td width="300" id="string"><strong>Descrição</strong></td>
							<td id="string"><strong>Peso</strong></td>
							<td id="string"><strong>Vende</strong></td>
							<td width="80" id="string"><strong>Drop</strong></td>
							</tr>
<?php
		$searchdrop = mysql_query("SELECT `DropCardid`,`DropCardper` FROM `mob_db` WHERE `ID`='$ID'") or die (mysql_error());
		$num_reg_drop1 = mysql_num_rows($searchdrop);
		for($j=0;$j<$num_reg_drop1;$j++) {
		$DropCardid = mysql_result($searchdrop, $j, 'DropCardid');
		if($DropCardid == 0 || $DropCardid == NULL){
		 echo "";
		}else{	
		$DropCardper = mysql_result($searchdrop, $j, 'DropCardper');
		$searchname1 = mysql_query("SELECT * FROM `item_db_pt_br` WHERE `ID`='$DropCardid'") or die (mysql_error());
		$campodrop = mysql_fetch_array($searchname1);
		$Name = htmlentities($campodrop["name_japanese"]);
		$peso = $campodrop["weight"];
		$valorv = $campodrop["price_sell"];
		if($valorv == NULL){
		$valorv = "Sem valor definido";
		}else{
		$valorv = $campodrop["price_sell"];
		$valorv = $valorv."z";
		}
		$searchdesc = mysql_query("SELECT `desc` FROM `item_desc` WHERE `id`='$DropCardid'") or die (mysql_error());
		$campodesc = mysql_fetch_array($searchdesc);
		$desc = htmlentities($campodesc["desc"]);
?>
							<tr bgcolor="#FFFFFF"><td><a href="index.php?act=itemview&id=<?php echo $DropCardid; ?>"><img src="media/item/card.gif" alt="<?php echo $Name; ?> {<?php echo $DropCardid; ?>}" title="<?php echo $Name; ?> {<?php echo $DropCardid; ?>}"> </a></td>
							<td id="string"><a href="index.php?act=cardview&id=<?php echo $DropCardid; ?>" style="margin-left:5px; text-decoration:none; color:#08088A;"><?php echo $Name; ?></a></td>
							<td id="string"><div style="margin-left:5px; margin-right:5px;"><?php echo $desc; ?></div></td>
							<td id="string" align="center"><small><?php echo ($peso/10); ?></small></td>
							<td id="string" align="center"><small><?php echo $valorv; ?></small></td>
							<td id="string" align="center"><small><?php echo ($DropCardper/100); ?>%</small></td>
							</tr>
<?php
}
}
?>
<?php
		$searchdrop1 = mysql_query("SELECT `Drop1id`,`Drop1per` FROM `mob_db` WHERE `ID`='$ID'") or die (mysql_error());
		$num_reg_drop1 = mysql_num_rows($searchdrop1);
		for($j=0;$j<$num_reg_drop1;$j++) {
		$Drop1id = mysql_result($searchdrop1, $j, 'Drop1id');
		if($Drop1id == 0 || $Drop1id == NULL){
		 echo "";
		}else{	
		$Drop1per = mysql_result($searchdrop1, $j, 'Drop1per');
		$searchname1 = mysql_query("SELECT * FROM `item_db_pt_br` WHERE `ID`='$Drop1id'") or die (mysql_error());
		$campodrop = mysql_fetch_array($searchname1);
		$Name = htmlentities($campodrop["name_japanese"]);
		$peso = $campodrop["weight"];
		$valorv = $campodrop["price_sell"];
		$type = $campodrop["type"];
		if($valorv == NULL){
		$valorv = "Sem valor definido";
		}else{
		$valorv = $campodrop["price_sell"];
		$valorv = $valorv."z";
		}
		$searchdesc = mysql_query("SELECT `desc` FROM `item_desc` WHERE `id`='$Drop1id'") or die (mysql_error());
		$campodesc = mysql_fetch_array($searchdesc);
		$desc = htmlentities($campodesc["desc"]);
		if($type == 0 || $type == 2 || $type == 3 || $type == 11){
		$type = "itemview";
		}
		if($type == 5 || $type == 4 || $type == 8){
		$type = "equipview";
		}
?>
							<tr bgcolor="#EFEFEF"><td><a href="index.php?act=<?php echo $type; ?>&id=<?php echo $Drop1id; ?>"><img src="media/item/<?php echo $Drop1id; ?>.gif" alt="<?php echo $Name; ?> {<?php echo $Drop1id; ?>}" title="<?php echo $Name; ?> {<?php echo $Drop1id; ?>}"> </a></td>
							<td id="string"><a href="index.php?act=<?php echo $type; ?>&id=<?php echo $Drop1id; ?>" style="margin-left:5px; text-decoration:none; color:#08088A;"><?php echo $Name; ?></a></td>
							<td id="string"><div style="margin-left:5px; margin-right:5px;"><?php echo $desc; ?></div></td>
							<td id="string" align="center"><small><?php echo ($peso/10); ?></small></td>
							<td id="string" align="center"><small><?php echo $valorv; ?></small></td>
							<td id="string" align="center"><small><?php echo ($Drop1per/100); ?>%</small></td>
							</tr>
<?php
}
}
?>
<?php
		$searchdrop2 = mysql_query("SELECT `Drop2id`,`Drop2per` FROM `mob_db` WHERE `ID`='$ID'") or die (mysql_error());
		$num_reg_drop1 = mysql_num_rows($searchdrop2);
		for($j=0;$j<$num_reg_drop1;$j++) {
		$Drop2id = mysql_result($searchdrop2, $j, 'Drop2id');
		if($Drop2id == 0 || $Drop2id == NULL){
		 echo "";
		}else{	
		$Drop2per = mysql_result($searchdrop2, $j, 'Drop2per');
		$searchname1 = mysql_query("SELECT * FROM `item_db_pt_br` WHERE `ID`='$Drop2id'") or die (mysql_error());
		$campodrop = mysql_fetch_array($searchname1);
		$Name = htmlentities($campodrop["name_japanese"]);
		$peso = $campodrop["weight"];
		$valorv = $campodrop["price_sell"];
		$type = $campodrop["type"];
		if($valorv == NULL){
		$valorv = "Sem valor definido";
		}else{
		$valorv = $campodrop["price_sell"];
		$valorv = $valorv."z";
		}
		$searchdesc = mysql_query("SELECT `desc` FROM `item_desc` WHERE `id`='$Drop2id'") or die (mysql_error());
		$campodesc = mysql_fetch_array($searchdesc);
		$desc = htmlentities($campodesc["desc"]);
		if($type == 0 || $type == 2 || $type == 3 || $type == 11){
		$type = "itemview";
		}
		if($type == 5 || $type == 4 || $type == 8){
		$type = "equipview";
		}
?>
							<tr bgcolor="#FFFFFF"><td><a href="index.php?act=<?php echo $type; ?>&id=<?php echo $Drop2id; ?>"><img src="media/item/<?php echo $Drop2id; ?>.gif" alt="<?php echo $Name; ?> {<?php echo $Drop2id; ?>}" title="<?php echo $Name; ?> {<?php echo $Drop2id; ?>}"> </a></td>
							<td id="string"><a href="index.php?act=<?php echo $type; ?>&id=<?php echo $Drop2id; ?>" style="margin-left:5px; text-decoration:none; color:#08088A;"><?php echo $Name; ?></a></td>
							<td id="string"><div style="margin-left:5px; margin-right:5px;"><?php echo $desc; ?></div></td>
							<td id="string" align="center"><small><?php echo ($peso/10); ?></small></td>
							<td id="string" align="center"><small><?php echo $valorv; ?></small></td>
							<td id="string" align="center"><small><?php echo ($Drop2per/100); ?>%</small></td>
							</tr>
<?php
}
}
?>
<?php
		$searchdrop3 = mysql_query("SELECT `Drop3id`,`Drop3per` FROM `mob_db` WHERE `ID`='$ID'") or die (mysql_error());
		$num_reg_drop1 = mysql_num_rows($searchdrop3);
		for($j=0;$j<$num_reg_drop1;$j++) {
		$Drop3id = mysql_result($searchdrop3, $j, 'Drop3id');
		if($Drop3id == 0 || $Drop3id == NULL){
		 echo "";
		}else{	
		$Drop3per = mysql_result($searchdrop3, $j, 'Drop3per');
		$searchname1 = mysql_query("SELECT * FROM `item_db_pt_br` WHERE `ID`='$Drop3id'") or die (mysql_error());
		$campodrop = mysql_fetch_array($searchname1);
		$Name = htmlentities($campodrop["name_japanese"]);
		$peso = $campodrop["weight"];
		$valorv = $campodrop["price_sell"];
		$type = $campodrop["type"];
		if($valorv == NULL){
		$valorv = "Sem valor definido";
		}else{
		$valorv = $campodrop["price_sell"];
		$valorv = $valorv."z";
		}
		$searchdesc = mysql_query("SELECT `desc` FROM `item_desc` WHERE `id`='$Drop3id'") or die (mysql_error());
		$campodesc = mysql_fetch_array($searchdesc);
		$desc = htmlentities($campodesc["desc"]);
		if($type == 0 || $type == 2 || $type == 3 || $type == 11){
		$type = "itemview";
		}
		if($type == 5 || $type == 4 || $type == 8){
		$type = "equipview";
		}
?>
							<tr bgcolor="#EFEFEF"><td><a href="index.php?act=<?php echo $type; ?>&id=<?php echo $Drop3id; ?>"><img src="media/item/<?php echo $Drop3id; ?>.gif" alt="<?php echo $Name; ?> {<?php echo $Drop3id; ?>}" title="<?php echo $Name; ?> {<?php echo $Drop3id; ?>}"> </a></td>
							<td id="string"><a href="index.php?act=<?php echo $type; ?>&id=<?php echo $Drop3id; ?>" style="margin-left:5px; text-decoration:none; color:#08088A;"><?php echo $Name; ?></a></td>
							<td id="string"><div style="margin-left:5px; margin-right:5px;"><?php echo $desc; ?></div></td>
							<td id="string" align="center"><small><?php echo ($peso/10); ?></small></td>
							<td id="string" align="center"><small><?php echo $valorv; ?></small></td>
							<td id="string" align="center"><small><?php echo ($Drop3per/100); ?>%</small></td>
							</tr>
<?php
}
}
?>
<?php
		$searchdrop4 = mysql_query("SELECT `Drop4id`,`Drop4per` FROM `mob_db` WHERE `ID`='$ID'") or die (mysql_error());
		$num_reg_drop1 = mysql_num_rows($searchdrop4);
		for($j=0;$j<$num_reg_drop1;$j++) {
		$Drop4id = mysql_result($searchdrop4, $j, 'Drop4id');
		if($Drop4id == 0 || $Drop4id == NULL){
		 echo "";
		}else{	
		$Drop4per = mysql_result($searchdrop4, $j, 'Drop4per');
		$searchname1 = mysql_query("SELECT * FROM `item_db_pt_br` WHERE `ID`='$Drop4id'") or die (mysql_error());
		$campodrop = mysql_fetch_array($searchname1);
		$Name = htmlentities($campodrop["name_japanese"]);
		$peso = $campodrop["weight"];
		$valorv = $campodrop["price_sell"];
		$type = $campodrop["type"];
		if($valorv == NULL){
		$valorv = "Sem valor definido";
		}else{
		$valorv = $campodrop["price_sell"];
		$valorv = $valorv."z";
		}
		$searchdesc = mysql_query("SELECT `desc` FROM `item_desc` WHERE `id`='$Drop4id'") or die (mysql_error());
		$campodesc = mysql_fetch_array($searchdesc);
		$desc = htmlentities($campodesc["desc"]);
		if($type == 0 || $type == 2 || $type == 3 || $type == 11){
		$type = "itemview";
		}
		if($type == 5 || $type == 4 || $type == 8){
		$type = "equipview";
		}
?>
							<tr bgcolor="#FFFFFF"><td><a href="index.php?act=<?php echo $type; ?>&id=<?php echo $Drop4id; ?>"><img src="media/item/<?php echo $Drop4id; ?>.gif" alt="<?php echo $Name; ?> {<?php echo $Drop4id; ?>}" title="<?php echo $Name; ?> {<?php echo $Drop4id; ?>}"> </a></td>
							<td id="string"><a href="index.php?act=<?php echo $type; ?>&id=<?php echo $Drop4id; ?>" style="margin-left:5px; text-decoration:none; color:#08088A;"><?php echo $Name; ?></a></td>
							<td id="string"><div style="margin-left:5px; margin-right:5px;"><?php echo $desc; ?></div></td>
							<td id="string" align="center"><small><?php echo ($peso/10); ?></small></td>
							<td id="string" align="center"><small><?php echo $valorv; ?></small></td>
							<td id="string" align="center"><small><?php echo ($Drop4per/100); ?>%</small></td>
							</tr>
<?php
}
}
?>
<?php
		$searchdrop5 = mysql_query("SELECT `Drop5id`,`Drop5per` FROM `mob_db` WHERE `ID`='$ID'") or die (mysql_error());
		$num_reg_drop1 = mysql_num_rows($searchdrop5);
		for($j=0;$j<$num_reg_drop1;$j++) {
		$Drop5id = mysql_result($searchdrop5, $j, 'Drop5id');
		if($Drop5id == 0 || $Drop5id == NULL){
		 echo "";
		}else{	
		$Drop5per = mysql_result($searchdrop5, $j, 'Drop5per');
		$searchname1 = mysql_query("SELECT * FROM `item_db_pt_br` WHERE `ID`='$Drop5id'") or die (mysql_error());
		$campodrop = mysql_fetch_array($searchname1);
		$Name = htmlentities($campodrop["name_japanese"]);
		$peso = $campodrop["weight"];
		$valorv = $campodrop["price_sell"];
		$type = $campodrop["type"];
		if($valorv == NULL){
		$valorv = "Sem valor definido";
		}else{
		$valorv = $campodrop["price_sell"];
		$valorv = $valorv."z";
		}
		$searchdesc = mysql_query("SELECT `desc` FROM `item_desc` WHERE `id`='$Drop5id'") or die (mysql_error());
		$campodesc = mysql_fetch_array($searchdesc);
		$desc = htmlentities($campodesc["desc"]);
		if($type == 0 || $type == 2 || $type == 3 || $type == 11){
		$type = "itemview";
		}
		if($type == 5 || $type == 4 || $type == 8){
		$type = "equipview";
		}
?>
							<tr bgcolor="#EFEFEF"><td><a href="index.php?act=<?php echo $type; ?>&id=<?php echo $Drop5id; ?>"><img src="media/item/<?php echo $Drop5id; ?>.gif" alt="<?php echo $Name; ?> {<?php echo $Drop5id; ?>}" title="<?php echo $Name; ?> {<?php echo $Drop5id; ?>}"> </a></td>
							<td id="string"><a href="index.php?act=<?php echo $type; ?>&id=<?php echo $Drop5id; ?>" style="margin-left:5px; text-decoration:none; color:#08088A;"><?php echo $Name; ?></a></td>
							<td id="string"><div style="margin-left:5px; margin-right:5px;"><?php echo $desc; ?></div></td>
							<td id="string" align="center"><small><?php echo ($peso/10); ?></small></td>
							<td id="string" align="center"><small><?php echo $valorv; ?></small></td>
							<td id="string" align="center"><small><?php echo ($Drop5per/100); ?>%</small></td>
							</tr>
<?php
}
}
?>
<?php
		$searchdrop6 = mysql_query("SELECT `Drop6id`,`Drop6per` FROM `mob_db` WHERE `ID`='$ID'") or die (mysql_error());
		$num_reg_drop1 = mysql_num_rows($searchdrop6);
		for($j=0;$j<$num_reg_drop1;$j++) {
		$Drop6id = mysql_result($searchdrop6, $j, 'Drop6id');
		if($Drop6id == 0 || $Drop6id == NULL){
		 echo "";
		}else{	
		$Drop6per = mysql_result($searchdrop6, $j, 'Drop6per');
		$searchname1 = mysql_query("SELECT * FROM `item_db_pt_br` WHERE `ID`='$Drop6id'") or die (mysql_error());
		$campodrop = mysql_fetch_array($searchname1);
		$Name = htmlentities($campodrop["name_japanese"]);
		$peso = $campodrop["weight"];
		$valorv = $campodrop["price_sell"];
		$type = $campodrop["type"];
		if($valorv == NULL){
		$valorv = "Sem valor definido";
		}else{
		$valorv = $campodrop["price_sell"];
		$valorv = $valorv."z";
		}
		$searchdesc = mysql_query("SELECT `desc` FROM `item_desc` WHERE `id`='$Drop6id'") or die (mysql_error());
		$campodesc = mysql_fetch_array($searchdesc);
		$desc = htmlentities($campodesc["desc"]);
		if($type == 0 || $type == 2 || $type == 3 || $type == 11){
		$type = "itemview";
		}
		if($type == 5 || $type == 4 || $type == 8){
		$type = "equipview";
		}
?>
							<tr bgcolor="#FFFFFF"><td><a href="index.php?act=<?php echo $type; ?>&id=<?php echo $Drop6id; ?>"><img src="media/item/<?php echo $Drop6id; ?>.gif" alt="<?php echo $Name; ?> {<?php echo $Drop6id; ?>}" title="<?php echo $Name; ?> {<?php echo $Drop6id; ?>}"> </a></td>
							<td id="string"><a href="index.php?act=<?php echo $type; ?>&id=<?php echo $Drop6id; ?>" style="margin-left:5px; text-decoration:none; color:#08088A;"><?php echo $Name; ?></a></td>
							<td id="string"><div style="margin-left:5px; margin-right:5px;"><?php echo $desc; ?></div></td>
							<td id="string" align="center"><small><?php echo ($peso/10); ?></small></td>
							<td id="string" align="center"><small><?php echo $valorv; ?></small></td>
							<td id="string" align="center"><small><?php echo ($Drop6per/100); ?>%</small></td>
							</tr>
<?php
}
}
?>
<?php
		$searchdrop7 = mysql_query("SELECT `Drop7id`,`Drop7per` FROM `mob_db` WHERE `ID`='$ID'") or die (mysql_error());
		$num_reg_drop1 = mysql_num_rows($searchdrop7);
		for($j=0;$j<$num_reg_drop1;$j++) {
		$Drop7id = mysql_result($searchdrop7, $j, 'Drop7id');
		if($Drop7id == 0 || $Drop7id == NULL){
		 echo "";
		}else{	
		$Drop7per = mysql_result($searchdrop7, $j, 'Drop7per');
		$searchname1 = mysql_query("SELECT * FROM `item_db_pt_br` WHERE `ID`='$Drop7id'") or die (mysql_error());
		$campodrop = mysql_fetch_array($searchname1);
		$Name = htmlentities($campodrop["name_japanese"]);
		$peso = $campodrop["weight"];
		$valorv = $campodrop["price_sell"];
		$type = $campodrop["type"];
		if($valorv == NULL){
		$valorv = "Sem valor definido";
		}else{
		$valorv = $campodrop["price_sell"];
		$valorv = $valorv."z";
		}
		$searchdesc = mysql_query("SELECT `desc` FROM `item_desc` WHERE `id`='$Drop7id'") or die (mysql_error());
		$campodesc = mysql_fetch_array($searchdesc);
		$desc = htmlentities($campodesc["desc"]);
		if($type == 0 || $type == 2 || $type == 3 || $type == 11){
		$type = "itemview";
		}
		if($type == 5 || $type == 4 || $type == 8){
		$type = "equipview";
		}
?>
							<tr bgcolor="#EFEFEF"><td><a href="index.php?act=<?php echo $type; ?>&id=<?php echo $Drop7id; ?>"><img src="media/item/<?php echo $Drop7id; ?>.gif" alt="<?php echo $Name; ?> {<?php echo $Drop7id; ?>}" title="<?php echo $Name; ?> {<?php echo $Drop7id; ?>}"> </a></td>
							<td id="string"><a href="index.php?act=<?php echo $type; ?>&id=<?php echo $Drop7id; ?>" style="margin-left:5px; text-decoration:none; color:#08088A;"><?php echo $Name; ?></a></td>
							<td id="string"><div style="margin-left:5px; margin-right:5px;"><?php echo $desc; ?></div></td>
							<td id="string" align="center"><small><?php echo ($peso/10); ?></small></td>
							<td id="string" align="center"><small><?php echo $valorv; ?></small></td>
							<td id="string" align="center"><small><?php echo ($Drop7per/100); ?>%</small></td>
							</tr>
<?php
}
}
?>
<?php
		$searchdrop8 = mysql_query("SELECT `Drop8id`,`Drop8per` FROM `mob_db` WHERE `ID`='$ID'") or die (mysql_error());
		$num_reg_drop1 = mysql_num_rows($searchdrop8);
		for($j=0;$j<$num_reg_drop1;$j++) {
		$Drop8id = mysql_result($searchdrop8, $j, 'Drop8id');
		if($Drop8id == 0 || $Drop8id == NULL){
		 echo "";
		}else{	
		$Drop8per = mysql_result($searchdrop8, $j, 'Drop8per');
		$searchname1 = mysql_query("SELECT * FROM `item_db_pt_br` WHERE `ID`='$Drop8id'") or die (mysql_error());
		$campodrop = mysql_fetch_array($searchname1);
		$Name = htmlentities($campodrop["name_japanese"]);
		$peso = $campodrop["weight"];
		$valorv = $campodrop["price_sell"];
		$type = $campodrop["type"];
		if($valorv == NULL){
		$valorv = "Sem valor definido";
		}else{
		$valorv = $campodrop["price_sell"];
		$valorv = $valorv."z";
		}
		$searchdesc = mysql_query("SELECT `desc` FROM `item_desc` WHERE `id`='$Drop8id'") or die (mysql_error());
		$campodesc = mysql_fetch_array($searchdesc);
		$desc = htmlentities($campodesc["desc"]);
		if($type == 0 || $type == 2 || $type == 3 || $type == 11){
		$type = "itemview";
		}
		if($type == 5 || $type == 4 || $type == 8){
		$type = "equipview";
		}
?>
							<tr bgcolor="#FFFFFF"><td><a href="index.php?act=<?php echo $type; ?>&id=<?php echo $Drop8id; ?>"><img src="media/item/<?php echo $Drop8id; ?>.gif" alt="<?php echo $Name; ?> {<?php echo $Drop8id; ?>}" title="<?php echo $Name; ?> {<?php echo $Drop8id; ?>}"> </a></td>
							<td id="string"><a href="index.php?act=<?php echo $type; ?>&id=<?php echo $Drop8id; ?>" style="margin-left:5px; text-decoration:none; color:#08088A;"><?php echo $Name; ?></a></td>
							<td id="string"><div style="margin-left:5px; margin-right:5px;"><?php echo $desc; ?></div></td>
							<td id="string" align="center"><small><?php echo ($peso/10); ?></small></td>
							<td id="string" align="center"><small><?php echo $valorv; ?></small></td>
							<td id="string" align="center"><small><?php echo ($Drop8per/100); ?>%</small></td>
							</tr>
<?php
}
}
?>
<?php
		$searchdrop9 = mysql_query("SELECT `Drop9id`,`Drop8per` FROM `mob_db` WHERE `ID`='$ID'") or die (mysql_error());
		$num_reg_drop1 = mysql_num_rows($searchdrop9);
		for($j=0;$j<$num_reg_drop1;$j++) {
		$Drop9id = mysql_result($searchdrop9, $j, 'Drop9id');
		if($Drop9id == 0 || $Drop9id == NULL){
		 echo "";
		}else{	
		$Drop8per = mysql_result($searchdrop9, $j, 'Drop8per');
		$searchname1 = mysql_query("SELECT * FROM `item_db_pt_br` WHERE `ID`='$Drop9id'") or die (mysql_error());
		$campodrop = mysql_fetch_array($searchname1);
		$Name = htmlentities($campodrop["name_japanese"]);
		$peso = $campodrop["weight"];
		$valorv = $campodrop["price_sell"];
		$type = $campodrop["type"];
		if($valorv == NULL){
		$valorv = "Sem valor definido";
		}else{
		$valorv = $campodrop["price_sell"];
		$valorv = $valorv."z";
		}
		$searchdesc = mysql_query("SELECT `desc` FROM `item_desc` WHERE `id`='$Drop9id'") or die (mysql_error());
		$campodesc = mysql_fetch_array($searchdesc);
		$desc = htmlentities($campodesc["desc"]);
		if($type == 0 || $type == 2 || $type == 3 || $type == 11){
		$type = "itemview";
		}
		if($type == 5 || $type == 4 || $type == 8){
		$type = "equipview";
		}
?>
							<tr bgcolor="#EFEFEF"><td><a href="index.php?act=<?php echo $type; ?>&id=<?php echo $Drop9id; ?>"><img src="media/item/<?php echo $Drop9id; ?>.gif" alt="<?php echo $Name; ?> {<?php echo $Drop9id; ?>}" title="<?php echo $Name; ?> {<?php echo $Drop9id; ?>}"> </a></td>
							<td id="string"><a href="index.php?act=<?php echo $type; ?>&id=<?php echo $Drop9id; ?>" style="margin-left:5px; text-decoration:none; color:#08088A;"><?php echo $Name; ?></a></td>
							<td id="string"><div style="margin-left:5px; margin-right:5px;"><?php echo $desc; ?></div></td>
							<td id="string" align="center"><small><?php echo ($peso/10); ?></small></td>
							<td id="string" align="center"><small><?php echo $valorv; ?></small></td>
							<td id="string" align="center"><small><?php echo ($Drop8per/100); ?>%</small></td>
							</tr>
<?php
}
}
}
?>
</table>
<br><h2>Habita em:</h2><br>
<?php


?>
<table cellpadding="0" cellspacing="1" border="0" bgcolor="#CCCCCC" width="800" style="border:1px solid #ccc; font:11px Verdana, Arial, Helvetica, sans-serif;">
						<tr height="25">
						<td width="105" id="string"><strong>Mapa</strong></td>
						<td width="120" id="string"><strong>Nome</strong></td>
						<td id="string"><strong>Legenda</strong></td>
						<td id="string" width="80"><strong>Quantidade</strong></td>
						<td id="string" width="80"><strong>Tempo</strong></td>
						</tr>
<?php
$searchmap = mysql_query("SELECT * FROM `spawns_pt_br` WHERE `mob_id`='$ID'") or die (mysql_error());
$num_reg_map = mysql_num_rows($searchmap);
for($j=0;$j<$num_reg_map;$j++) {
$Mapid = mysql_result($searchmap, $j, 'map');
$amount = mysql_result($searchmap, $j, 'amount');
$time = mysql_result($searchmap, $j, 'delay1');
$Namemap = mysql_result($searchmap, $j, 'map_name');
if($time == 0){
$timedes = "Instântaneo";
}
if($time > 1 && $time < 60000){
$timedes = " Seg";
}
if($time > 60000 && $time < 3600000){
$timedes = " Min";
}
if($time > 3600000 && $time < 86400000){
$timedes = " Hora(s)";
}
if($time == 86400000 && $time > 86400000){
$timedes = " Dia(s)";
}
?>
						<tr bgcolor="#FFFFFF">
							<td align="center"><a href="/index.php?s=maps&id=1257"><img src="media/maps/<?php echo $Mapid;?>.gif" alt="<?php echo $Mapid;?>" title="<?php echo $Mapid;?>" width="100"> </a></td>
							<td id="string"><a href="/index.php?s=maps&id=1257" style="margin-left:5px; text-decoration:none; color:#08088A;"><?php echo $Mapid;?></a></td>
							<td id="string"><a href="/index.php?s=maps&id=1257" style="margin-left:5px; text-decoration:none; color:#08088A;"><?php echo $Namemap;?></a></td>
							<td id="string" align="center"><?php echo $amount; ?></td>
							<td id="string" align="center">
							<?php 
							if($time == 0){
							echo $timedes;
							}
							if($time > 1 && $time < 60000){
							echo ($time/1000); echo $timedes;
							}
							if($time > 60000 && $time < 3600000){
							echo ($time/1000/60); echo $timedes;
							}
							if($time > 3600000 && $time < 86400000){
							echo ($time/1000/60); echo $timedes;
							}
							if($time == 86400000 && $time > 86400000){
							echo ($time/1000/60); echo $timedes;
							}
							?>
							</td>
						</tr>
<?php
}
?>
</table>