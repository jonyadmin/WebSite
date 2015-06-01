<?php
// session_start inicia a sessão
@ini_set('display_errors',1);
@ini_set('display_startup_erros',1);
$login = $_POST['user_login'];
$pass = $_POST['pass_login'];
$pre1_login = preg_replace('/[^[:alnum:]_]/', '',$login);
$pre1_senha = preg_replace('/[^[:alnum:]_]/', '',$pass);
$pre2_login = preg_replace("/(from|select|insert|delete|truncate|where|drop table|show tables|#|\*|--|\\\\)/","",$pre1_login);
$pre2_senha = preg_replace("/(from|select|insert|delete|truncate|where|drop table|show tables|#|\*|--|\\\\)/","",$pre1_senha);
$pre3_login = trim($pre2_login);
$pre3_senha = trim($pre2_senha);
$pre4_login = strip_tags($pre3_login);
$pre4_senha = strip_tags($pre3_senha);
$pre5_login = addslashes($pre4_login);
$pre5_senha = addslashes($pre4_senha);

if(strlen($_POST['user_login']) < 4 || strlen($_POST['user_login']) > 20){
echo"<script language='javascript' type='text/javascript'>alert('O login deve ter mais que 4 Digitos e Menos que 20');window.location.href='http://www.portalrag.com/brasil/index.php';</script>";
die();
}
if(strlen($_POST['pass_login']) < 4 || strlen($_POST['pass_login']) > 20){
echo"<script language='javascript' type='text/javascript'>alert('A senha deve ter mais que 4 Digitos e Menos que 20');window.location.href='http://www.portalrag.com/brasil/index.php';</script>";
die();
}
session_start();
$connect = mysql_connect('127.0.0.1','root','vertrigo');
$db = mysql_select_db('ragnachaosbrathena');
$searchaccount = mysql_query("SELECT * FROM login WHERE `userid`='$pre5_login' AND `user_pass`='$pre5_senha'");
if(mysql_num_rows($searchaccount) > 0){
$_SESSION['user_login'] = $pre5_login; 
$_SESSION['pass_login'] = $pre5_senha;
header('location:../../index.php?act=painel');
} else {
unset ($_SESSION['user_login']); 
unset ($_SESSION['pass_login']);
echo"<script language='javascript' type='text/javascript'>alert('Nao existe Conta com esse Login ou Senha');window.location.href='../../index.php';</script>";
}
?>