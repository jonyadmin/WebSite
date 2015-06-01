<?php if(!defined('EFFICIENT_ROOT')) exit;

?>
<html>
<head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" type="text/css" href="../database/css/style.css"/>
</head>
<div id="login" style="width:350px; margin-left:290px; height:205px;">
<font face="Georgia" size="4">
<form action="verific_login.php" method="post">

            <div id="log" style="margin-left:20px; margin-top:10px;">
                <label>Login:</label><br><br>
                <input placeholder=" Seu Login" style="width:300px; border-radius:4px; height:25px;" type="text" id="user_login" name="user_login" required>
            </div>
			<br>
            <div id="senha" style="margin-left:20px;">
                <label>Senha:</label><br><br>
                <input placeholder=" Sua Senha" align="center" style="width:300px; border-radius:4px; height:25px;" type="password" id="pass_login" name="pass_login" required>
            </div>
			<br>
 </font>
            <div id="checkbox" style="margin-left:140px;">
                <a href="#">Esqueceu a senha?</a> <label for="remember_me" >Lembre-me?</label> 
                <input type="checkbox" id="remember_me" name="_remember_me" value="on" />
            </div><br>
			<div id="enter">
            <input style="margin-left:215px; border-radius:4px; width:100px; height:25px;" type="submit" id="logar" name="logar" value="Login" />
			</div>
 </form>

 </div>
 <br><br>
</html>