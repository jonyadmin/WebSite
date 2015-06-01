<?php if(!defined('EFFICIENT_ROOT')) exit; ?> 
	<div id="centro" style="">
	<style>
		a,img {border: none;}
		.trs {-webkit-transition:all ease-out 0.5s;
			-moz-transition:all ease-out 0.5s;
			-o-transition:all ease-out 0.5s;
			-ms-transition:all ease-out 0.5s;
			transition:all ease-out 0.5s;
			
	}
		
		#slider {position: relative; z-index: 1;}
		#slider a { position: absolute; top: 0; left: 0; opacity: 0;filter:alpha(opacity=0);}
		.ativo {opacity: 1!important; filter:alpha(opacity=100)!important;}
		
		/*controladores*/
		span {background: #0190EE; cursor: url(images/hand.cur), auto; opacity: 0;filter:alpha(opacity=0); position: absolute; bottom: 40%; width: 43px; height: 43px; z-index: 5;}
		.next {right: 10px;}
		.next:before,.next:after {left: 21px;}
		.next:before {
			-webkit-transform: rotate(-42deg);
			top: 5px;
		}
		.next:after {
			-webkit-transform: rotate(-132deg);
			top: 19px;
		}
		.next:before,.next:after,.prev:before,.prev:after {content: "";
			height: 20px;
			background: #fff;
			width: 1px;
			position: absolute;
		}

		.prev {left: 10px;}
		.prev:before,.prev:after {left: 18px;}
		.prev:before {
			-webkit-transform: rotate(42deg);
			top: 5px;
		}
		.prev:after {
			-webkit-transform: rotate(132deg);
			top: 19px;
		}


		figure:hover span {opacity: 0.76;filter:alpha(opacity=76);}

		figure {
			max-width: 500px;
			height: 300px;
			position: relative;
			overflow: hidden;
			margin-top: -8px;
			position:left;
			margin-left:320px;
		}

		figcaption {padding: 10px; color: #fff; font-family: "Kaushan Script","Lato","arial"; font-size: 10px; width: 100%; position: absolute; bottom: 0; text-align: left; height: 65px; z-index: 5}
	</style>
<div class="direita">
	<div id="logar">
		<div id='controle'>
			<div class='controle-left'>
				<form method="post" action="root/actions/verifc_login.php" autocomplete="off">
					<input type="textarea" maxlength="20" class="login" name="user_login" id="user_login">
					<input type="password" maxlength="20" class="password-input" name="pass_login" id="pass_login">
					<button class="enter-button"></button>
				</form>
			</div>
		</div>
		
	</div>
			<a href="http://ragnayokai.net/board3rd/index.php?/topic/366-downloads-ragnayokai-3rd-2015/#entry4426" target="_blank"><img src="images/download.jpg"> </a>
			<div style="margin-top:3px;">
			<a href="indexce42.html?p=doacao"><img src="images/doacao.png"></a>
			<a href="index2522.html?p=registrar" ><img src="images/registrar.png"></a>
			<a href="indexce42.html?p=doacao"><img src="images/doacao.png"></a>
			<a href="index2522.html?p=registrar" ><img src="images/registrar.png"></a>
			</div>
</div>
	<figure>
		<span class="trs next"></span>
		<span class="trs prev"></span>

		<div id="slider">
			<a href="#" class="trs"><img src="images/slide/slide1.jpg" alt="<b>BEM-VINDO</b> A equipe de administração está feliz em te-lo conosco, todos os sistemas disponíveis em nosso servidor foi criado com base no divertimento de nossos jogadores." /></a>
			<a href="#" class="trs"><img src="images/slide/slide2.jpg" alt="<b>FAÇA UMA DOAÇÃO</b> O servidor é totalmente gratuito, mas aceitamos doações para ajudar a manter a comunidade ativa e como gratificação a equipe de administração trabalha para seu divertimento." /></a>
			<a href="#" class="trs"><img src="images/slide/slide3.jpg" alt="<b>ENTRETENIMENTO</b> Foi desenvolvido diversos sistemas para melhorar a diversão de nossos jogadores, todos eles encontram-se auto-explicativo em nosso fórum de suporte." /></a>
			<a href="#" class="trs"><img src="images/slide/slide4.jpg" alt="Legenda da imagem 2" /></a>
			<a href="#" class="trs"><img src="images/slide/slide5.jpg" alt="Legenda da imagem 2" /></a>			
		</div>

		<figcaption></figcaption>
	</figure>

<div id="novid">
<u>~~Comandos Liberados~~</u>
<a>Comandos Liberados:</a>
<b>@warp, @jump,@go, @autoloot, @exp, @showexp, @autotrade, @invite, @leave, @accept, @reject, @away, @commands, @hominfo, @rates, @changegm, @serverdate, @servertime, @date, @time, @mail</b>
<a>Comandos [VIP]:</a>
<b>Além de todos os comandos normais os VIP's tem também: @mobalive, @protecao, @id, @bonus,.(Para obter o Vip basta Votar!)Clique aqui para votar<br></b>
</div>
<div id="comand">
<u>~~Atualizações do DataBase~~</u>
</div>
<div id="novidades">
<u>~~Novidades do Servidor~~</u>
</div>
		<script type="text/javascript">
		function setaImagem(){
			var settings = {
				primeiraImg: function(){
					elemento = document.querySelector("#slider a:first-child");
					elemento.classList.add("ativo");
					this.legenda(elemento);
				},

				slide: function(){
					elemento = document.querySelector(".ativo");

					if(elemento.nextElementSibling){
						elemento.nextElementSibling.classList.add("ativo");
						settings.legenda(elemento.nextElementSibling);
						elemento.classList.remove("ativo");
					}else{
						elemento.classList.remove("ativo");
						settings.primeiraImg();
					}

				},

				proximo: function(){
					clearInterval(intervalo);
					elemento = document.querySelector(".ativo");
					
					if(elemento.nextElementSibling){
						elemento.nextElementSibling.classList.add("ativo");
						settings.legenda(elemento.nextElementSibling);
						elemento.classList.remove("ativo");
					}else{
						elemento.classList.remove("ativo");
						settings.primeiraImg();
					}
					intervalo = setInterval(settings.slide,4000);
				},

				anterior: function(){
					clearInterval(intervalo);
					elemento = document.querySelector(".ativo");
					
					if(elemento.previousElementSibling){
						elemento.previousElementSibling.classList.add("ativo");
						settings.legenda(elemento.previousElementSibling);
						elemento.classList.remove("ativo");
					}else{
						elemento.classList.remove("ativo");						
						elemento = document.querySelector("a:last-child");
						elemento.classList.add("ativo");
						this.legenda(elemento);
					}
					intervalo = setInterval(settings.slide,4000);
				},

				legenda: function(obj){
					var legenda = obj.querySelector("img").getAttribute("alt");
					document.querySelector("figcaption").innerHTML = legenda;
				}

			}


			//chama o slide
			settings.primeiraImg();

			//chama a legenda
			settings.legenda(elemento);

			//chama o slide à um determinado tempo
			var intervalo = setInterval(settings.slide,4000);
			document.querySelector(".next").addEventListener("click",settings.proximo,false);
			document.querySelector(".prev").addEventListener("click",settings.anterior,false);

		}

		window.addEventListener("load",setaImagem,false);
	</script>
      </div>
     
      <!-- Media links -->
	  <div id="mainclose">
      
      <table style="margin-left: 125px;">
	  <div class="exlinesp" style="margin-top:5px; margin: 20px 10 20px 0;"></div>
	  	<div id="pontdrops" >
		<a href="http://legendsofgames.com/midgard" class="drops01" target="_blank"></a>
		<a href="http://legendsofgames.com/midgard" class="drops02" target="_blank"></a>
		<a href="indexce42.html?p=doacao" class="drops03"></a>
		<a href="http://www.ragnayokai.com/board3rd" class="drops04" target="_blank"></a>
		<a href="indexa597.html?p=tutoriais" class="drops05"></a>
		<a href="index5dcb.html?p=contato" class="drops06"></a>
		</div>
        <div class="exlinesp" style="margin-top:145px;"></div>
      </table>
      </div>
      <!-- end -->
