<?php if(!defined('EFFICIENT_ROOT')) exit; 
require('conf/conect.php');
?>
<h1>VER MONSTROS</h1>
<br>
<br>
<div id="content">
<h3>Selecionar Item:</h3>
<div class="post">
<form action="/ragnasite/database/index.php" id="selitem" method="get">
		<input type="hidden" id="act" name="act" value="mobview">
		<select name="id" id="sellistitem" onChange="window.open('../database/index.php?act=mobview&ID='+this.value,'_self');">
					<?php
					$account = ("SELECT * FROM mob_db_pt_br ORDER BY `iName` ASC");
					$res = mysql_query($account);
					$num_reg = mysql_num_rows($res);
					for($i=0;$i<$num_reg;$i++) {
					$campo = mysql_fetch_array($res);
					$ID = $campo["ID"];
					$iName = htmlentities($campo["iName"]);
					echo "<option value=".$ID." >".$iName."</option>";
					}
					?>
					</select>
					<input style="width:50px; height:20px;" type="submit" id="sendpost" class="small" name="go" value="Ok">
				</form>
			</div>
		<br>
</div>