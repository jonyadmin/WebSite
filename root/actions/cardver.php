<?php if(!defined('EFFICIENT_ROOT')) exit; 
require('conf/conect.php');
?>
<h1>VER CARTAS</h1>
<br>
<br>
<div id="content">
<h3>Selecionar Cartas:</h3>
<div class="post">
<form action="/ragnasite/database/index.php" id="selitem" method="get">
		<input type="hidden" id="act" name="act" value="cardview">
		<select name="id" id="sellistitem" onChange="window.open('../database/index.php?act=cardview&id='+this.value,'_self');">
					<?php
					$account = ("SELECT * FROM item_db_pt_br WHERE type='6' ORDER BY `name_japanese` ASC");
					$res = mysql_query($account);
					$num_reg = mysql_num_rows($res);
					for($i=0;$i<$num_reg;$i++) {
					$campo = mysql_fetch_array($res);
					$id = $campo["id"];
					$Name = htmlentities($campo["name_japanese"]);
					echo "<option value=".$id." >".$Name."</option>";
					}
						?>
				</select>
				<input style="width:50px; height:20px;" type="submit" id="sendpost" class="small" name="go" value="Ok">
				</form>
			</div>
		<br>
</div>
