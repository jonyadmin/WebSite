<?php if(!defined('EFFICIENT_ROOT')) exit;
if($jobinfo == 16777216){
$jobinfo = "Justiceiro(a)";
}
if($jobinfo == 1){
$jobinfo = "Aprendiz";
}
/* mesclagem */
if($jobinfo == 16514){
$jobinfo = "Espadachim, Cavaleiro, Paladino";
}
if($jobinfo == 8454660){
$jobinfo = "Mago, Bruxo, Sábio, Soul Linker";
}
if($jobinfo == 4294967294){
$jobinfo = "Espadachim, Mago, Arqueiro, Noviço, Mercador, Gatuno, Cavaleiro, Sacerdote, Bruxo, Ferreiro, Caçador, Assassino, Paladino, Monge, Sábio, Arruaceiro, Alquimista, Bardo/Odalisca, Taekwon, Star Gladiator, Soul Linker, Gunslinger, Ninja";
}
/* Todas as Classes */
if($jobinfo == 4294967295){
$jobinfo = "Todas as classes";
}
?>