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
<h1>Personagens</h1>
<div id="chars">
<?php
$var1 = 'M';
if($sex == $var1){
	$sex = "2";
}else{
	$sex = "1";
}
$charsslot1 = mysql_query("SELECT * FROM `char` WHERE `account_id`='".$user_account_id."' AND `char_num`='1'") or die (mysql_error());
$dados_slot1 = mysql_num_rows($charsslot1);
if($dados_slot1 == 0 || $dados_slot1 == "" || $dados_slot1 == NULL){
echo '<img style="margin-left:10px; " src="../database/images/slotnoactive.png">';
}else{
$infochar1 = mysql_fetch_array($charsslot1);	
$name = $infochar1["name"];
$id = $infochar1["char_id"];
$class = $infochar1["class"];
$lv = $infochar1["base_level"];
$lvjob = $infochar1["job_level"];
require('class.php');
?>
<br><br>
<div style="margin-left:10px;" id="contchar">
<h4 class="inforcashstatsnome">1° - <?php echo $name;?></h4>
<div id="imgchar">
<?php
if($sex == 2){
		?>
		<h4><img style="margin-left:5px; margin-top:10px;" src="../database/media/class/<?php echo $class; ?>.gif"></h4>
		<?php
}else{
		?>
	<img style=" margin-left:5px; margin-top:10px;" src="../database/media/class/F<?php echo $class; ?>.gif">
	<?php
}
?>
</div>
<br>
<?php
if($sex == 2){
		?>
		<h4 class="inforcashstatsjob"><?php echo $nameclass;?></h4>
		<?php
}else{
		?>
	<h4 class="inforcashstatsjob"><?php echo $nameclassf;?></h4>
	<?php
}
?>
<h4 class="inforcashstatsbaselv" ><?php echo $lv;?>/<?php echo $lvjob;?></h4>
<div class="infochar">Informações</div>
<?php
}
?>
</div>

<!--//// slot 2////-->
<?php
$charsslot2 = mysql_query("SELECT * FROM `char` WHERE `account_id`='".$user_account_id."' AND `char_num`='2'") or die (mysql_error());
$dados_slot2 = mysql_num_rows($charsslot2);
if($dados_slot2 == 0 || $dados_slot2 == "" || $dados_slot2 == NULL){
echo '<img style="margin-left:200px; margin-top:-250px;" src="../database/images/slotnoactive.png">';
}else{
$infochar2 = mysql_fetch_array($charsslot2);	
$name = $infochar2["name"];
$id = $infochar2["char_id"];
$class = $infochar2["class"];
$lv = $infochar2["base_level"];
$lvjob = $infochar2["job_level"];
require('class.php');
?>
<div style="margin-left:200px; margin-top:-250px;" id="contchar">
<h4 class="inforcashstatsnome">2° - <?php echo $name;?></h4>
<div id="imgchar">
<?php
if($sex == 2){
		?>
		<h4><img style="margin-left:5px; margin-top:10px;" src="../database/media/class/<?php echo $class; ?>.gif"></h4>
		<?php
}else{
		?>
	<img style=" margin-left:5px; margin-top:10px;" src="../database/media/class/F<?php echo $class; ?>.gif">
	<?php
}
?>
</div>
<br>
<?php
if($sex == 2){
		?>
		<h4 class="inforcashstatsjob"><?php echo $nameclass;?></h4>
		<?php
}else{
		?>
	<h4 class="inforcashstatsjob"><?php echo $nameclassf;?></h4>
	<?php
}
?>
<h4 class="inforcashstatsbaselv" ><?php echo $lv;?>/<?php echo $lvjob;?></h4>
<div class="infochar">Informações</div>
<?php
}
?>
</div>

<!--//// slot 3////-->
<?php
$charsslot3 = mysql_query("SELECT * FROM `char` WHERE `account_id`='".$user_account_id."' AND `char_num`='3'") or die (mysql_error());
$dados_slot3 = mysql_num_rows($charsslot3);
if($dados_slot3 == 0 || $dados_slot3 == "" || $dados_slot3 == NULL){
echo '<img style="margin-left:390px; margin-top:-250px;" src="../database/images/slotnoactive.png">';
}else{
$infochar3 = mysql_fetch_array($charsslot3);	
$name = $infochar3["name"];
$id = $infochar3["char_id"];
$class = $infochar3["class"];
$lv = $infochar3["base_level"];
$lvjob = $infochar3["job_level"];
require('class.php');
?>
<div style="margin-left:400px; margin-top:-250px;" id="contchar">
<h4 class="inforcashstatsnome">3° - <?php echo $name;?></h4>
<div id="imgchar">
<?php
if($sex == 2){
		?>
		<h4><img style="margin-left:5px; margin-top:10px;" src="../database/media/class/<?php echo $class; ?>.gif"></h4>
		<?php
}else{
		?>
	<img style=" margin-left:5px; margin-top:10px;" src="../database/media/class/F<?php echo $class; ?>.gif">
	<?php
}
?>
</div>
<br>
<?php
if($sex == 2){
		?>
		<h4 class="inforcashstatsjob"><?php echo $nameclass;?></h4>
		<?php
}else{
		?>
	<h4 class="inforcashstatsjob"><?php echo $nameclassf;?></h4>
	<?php
}
?>
<h4 class="inforcashstatsbaselv" ><?php echo $lv;?>/<?php echo $lvjob;?></h4>
<div class="infochar">Informações</div>
<?php
}
?>
</div>

<!--//// slot 4////-->
<?php
$charsslot4 = mysql_query("SELECT * FROM `char` WHERE `account_id`='".$user_account_id."' AND `char_num`='4'") or die (mysql_error());
$dados_slot4 = mysql_num_rows($charsslot4);
if($dados_slot4 == 0 || $dados_slot4 == "" || $dados_slot4 == NULL){
echo '<img style="margin-left:590px; margin-top:-250px;" src="../database/images/slotnoactive.png">';
}else{
$infochar4 = mysql_fetch_array($charsslot4);	
$name = $infochar4["name"];
$id = $infochar4["char_id"];
$class = $infochar4["class"];
$lv = $infochar4["base_level"];
$lvjob = $infochar4["job_level"];
require('class.php');
?>
<div style="margin-left:500px; margin-top:-250px;" id="contchar">
<h4 class="inforcashstatsnome">4° - <?php echo $name;?></h4>
<div id="imgchar">
<?php
if($sex == 2){
		?>
		<h4><img style="margin-left:5px; margin-top:10px;" src="../database/media/class/<?php echo $class; ?>.gif"></h4>
		<?php
}else{
		?>
	<img style=" margin-left:5px; margin-top:10px;" src="../database/media/class/F<?php echo $class; ?>.gif">
	<?php
}
?>
</div>
<br>
<?php
if($sex == 2){
		?>
		<h4 class="inforcashstatsjob"><?php echo $nameclass;?></h4>
		<?php
}else{
		?>
	<h4 class="inforcashstatsjob"><?php echo $nameclassf;?></h4>
	<?php
}
?>
<h4 class="inforcashstatsbaselv" ><?php echo $lv;?>/<?php echo $lvjob;?></h4>
<div class="infochar">Informações</div>
<?php
}
?>
</div>

<!--//// slot 5////-->
<?php
$charsslot5 = mysql_query("SELECT * FROM `char` WHERE `account_id`='".$user_account_id."' AND `char_num`='5'") or die (mysql_error());
$dados_slot5 = mysql_num_rows($charsslot5);
if($dados_slot5 == 0 || $dados_slot5 == "" || $dados_slot5 == NULL){
echo '<img style="margin-top:5px; margin-left:10px;" src="../database/images/slotnoactive.png">';
}else{
$infochar5 = mysql_fetch_array($charsslot5);	
$name = $infochar5["name"];
$id = $infochar5["char_id"];
$class = $infochar5["class"];
$lv = $infochar5["base_level"];
$lvjob = $infochar5["job_level"];
require('class.php');
?>
<div style="margin-left:10px; margin-top:200px;" id="contchar">
<h4 class="inforcashstatsnome">5° - <?php echo $name;?></h4>
<div id="imgchar">
<?php
if($sex == 2){
		?>
		<h4><img style="margin-left:5px; margin-top:10px;" src="../database/media/class/<?php echo $class; ?>.gif"></h4>
		<?php
}else{
		?>
	<img style=" margin-left:5px; margin-top:10px;" src="../database/media/class/F<?php echo $class; ?>.gif">
	<?php
}
?>
</div>
<br>
<?php
if($sex == 2){
		?>
		<h4 class="inforcashstatsjob"><?php echo $nameclass;?></h4>
		<?php
}else{
		?>
	<h4 class="inforcashstatsjob"><?php echo $nameclassf;?></h4>
	<?php
}
?>
<h4 class="inforcashstatsbaselv" ><?php echo $lv;?>/<?php echo $lvjob;?></h4>
<div class="infochar">Informações</div>
<?php
}
?>
</div>

<!--//// slot 6////-->
<?php
$charsslot6 = mysql_query("SELECT * FROM `char` WHERE `account_id`='".$user_account_id."' AND `char_num`='6'") or die (mysql_error());
$dados_slot6 = mysql_num_rows($charsslot6);
if($dados_slot6 == 0 || $dados_slot6 == "" || $dados_slot6 == NULL){
echo '<img style="margin-left:200px; margin-top:-215px;" src="../database/images/slotnoactive.png">';
}else{
$infochar6 = mysql_fetch_array($charsslot6);	
$name = $infochar6["name"];
$id = $infochar6["char_id"];
$class = $infochar6["class"];
$lv = $infochar6["base_level"];
$lvjob = $infochar6["job_level"];
require('class.php');
?>
<div style="margin-left:700px; margin-top:-250px;" id="contchar">
<h4 class="inforcashstatsnome">6° - <?php echo $name;?></h4>
<div id="imgchar">
<?php
if($sex == 2){
		?>
		<h4><img style="margin-left:5px; margin-top:10px;" src="../database/media/class/<?php echo $class; ?>.gif"></h4>
		<?php
}else{
		?>
	<img style=" margin-left:5px; margin-top:10px;" src="../database/media/class/F<?php echo $class; ?>.gif">
	<?php
}
?>
</div>
<br>
<?php
if($sex == 2){
		?>
		<h4 class="inforcashstatsjob"><?php echo $nameclass;?></h4>
		<?php
}else{
		?>
	<h4 class="inforcashstatsjob"><?php echo $nameclassf;?></h4>
	<?php
}
?>
<h4 class="inforcashstatsbaselv" ><?php echo $lv;?>/<?php echo $lvjob;?></h4>
<div class="infochar">Informações</div>
<?php
}
?>
</div>

<!--//// slot 7////-->
<?php
$charsslot7 = mysql_query("SELECT * FROM `char` WHERE `account_id`='".$user_account_id."' AND `char_num`='7'") or die (mysql_error());
$dados_slot7 = mysql_num_rows($charsslot7);
if($dados_slot7 == 0 || $dados_slot7 == "" || $dados_slot7 == NULL){
echo '<img style="margin-left:420px; margin-top:-215px;" src="../database/images/slotnoactive.png">';
}else{
$infochar7 = mysql_fetch_array($charsslot7);	
$name = $infochar7["name"];
$id = $infochar7["char_id"];
$class = $infochar7["class"];
$lv = $infochar7["base_level"];
$lvjob = $infochar7["job_level"];
require('class.php');
?>
<div style="margin-left:700px; margin-top:-250px;" id="contchar">
<h4 class="inforcashstatsnome">7° - <?php echo $name;?></h4>
<div id="imgchar">
<?php
if($sex == 2){
		?>
		<h4><img style="margin-left:5px; margin-top:10px;" src="../database/media/class/<?php echo $class; ?>.gif"></h4>
		<?php
}else{
		?>
	<img style=" margin-left:5px; margin-top:10px;" src="../database/media/class/F<?php echo $class; ?>.gif">
	<?php
}
?>
</div>
<br>
<?php
if($sex == 2){
		?>
		<h4 class="inforcashstatsjob"><?php echo $nameclass;?></h4>
		<?php
}else{
		?>
	<h4 class="inforcashstatsjob"><?php echo $nameclassf;?></h4>
	<?php
}
?>
<h4 class="inforcashstatsbaselv" ><?php echo $lv;?>/<?php echo $lvjob;?></h4>
<div class="infochar">Informações</div>
<?php
}
?>
</div>

<!--//// slot 8////-->
<?php
$charsslot8 = mysql_query("SELECT * FROM `char` WHERE `account_id`='".$user_account_id."' AND `char_num`='8'") or die (mysql_error());
$dados_slot8 = mysql_num_rows($charsslot8);
if($dados_slot8 == 0 || $dados_slot8 == "" || $dados_slot8 == NULL){
echo '<img style="margin-left:200px; margin-top:-400px;" src="../database/images/slotnoactive.png">';
}else{
$infochar8 = mysql_fetch_array($charsslot8);	
$name = $infochar8["name"];
$id = $infochar8["char_id"];
$class = $infochar8["class"];
$lv = $infochar8["base_level"];
$lvjob = $infochar8["job_level"];
require('class.php');
?>
<div style="margin-left:700px; margin-top:-400px;" id="contchar">
<h4 class="inforcashstatsnome">8° - <?php echo $name;?></h4>
<div id="imgchar">
<?php
if($sex == 2){
		?>
		<h4><img style="margin-left:5px; margin-top:10px;" src="../database/media/class/<?php echo $class; ?>.gif"></h4>
		<?php
}else{
		?>
	<img style=" margin-left:5px; margin-top:10px;" src="../database/media/class/F<?php echo $class; ?>.gif">
	<?php
}
?>
</div>
<br>
<?php
if($sex == 2){
		?>
		<h4 class="inforcashstatsjob"><?php echo $nameclass;?></h4>
		<?php
}else{
		?>
	<h4 class="inforcashstatsjob"><?php echo $nameclassf;?></h4>
	<?php
}
?>
<h4 class="inforcashstatsbaselv" ><?php echo $lv;?>/<?php echo $lvjob;?></h4>
<div class="infochar">Informações</div>
<?php
}
?>
</div>

</div>
</div>