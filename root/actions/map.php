<?php if(!defined('EFFICIENT_ROOT')) exit; 
require('conf/conect.php');
?>
<h1>MAPAS</h1>
<br>
<br>
<div id="content">
<h3>Selecionar mapa por nome:</h3>
<div class="post">
<form action="/ragnasite/database/index.php" id="selitem" method="get">
		<input type="hidden" id="act" name="act" value="mapview">
		<select name="id" id="sellistitem" onChange="window.open('../database/index.php?act=mapview&id='+this.value,'_self');">
					<?php
					$account = ("SELECT * FROM spawns_pt_br ORDER BY `map` ASC");
					$res = mysql_query($account);
					$num_reg = mysql_num_rows($res);
					for($i=0;$i<$num_reg;$i++) {
					$campo = mysql_fetch_array($res);
					$map_id = $campo["map_id"];
					$map = htmlentities($campo["map"]);
					$map_name = htmlentities($campo["map_name"]);
					echo "<option value=".$id." >".$map."</option>";
					}
						?>
				</select>
				<input style="width:50px; height:20px;" type="submit" id="sendpost" class="small" name="go" value="Ok">
				</form>
			</div>
		<br>
</div>