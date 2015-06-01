<?php if(!defined('EFFICIENT_ROOT')) exit;
/* Tipo de equipamento */
if($type == 5){
$typeequip = "Equipamento";
}
if($type == 4){
$typeequip = "Arma";
}

/* Onde ele Equipa? */
if($equipposition == 1){
$equipposition = "Cabeça abaixo";
}
if($equipposition == 256){
$equipposition = "Cabeça Cima";
}
if($equipposition == 512){
$equipposition = "Cabeça Meio";
}
if($equipposition == 136){
$equipposition = "Acessório direito, Acessório esquerdo";
}
if($equipposition == 64){
$equipposition = "Pés";
}
if($equipposition == 4){
$equipposition = "Capa";
}
if($equipposition == 16){
$equipposition = "Vestimenta";
}
if($equipposition == 32){
$equipposition = "Mão esquerda";
}
if($equipposition == 34){
$equipposition = "Mão direita, Mão esquerda";
}
if($equipposition == 2){
$equipposition = "Mão Direita";
}
if($equipposition == 32768){
$equipposition = "Mantimentos de armas";
}
if($equipposition == 769){
$equipposition = "Cabeça abaixo, Cabeça acima";
}
if($equipposition == 768){
$equipposition = "Cabeça acima, Cabeça meio";
}
/* Tipos de Jobs que podem Usar */

if($tiposjobs == 7){
$tiposjobs = "Jobs Normais, Transclasses, Babys";
}
if($tiposjobs == 1){
$tiposjobs = "Jobs Normais";
}
if($tiposjobs == 2){
$tiposjobs = "Transclasses";
}
if($tiposjobs == 4){
$tiposjobs = "Babys";
}
if($tiposjobs == 6){
$tiposjobs = "Transclasses, Babys";
}
if($tiposjobs == 3){
$tiposjobs = "Jobs Normais, Babys";
}

/* Genero que pode usar o equipamento */

if($genero == 0){
$genero = "Meninas";
}
if($genero == 1){
$genero = "Meninas";
}
if($genero == 2){
$genero = "Meninos e Meninas";
}

/* Definir valor e informaçao de custo de cada item */

if($valorc == NULL){
$valorc = "Sem valor definido";
}else {
$valorc = $campoequip["price_buy"];
$valorc = $valorc."z";
}
if($valorv == NULL){
$valorv = "Sem valor definido";
}else{
$valorv = $campoequip["price_sell"];
$valorv = $valorv."z";
}

/* Desabilitar Print na tela caso resultado sql for = 0 */
if($view == NULL){
$view = "0";
}
if($Lvequipar == 0){
$Lvequipar = "Qualquer nível";
}
if($slots == 0){
$slots = "Não possui slots";
}
?>