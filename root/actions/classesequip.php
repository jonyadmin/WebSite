<?php if(!defined('EFFICIENT_ROOT')) exit; 
/* Classe do item */
/* Se for armas */
if($type == 4){
if($view == 1){
$classelocal = "Adaga";
}
if($view == 2){
$classelocal = "Espadas de Uma Mão.";
}
if($view == 3){
$classelocal = "Espadas de Duas Mãos";
}
if($view == 4){
$classelocal = "Lança de Uma Mão";
}
if($view == 5){
$classelocal = "Lança de Duas Mãos";
}
if($view == 6){
$classelocal = "Machado de Uma Mão";
}
if($view == 7){
$classelocal = "Machado de Duas Mãos";
}
if($view == 8){
$classelocal = "Maça";
}
if($view == 10){
$classelocal = "Cajado";
}
if($view == 11){
$classelocal = "Arco";
}
if($view == 12){
$classelocal = "Garra";
}
if($view == 13){
$classelocal = "Instrumentos Musicais";
}
if($view == 14){
$classelocal = "Chicotes";
}
if($view == 15){
$classelocal = "Livros";
}
if($view == 16){
$classelocal = "Katars";
}
if($view == 17){
$classelocal = "Revolvers";
}
if($view == 18){
$classelocal = "Rifles";
}
if($view == 19){
$classelocal = "Shotguns";
}
if($view == 20){
$classelocal = "Escudo, Armamento ou Balas";
}
if($view == 21){
$classelocal = "Lança Granadas";
}
if($view == 22){
$classelocal = "Huuma";
}
if($view > 22){
$classelocal = "Sem Classe determinada";
}
}
/* Classe dos equipamentos */

if($type == 5){
if($equipposition == 512){
$classelocal = "Equip. para cabeça";
}
if($equipposition == 1){
$classelocal = "Equip. para cabeça";
}
if($equipposition == 769){
$classelocal = "Equip. para cabeça";
}
if($equipposition == 768){
$classelocal = "Equip. para cabeça";
}
if($equipposition == 256){
$classelocal = "Equip. para cabeça";
}
if($equipposition == 136){
$classelocal = "Acessórios";
}
if($equipposition == 64){
$classelocal = "Calçados";
}
if($equipposition == 4){
$classelocal = "Capa";
}
if($equipposition == 16){
$classelocal = "Vestimenta";
}
if($equipposition == 32){
$classelocal = "Escudos";
}
}
?>