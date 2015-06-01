<?php
// session_start inicia a sessão
$login = $_POST['user_login'];
$pass = $_POST['pass_login'];

if(strlen($_POST['user_login']) < 4 || strlen($_POST['user_login']) > 20){
echo"<script language='javascript' type='text/javascript'>alert('O login deve ter mais que 4 Digitos e Menos que 20');window.location.href='index.php';</script>";
die();
}
if(strlen($_POST['pass_login']) < 4 || strlen($_POST['pass_login']) > 20){
echo"<script language='javascript' type='text/javascript'>alert('A senha deve ter mais que 4 Digitos e Menos que 20');window.location.href='index.php';</script>";
die();
}
$loginreal = preg_replace('/[^[:alnum:]_]/', '',$login);
$senhareal = preg_replace('/[^[:alnum:]_]/', '',$pass);

session_start();
require('conf/conect.php');
$search = mysql_query("SELECT * FROM login WHERE `userid`='$loginreal' AND `user_pass`='$senhareal'");
if(mysql_num_rows($search) > 0){
$_SESSION['user_login'] = $loginreal; 
$_SESSION['pass_login'] = $senhareal; 
header('location:index.php?act=painel');
} else {
unset ($_SESSION['user_login']); 
unset ($_SESSION['pass_login']);
echo"<script language='javascript' type='text/javascript'>alert('Nao existe Conta com esse Login ou Senha');window.location.href='index.php';</script>";
}
?>